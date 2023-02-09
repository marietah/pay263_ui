<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
      $users=User::all();
      return view('users.index',compact('users'));

    }

    public function edit($id)
    {
       
        $user = User::find($id);
        return view('users.edit', compact('user'));        
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'role'=>'required',
            'status'=>'required'

        ]);

        $user = user::find($id);
        $user->name =  $request->get('name');
        $user->email = $request->get('email');
        $user->role = $request->get('role');
        $user->status= $request->get('status');
        $user->save();
        return redirect('/users')->with('success', 'user successfully updated!');
    }
    


}
