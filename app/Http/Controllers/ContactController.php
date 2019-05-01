<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $kontaks =contact::orderBy('updated_at','desc')->paginate(100);
          $kontakNotif = contact::where('status','0')->get();
            $countNotif = contact::where('status','0')->get()->count();
        return view('Kontak.index',compact('kontaks','kontakNotif','countNotif')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'nama' => 'required|unique:contacts',
            'email' => 'required|max:255',
            'telepon' => 'required|min:2',
            'subject' => 'required|min:2',
            'message' => 'required|min:2'
             
        ]);
        $kontaks = new contact;
        $kontaks->nama = $request->nama;
        $kontaks->email = $request->email;
        $kontaks->telepon = $request->telepon;
        $kontaks->subject = $request->subject;
        $kontaks->message = $request->message;
        $kontaks->save();
        ;
        return redirect()->route('kontaks.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Alert::success('Data successfully Deleted','Good Job')->autoclose(1700);
        $kontaks = contact::findOrFail($id);
         $kontaks->delete();
        return redirect()->route('kontaks.index');  
    }

    public function notifikasi()
    {
        
            $kontaks = contact::all();
            $kontakNotif = contact::where('status','0')->get();
            $countNotif = contact::where('status',0)->get()->count();
            return view('notif.index',compact('kontaks','kontakNotif','countNotif'));
    }

    public function publish($id)
    {
        $kontaks = contact::findOrFail($id);
        if ($kontaks->status === 1){
            $kontaks->status = 0;
        } else {
            $kontaks->status = 1;
        }
        $kontaks->save();
        return redirect()->route('kontaks.index');
        }

}
