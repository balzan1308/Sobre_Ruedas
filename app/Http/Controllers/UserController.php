<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
   
    public function index()
    {
        $users=User::all();
        return view('users.index',['users'=>$users]);
    }
    public function show($id)
    {   
        $user=User::find($id);
        return view('users.show', compact('user'));
    }
    public function edit(USer $user)
    {
        return view('users.edit', compact('user'));
    }

    public function create()
    {
       return view('users.create');
       
    }
    public function store(Request $request)
    {
            $user= new User();
            $user->name =request('name');
            $user->last_name =request('last_name');
            $user->email =request('email');
            $user->password = Hash::make($request['password']);
            $user->save();

        return redirect('users') ;
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name =$request->name;
        $user->last_name =$request->last_name;
        $user->email =$request->email;
        $user->estado = (!request()->has('estado') == '1' ? '0' : '1');
        $user->save();

        return redirect('users') ;
    }

   


}

