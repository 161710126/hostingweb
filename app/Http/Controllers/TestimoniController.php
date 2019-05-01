<?php

namespace App\Http\Controllers;

use App\Testimoni;
use App\File;
use Illuminate\Http\Request;
use Alert;
use App\contact;
class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countNotif = contact::where('status',0)->get()->count();
       $testimonis =Testimoni::orderBy('updated_at','desc')->get();
        return view('testimoni.index',compact('testimonis','countNotif')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countNotif = contact::where('status',0)->get()->count();
      return view('testimoni.create',compact('countNotif'));  
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
             'nama' => 'required|unique:testimonis|',
            //'poto' => 'required|max:255',
            'angkatan' => 'required|min:2',
            'content' => 'required|min:2'
             
        ]);

        $testimonis = new Testimoni;
        $testimonis->nama = $request->nama;

                if ($request->hasFile('poto')){
            $file=$request->file('poto');
            $destinationPath=public_path().'/assets/img/gambarweb/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $testimonis->poto= $filename;
        }

        $testimonis->angkatan = $request->angkatan;
        $testimonis->content = $request->content;
        $testimonis->save();
        ;
        return redirect()->route('testimonis.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countNotif = contact::where('status',0)->get()->count();
         $testimonis = Testimoni::findOrFail($id);
        return view('testimoni.edit',compact('testimonis','countNotif')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data successfully Changed','Good Job')->autoclose(1700);
         $this->validate($request,[
             'nama' => 'required|max:255',
            'angkatan' => 'required|min:2',
            'content' => 'required|min:2'
             
            
        ]);

        $testimonis = Testimoni::findOrFail($id);
        $testimonis->nama = $request->nama;
          // edit upload poto
        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $destinationPath = public_path().'/assets/img/gambarweb/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus poto lama, jika ada
        // if ($testimonis->poto) {
        // $old_poto = $testimonis->poto;
        // $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambarweb'
        // . DIRECTORY_SEPARATOR . $testimonis->poto;
        //     try {
        //     File::delete($filepath);
        //     } catch (FileNotFoundException $e) {
        // // File sudah dihapus/tidak ada
        //     }
        // }
        $testimonis->poto = $filename;
}
         $testimonis->angkatan = $request->angkatan;
         $testimonis->content = $request->content;
        $testimonis->save();
        return redirect()->route('testimonis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Data successfully Deleted','Good Job')->autoclose(1700);
         $testimonis = Testimoni::findOrFail($id);
          // if ($testimonis->poto) {
          //   $old_foto = $testimonis->poto;
          //   $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/gambarweb/'
          //   . DIRECTORY_SEPARATOR . $testimonis->poto;
          //   try {
          //   File::delete($filepath);
          //   } catch (FileNotFoundException $e) {
          //   // File sudah dihapus/tidak ada
          //   }
          //   }
        $testimonis->delete();
        return redirect()->route('testimonis.index');  
    }
}
