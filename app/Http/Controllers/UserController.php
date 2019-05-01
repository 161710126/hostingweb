<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Artikel;
use App\Galeri;
use Hash;
use Alert;
use App\contact;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countNotif = contact::where('status',0)->get()->count();
        $users = User::all();
        return view('user.index',compact('users','countNotif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countNotif = contact::where('status',0)->get()->count();
        return view('user.create',compact('countNotif'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Data successfully Saved','Good Job')->persistent(1300);
        $this->validate($request,[
            'name'=>'required|max:255',
            'email'=>'required|unique:users|max:255',
            'password'=>'required|max:255'
            ]);

        $users = new User;
        $users->name= $request->name;
        $users->email= $request->email;
        $users->password = bcrypt($request->password);
        $users->save();

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $users = User::findOrFail($id);
        return view('user.edit', compact('users','countNotif'));
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
        Alert::success('Data successfully Changed','Good Job')->persistent(1300);
        $this->validate($request,[
             'name' => 'required|max:255',
            'email' => 'required|min:2',
            // 'password' => 'required|min:2'
             
            
        ]);

        $users = User::findOrFail($id);
        $users->name = $request->name;
        $users->email = $request->email;
        // $users->password = $request->password;
        $users->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Data successfully Deleted','Good Job')->persistent(1300);
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('users.index');
    }
}
