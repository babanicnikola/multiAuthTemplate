<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function index()
    {
        return view('admin.index');
    }
    //Functions for users
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

        
        //DB::insert('insert into role_user values (?, ?, ?)', [$request->role_id, $user->id, 'App\User']);
        return back()->with('success','User added successfully!');
    }

    public function view($user_id)
    {
        return view('admin.index');
    }

    public function edit($user_id)
    {
        return view('admin.index');
    }

    public function delete($user_id)
    {
        $post = User::findOrFail($user_id);
        $post->delete($user_id);
        DB::table('role_user')->where('user_id', $user_id)->delete();
          
        return back()->with('success','User deleted successfully!');
    }
    //Functions for users END

    //Functions for users roles
    public function listroles()
    {
        $roles = DB::table('roles')->get();
        $role = DB::table('role_user')->get();
        return view('admin.users.roles.roles', compact('roles'));
    }
    //Functions for users roles END
}
