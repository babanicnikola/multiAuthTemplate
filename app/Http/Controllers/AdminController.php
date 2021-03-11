<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
