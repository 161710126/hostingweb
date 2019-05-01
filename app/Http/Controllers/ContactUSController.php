<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\contact;
use Mail;
 
class ContactUSController extends Controller
{
   public function contactUS()
{
return view('contactUS');
} 
   /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
   public function contactUSPost(Request $request) 
   {
    $this->validate($request, [
     'nama' => 'required',
     'email' => 'required|email', 
     'telepon' => 'required',
     'subject' => 'required',
     'message' => 'required'
      ]);
    contact::create($request->all()); 
   
    Mail::send('Kontak.email',
       array(
           'nama' => $request->get('nama'),
           'email' => $request->get('email'),
           'telepon' => $request->get('telepon'),
           'subject' => $request->get('subject'),
           'user_message' => $request->get('message')
       ), function($message)
   {
       $message->from('saquib.gt@gmail.com');
       $message->to('mjunikaberli010601@gmail.com', 'Admin')->subject('Pesan dan Kesan');

   });
 
    return back()->with('success', 'Terima Kasih Tanggapannya!'); 
   }
}