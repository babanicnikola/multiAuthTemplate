<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

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
    public function list()
    {
    $users = DB::table('users')->get();
        
        return view('admin.users', compact('users'));
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
        return view('admin.index');
    }
}
