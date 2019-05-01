<?php

namespace App\Http\Controllers;

use App\infosekilas;
use Illuminate\Http\Request;
use File;
use Auth;
use Alert;
use App\contact;
class InfosekilasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countNotif = contact::where('status',0)->get()->count();
         $infos =infosekilas::all();
        return view('infos.index',compact('infos','countNotif')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countNotif = contact::where('status',0)->get()->count();
        return view('infos.create',compact('countNotif'));
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
             'nama' => 'required|',
            'jumlah' => 'required|'
             
        ]);

        $infos = new infosekilas;
        $infos->nama = $request->nama;
        $infos->jumlah = $request->jumlah;

                if ($request->hasFile('poto')){
            $file=$request->file('poto');
            $destinationPath=public_path().'/assets/img/gambarweb/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $infos->poto= $filename;
        }
        $infos->save();
        return redirect()->route('infos.index');  
           }

    /**
     * Display the specified resource.
     *
     * @param  \App\infosekilas  $infosekilas
     * @return \Illuminate\Http\Response
     */
    public function show(infosekilas $infosekilas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\infosekilas  $infosekilas
     * @return \Illuminate\Http\Response
     */
      public function edit($id)
    {
        $countNotif = contact::where('status',0)->get()->count();
        $infos = infosekilas::findOrFail($id);
        return view('infos.edit',compact('infos','countNotif')); 
            }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\infosekilas  $infosekilas
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {
        Alert::success('Data Successfully Changed', 'Good Job!')->autoclose(1700);
        $this->validate($request,[
             'nama' => 'required|max:255',
             'jumlah' => 'required|'
            
        ]);

        $infos = infosekilas::findOrFail($id);
        $infos->nama = $request->nama;
        $infos->jumlah = $request->jumlah;
          // edit upload poto
        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $destinationPath = public_path().'/assets/img/gambarweb/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus poto lama, jika ada
        if ($infos->poto) {
        $old_poto = $infos->poto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambarweb'
        . DIRECTORY_SEPARATOR . $infos->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $infos->poto = $filename;
}
        $infos->save();
        return redirect()->route('infos.index'); 
              }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\infosekilas  $infosekilas
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
         $infos = infosekilas::findOrFail($id);
          if ($infos->poto) {
            $old_foto = $infos->poto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/gambarweb/'
            . DIRECTORY_SEPARATOR . $infos->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $infos->delete();
        Alert::success('Data Successfully Deleted', 'Good Job!')->autoclose(1700);
        return redirect()->route('infos.index');   
         }
}
