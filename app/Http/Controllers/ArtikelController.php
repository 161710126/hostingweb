<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Galeri;
use App\Kategori;
use App\User;
use App\FIle;
use Alert;
use App\contact;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $Request)
    {
       
         $artikels =Artikel::with('user')->get();
         $countNotif = contact::where('status',0)->get()->count();
        return view('artikel.index',compact('artikels','countNotif')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // $galeris = Galeri::all();
        $countNotif = contact::where('status',0)->get()->count();
      $users = User::all();
       $kategori = Kategori::all();
        return view('artikel.create',compact('users','kategori','countNotif')); 
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
            'judul' => 'required|unique:artikels|',
             'content' => 'required',
             // 'galeri' => 'required|max:255',
             'user_id' => 'required|max:255',
              'kategori_id' => 'required|max:255'
    
        ]);

        $artikels = new Artikel;
        $artikels->judul = $request->judul;
        $artikels->content = $request->content;
        if ($request->hasFile('gambar')){
            $file=$request->file('gambar');
            $destinationPath=public_path().'/assets/img/gambarweb/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $artikels->gambar= $filename;
        }
        $artikels->user_id = $request->user_id;
        $artikels->kategori_id = $request->kategori_id;
        $artikels->slug =str_slug($request->judul, '-');

        $artikels->save();
        return redirect()->route('artikels.index');
    }
     public function publish($id)
    {
        $mobil = Artikel::find($id);
        if ($mobil->status === 1) {
            $mobil->status = 0;
            Alert::success('Data successfully unpublished', 'Good Job')->autoclose(1700);
        } else {
            $mobil->status= 1;
            Alert::success('Data successfully published', 'Good Job')->autoclose(1700);
        }
        $mobil->save();
        return redirect()->route('artikels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countNotif = contact::where('status',0)->get()->count();
        $artikels = Artikel::findOrFail($id);
        // $galeris = Galeri::all();
        $users = User::all();
         $kategori = Kategori::all();
        $selectedes = Artikel::findOrFail($id)->user_id;
        $selectedes = Artikel::findOrFail($id)->kategori_id;
         // $selectedes = Artikel::findOrFail($id)->galeri;
        return view('artikel.edit',compact('artikels','users','kategori','selectusers','selectkategori','countNotif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data successfully Changed','Good Job')->autoclose(1700);
       $this->validate($request,[
           'judul' => 'required|max:255',
             'content' => 'required|',
             // 'galeri' => 'required|max:255',
            'kategori_id' => 'required|max:255',
             'user_id' => 'required|max:255'
        ]);
        $artikels = Artikel::findOrFail($id);
        $artikels->judul = $request->judul;
        $artikels->content = $request->content;
        // $artikels->galeri = $request->galeri;
       
          if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/img/gambarweb/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus gambar lama, jika ada
        // if ($artikels->gambar) {
        // $old_gambar = $artikels->gambar;
        // $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambarweb'
        // . DIRECTORY_SEPARATOR . $artikels->gambar;
        //     try {
        //     File::delete($filepath);
        //     } catch (FileNotFoundException $e) {
        // // File sudah dihapus/tidak ada
        //     }
        // }
        $artikels->gambar = $filename;
}
         $artikels->kategori_id = $request->kategori_id;
         $artikels->user_id = $request->user_id;

         $artikels->slug =str_slug($request->judul, '-');
        $artikels->save();
        return redirect()->route('artikels.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Alert::success('Data successfully Deleted','Good Job')->autoclose(1700);
        $artikels = Artikel::findOrFail($id);

         // if ($artikels->gambar) {
         //    $old_gambar = $artikels->gambar;
         //    $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/gambarweb/'
         //    . DIRECTORY_SEPARATOR . $artikels->gambar;
         //    try {
         //    File::delete($filepath);
         //    } catch (FileNotFoundException $e) {
         //    // File sudah dihapus/tidak ada
         //    }
         //    }

        $artikels->delete();
        return redirect()->route('artikels.index');    
    }
}
