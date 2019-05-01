<?php

namespace App\Http\Controllers;

use App\fasilitas;
use App\kategori_fasilitas;
use File;
use Auth;
use Alert;
use App\contact;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countNotif = contact::where('status',0)->get()->count();
        $fasilitas =fasilitas::with('Kategori_fasilitas')->get();
        return view('fasilitass.index',compact('fasilitas','countNotif')); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countNotif = contact::where('status',0)->get()->count();
         $fasilitas = fasilitas::all();
        $kategfasilitas = kategori_fasilitas::all();
        return view('fasilitass.create',compact('fasilitas','kategfasilitas','countNotif')); 
            }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Data successfully Saved','Good Job')->autoclose(1700);
         $this->validate($request,[
            'nama' => 'required|unique:fasilitas|',
            'poto' => 'required|',
             'kategorifasilitas_id' => 'required|'
           
        ]);

        $fasilitas = new fasilitas;
        $fasilitas->nama = $request->nama;
       
         if ($request->hasFile('poto')){
            $file=$request->file('poto');
            $destinationPath=public_path().'/assets/img/gambarweb/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $fasilitas->poto= $filename;
        }
       
         $fasilitas->kategorifasilitas_id = $request->kategorifasilitas_id;
        $fasilitas->save();
        return redirect()->route('fasilitas.index');     
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countNotif = contact::where('status',0)->get()->count();
         $fasilitas = fasilitas::findOrFail($id);
         $kategfasilitas = kategori_fasilitas::all();
        return view('fasilitass.edit',compact('fasilitas','kategfasilitas','countNotif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        Alert::success('Data successfully Changed','Good Job')->autoclose(1700);
         $this->validate($request,[
            'nama' => 'required|max:255',
             'kategorifasilitas_id' => 'required|'
           
        ]);
        $fasilitas=fasilitas::findOrFail($id);
        $fasilitas->nama = $request->nama;
       
        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $destinationPath = public_path().'/assets/img/gambarweb/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus poto lama, jika ada
        if ($fasilitas->poto) {
        $old_poto = $fasilitas->poto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambarweb'
        . DIRECTORY_SEPARATOR . $fasilitas->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $fasilitas->poto = $filename;
}
        
         // edit upload poto
         $fasilitas->kategorifasilitas_id = $request->kategorifasilitas_id;
        $fasilitas->save();
        return redirect()->route('fasilitas.index');     
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
      {
        Alert::success('Data successfully Deleted','Good Job')->autoclose(1700);
         $fasilitas = fasilitas::findOrFail($id);
          if ($fasilitas->poto) {
            $old_foto = $fasilitas->poto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/gambarweb/'
            . DIRECTORY_SEPARATOR . $fasilitas->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $fasilitas->delete();
        return redirect()->route('fasilitas.index');    }
}
