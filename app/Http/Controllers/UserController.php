<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
        $this->middleware('active');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('search'));
            
            $users = user::where('email', 'LIKE', '%' . $query . '%')
                    ->orderBy('id', 'asc')
                    ->paginate(2);
            return view('users.index', ['users' => $users, 'search' => $query]);
        }
        return view('users.index', compact('user'));
    }
       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $user=User::find($id);
        return view('users.show', compact('user'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function edit(USer $user)
    {
        return view('users.edit', compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('users.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name =$request->name;
        $user->last_name =$request->last_name;
        $user->email =$request->email;
        $user->active = (!request()->has('active') == '1' ? '0' : '1');
        $user->save();

        return redirect('users') ;
    }
}
