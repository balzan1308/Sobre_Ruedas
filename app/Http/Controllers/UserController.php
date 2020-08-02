<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
        $this->middleware('active');
        
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
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
     * Undocumented function
     *
     * @param [type] $id
     * @return View
     */
    public function show($id): View
    {
        $user=User::find($id);
        return view('users.show', compact('user'));
    }
    /**
     * Undocumented function
     *
     * @param USer $user
     * @return View
     */
    public function edit(USer $user): View
    {
        return view('users.edit', compact('user'));
    }
    /**
     * Undocumented function
     *
     * @return View
     */
    public function create(): View
    {
        return view('users.create');
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request): RedirectResponse
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
     * Undocumented function
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function update(Request $request, $id): RedirectResponse
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
