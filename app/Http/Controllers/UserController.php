<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user|superadministrator');
    }
    
    public function list()
    {
        $users = DB::table('users')->get();
        $role_user = DB::table('role_user')->get();
        return view('admin.users.users', compact('users','role_user'));
    }

    public function create(Request $request)
    {
        return view('admin.users.create');
    }

    protected function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
            'address',
            'city',
            'post_code',
            'phone'
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'address' => $request['address'],
            'city' => $request['city'],
            'post_code' => $request['post_code'],
            'phone' => $request['phone'],
        ]);
        if ($request->role_id == 2){
            $user->attachRole('user');
        } elseif ($request->role_id == 1) {
            $user->attachRole('superadministrator');
        }

        return back()->with('success','Korisnik uspešno dodat!');
    }

    public function view($user_id)
    {
        return view('admin.users.view');
    }

    public function edit($user_id)
    {
        return view('admin.users.edit');
    }

    public function delete($user_id)
    {
        $post = User::findOrFail($user_id);
        $post->delete($user_id);
        DB::table('role_user')->where('user_id', $user_id)->delete();
          
        return back()->with('success','Korisnik uspešno obrisan!');
    }

    //Functions for users roles
    public function listroles()
    {
        $roles = DB::table('roles')->get();
        $role = DB::table('role_user')->get();
        return view('admin.users.roles.roles', compact('roles'));
    }
    //Functions for users roles END
}
