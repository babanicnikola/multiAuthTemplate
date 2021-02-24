<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
    $users = User::latest()->paginate(5);

        return view('admin.users', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
