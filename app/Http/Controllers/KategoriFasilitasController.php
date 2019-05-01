<?php

namespace App\Http\Controllers;

use App\kategori_fasilitas;
use Illuminate\Http\Request;
use Alert;
use App\contact;
class KategoriFasilitasController extends Controller
 {
    public function index()
    {
        $countNotif = contact::where('status',0)->get()->count();
         $kategfasilitas =kategori_fasilitas::orderBy('updated_at','desc')->get();
        return view('kategori_fasilitas.index',compact('kategfasilitas','countNotif')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countNotif = contact::where('status',0)->get()->count();
        return view('kategori_fasilitas.create',compact('countNotif'));
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
            'nama_fasilitas' => 'required|max:255'
             
        ]);
        $kategfasilitas = new kategori_fasilitas;
        $kategfasilitas->nama_fasilitas = $request->nama_fasilitas;
        $kategfasilitas->save();
         return redirect()->route('kategorisfasilitas.index');     
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategfasilitas = kategori_fasilitas::findOrFail($id);
        return view('kategori_fasilitas.show',compact('kategfasilitas'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countNotif = contact::where('status',0)->get()->count();
        $kategfasilitas = kategori_fasilitas::findOrFail($id);
        return view('kategori_fasilitas.edit',compact('kategfasilitas','countNotif'));     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data successfully Changed','Good Job')->autoclose(1700);
        $this->validate($request,[
             'nama_fasilitas' => 'required|max:255',
        ]);

        $kategfasilitas = kategori_fasilitas::findOrFail($id);
        $kategfasilitas->nama_fasilitas = $request->nama_fasilitas;
        $kategfasilitas->save();
        return redirect()->route('kategorisfasilitas.index');      

         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
      {
        Alert::success('Data successfully Deleted','Good Job')->autoclose(1700);
         $kategfasilitas = kategori_fasilitas::findOrFail($id);
        $kategfasilitas->delete();
        return redirect()->route('kategorisfasilitas.index');    }
}
