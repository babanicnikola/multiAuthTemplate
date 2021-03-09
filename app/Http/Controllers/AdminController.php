<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request)
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
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->address = $request['address'];
        $user->city = $request['city'];
        $user->post_code = $request['post_code'];
        $user->phone = $request['phone'];
        $user->save();
        DB::insert('insert into role_user values (?, ?, ?)', [$request->role_id, $user->id, 'App\User']);
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
