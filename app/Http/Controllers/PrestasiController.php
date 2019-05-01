<?php

namespace App\Http\Controllers;

use App\prestasi;
use App\eskul;
use File;
use Alert;
use App\contact;
use Illuminate\Http\Request;

class PrestasiController extends Controller
 {
    public function index()
    {
        $countNotif = contact::where('status',0)->get()->count();
         $prestasis =prestasi::with('eskul')->get();
        return view('prestasiss.index',compact('prestasis','countNotif')); 
    }
    //  public function index1()
    // {
    //      $prestasis1 =prestasi::all();
    //     return view('prestasiss.index1',compact('prestasis1')); 
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eskuls = eskul::all();
        $countNotif = contact::where('status',0)->get()->count();
        return view('prestasiss.create',compact('eskuls','countNotif'));     }

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
            'nama' => 'required|max:255',
             'tanggal_peroleh' => 'required|min:2',
             'deskripsi' => 'required|min:2',
             'eskul_id' => 'required|'
    
        ]);

        $prestasis = new prestasi;
        $prestasis->nama = $request->nama;
        $prestasis->tanggal_peroleh = $request->tanggal_peroleh;
         if ($request->hasFile('poto')){
            $file=$request->file('poto');
            $destinationPath=public_path().'/assets/img/gambarweb/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $prestasis->poto= $filename;
        }
        $prestasis->deskripsi = $request->deskripsi;
        $prestasis->eskul_id = $request->eskul_id;
        $prestasis->save();
        return redirect()->route('prestasis.index','prestasis.index1');     }
  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestasis = prestasi::findOrFail($id);
        return view('prestasiss.show',compact('prestasis'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $countNotif = contact::where('status',0)->get()->count();
        $prestasis = prestasi::findOrFail($id);
        $eskuls = eskul::all();
        $selectedes = prestasi::findOrFail($id)->eskul_id;
        return view('prestasiss.edit',compact('prestasis','eskuls','selectedes','countNotif'));     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request,  $id)
    {
        Alert::success('Data successfully Changed','Good Job')->autoclose(1700);
        $this->validate($request,[
           'nama' => 'required|max:255',
             'tanggal_peroleh' => 'required|',
             'deskripsi' => 'required|min:2',
             'eskul_id' => 'required|'
            
        ]);

        $prestasis = prestasi::findOrFail($id);
        $prestasis->nama = $request->nama;
        $prestasis->tanggal_peroleh = $request->tanggal_peroleh;
        // edit upload poto
        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $destinationPath = public_path().'/assets/img/gambarweb/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus poto lama, jika ada
        if ($prestasis->poto) {
        $old_poto = $prestasis->poto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambarweb'
        . DIRECTORY_SEPARATOR . $prestasis->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $prestasis->poto = $filename;
}
        $prestasis->deskripsi = $request->deskripsi;
        $prestasis->eskul_id = $request->eskul_id;
        $prestasis->save();
        return redirect()->route('prestasis.index');       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Data successfully Deleted','Good Job')->autoclose(1700);
         $prestasis = prestasi::findOrFail($id);
          if ($prestasis->poto) {
            $old_foto = $prestasis->poto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/gambarweb/'
            . DIRECTORY_SEPARATOR . $prestasis->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $prestasis->delete();
        return redirect()->route('prestasis.index');    }
}