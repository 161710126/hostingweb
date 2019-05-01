<?php

namespace App\Http\Controllers;

use App\Event;
use File;
use Alert;
use Illuminate\Http\Request;
use App\contact;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $events = Event::orderBy('updated_at','desc')->get();
         $countNotif = contact::where('status',0)->get()->count();
        return view('event.index',compact('events','countNotif')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countNotif = contact::where('status',0)->get()->count();
        return view('event.create',compact('countNotif'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Data Successfully Saved', 'Good Job!')->autoclose(1700);
         $this->validate($request,[
            'poto' => 'required|',
            'judul' => 'required|unique:events|',
            'tgl' => 'required|min:2',
            'jam' => 'required|min:2',
            'alamat' => 'required|min:2',
            'deskripsi' => 'required|'
             
        ]);

        $events = new Event;
           if ($request->hasFile('poto')){
            $file=$request->file('poto');
            $destinationPath=public_path().'/assets/img/gambarweb/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $events->poto= $filename;
        }

        $events->judul = $request->judul;
        $events->tgl = $request->tgl;
        $events->jam = $request->jam;
        $events->alamat = $request->alamat;
        $events->deskripsi = $request->deskripsi;
        $events->slug =str_slug($request->judul, '-');
        $events->save();
        return redirect()->route('events.index');  
           }
           public function publish($id)
    {
        $mobil = Event::find($id);
        if ($mobil->status === 1) {
            $mobil->status = 0;
            Alert::success('Data successfully unpublished', 'Good Job')->persistent(2000);
        } else {
            $mobil->status= 1;
            Alert::success('Data successfully published', 'Good Job')->persistent(2000);
        }
        $mobil->save();
        return redirect()->route('events.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countNotif = contact::where('status',0)->get()->count();
        $events = Event::findOrFail($id);
        return view('event.edit',compact('events','countNotif')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data Successfully Changed', 'Good Job!')->autoclose(1700);
        $this->validate($request,[
             
             'judul' => 'required|max:255',
             'tgl' => 'required|max:255',
             'jam' => 'required|max:255',
             'alamat' => 'required|max:255',
            'deskripsi' => 'required|'
             
            
        ]);

        $events = Event::findOrFail($id);
            // edit upload poto
        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $destinationPath = public_path().'/assets/img/gambarweb/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus poto lama, jika ada
        if ($events->poto) {
        $old_poto = $events->poto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambarweb'
        . DIRECTORY_SEPARATOR . $events->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $events->poto = $filename;
}
        $events->judul = $request->judul;
        $events->tgl = $request->tgl;
        $events->jam = $request->jam;
        $events->alamat = $request->alamat;
        $events->deskripsi = $request->deskripsi;
        $events->slug =str_slug($request->judul, '-');
        $events->save();
        return redirect()->route('events.index'); 
              }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::findOrFail($id);
          if ($events->poto) {
            $old_foto = $events->poto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/gambarweb/'
            . DIRECTORY_SEPARATOR . $events->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $events->delete();
        Alert::success('Data Successfully Deleted', 'Good Job!')->autoclose(1700);
        return redirect()->route('events.index');   
         }
}
