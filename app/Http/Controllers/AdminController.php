<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function index()
    {
        $productsCount = DB::table('products')->count();
        $usersCount = DB::table('users')->count();
        
        return view('admin.index', compact('productsCount','usersCount'));
    }
}
