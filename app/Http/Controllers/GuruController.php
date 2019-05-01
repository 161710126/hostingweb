<?php

namespace App\Http\Controllers;

use App\guru;
use File;
use Auth;
use Alert;
use App\contact;
use Illuminate\Http\Request;

class GuruController extends Controller
 {
    public function index()
    {
         $gurus =guru::orderBy('updated_at','desc')->get();
         $countNotif = contact::where('status',0)->get()->count();
        return view('guru.index',compact('gurus','countNotif')); 
    }
     
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countNotif = contact::where('status',0)->get()->count();
        return view('guru.create',compact('countNotif'));  
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
             'nama' => 'required|unique:gurus|',
            //'nama' => 'required|max:255',
            'jabatan' => 'required|',
            'alamat' => 'required|',
            'j_kelamin' => 'required|min:2',
            'telepon' => 'required|',
            'status' => 'required|min:2'
             
        ]);

        $gurus = new guru;
        $gurus->nama = $request->nama;
        $gurus->jabatan = $request->jabatan;

                if ($request->hasFile('poto')){
            $file=$request->file('poto');
            $destinationPath=public_path().'/assets/img/gambarweb/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $gurus->poto= $filename;
        }
        $gurus->alamat = $request->alamat;
        $gurus->j_kelamin = $request->j_kelamin;
        $gurus->telepon = $request->telepon;
        $gurus->status = $request->status;
        $gurus->save();
        return redirect()->route('gurus.index');  
           }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gurus = guru::findOrFail($id);
        return view('guru.show',compact('gurus'));  
          }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countNotif = contact::where('status',0)->get()->count();
        $gurus = guru::findOrFail($id);
        return view('guru.edit',compact('gurus','countNotif')); 
            }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data Successfully Changed', 'Good Job!')->autoclose(1700);
        $this->validate($request,[
             'nama' => 'required|max:255',
             'jabatan' => 'required|',
             'alamat' => 'required|',
             'j_kelamin' => 'required|min:2',
             'telepon' => 'required|',
             'status' => 'required|min:2'
            
        ]);

        $gurus = guru::findOrFail($id);
        $gurus->nama = $request->nama;
        $gurus->jabatan = $request->jabatan;
          // edit upload poto
        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $destinationPath = public_path().'/assets/img/gambarweb/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus poto lama, jika ada
        if ($gurus->poto) {
        $old_poto = $gurus->poto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambarweb'
        . DIRECTORY_SEPARATOR . $gurus->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $gurus->poto = $filename;
}
        $gurus->alamat = $request->alamat;
        $gurus->j_kelamin = $request->j_kelamin;
        $gurus->telepon = $request->telepon;
        $gurus->status = $request->status;
        $gurus->save();
        return redirect()->route('gurus.index'); 
              }

    /**
     * Remove the specified resource from storage.
     *
         * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $gurus = guru::findOrFail($id);
          if ($gurus->poto) {
            $old_foto = $gurus->poto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/gambarweb/'
            . DIRECTORY_SEPARATOR . $gurus->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $gurus->delete();
        Alert::success('Data Successfully Deleted', 'Good Job!')->autoclose(1700);
        return redirect()->route('gurus.index');   
         }
}