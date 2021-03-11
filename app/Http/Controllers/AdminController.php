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
        return view('admin.index');
    }

    //***************************************************************/

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

    //***************************************************************/

    //Functions for users roles
    public function listroles()
    {
        $roles = DB::table('roles')->get();
        $role = DB::table('role_user')->get();
        return view('admin.users.roles.roles', compact('roles'));
    }
    //Functions for users roles END

    //Functions for products
    public function listProducts()
    {
        $products = DB::table('products')->get();
        return view('admin.products.products', compact('products'));
    }

    public function createProduct(Request $request)
    {
        return view('admin.products.create');
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'vehicle',
            'season',
            'on_sale',
            'price',
            'width',
            'height',
            'radius',
            'speed_index',
            'weight',
            'load',
            'manufacturer',
            'design',
            'special_label',
            'ean',
            'country',
            'image_src',
        ]);
        
        //Image upload
        if ($request->image_src != '') {
            $imageName = time().'.'.$request->image_src->extension();  
            $request->image_src->move(public_path('images/products'), $imageName);
        } else
            $imageName = 'default.jpg';
        
        //Image upload END

        Products::create([
            'name' => $request['name'],
            'slug' => time(),
            'vehicle' => $request['vehicle'],
            'season' => $request['season'],
            'on_sale' => $request['on_sale'],
            'price' => $request['price'],
            'width' => $request['width'],
            'height' => $request['height'],
            'radius' => $request['radius'],
            'speed_index' => $request['speed_index'],
            'weight' => $request['weight'],
            'load' => $request['load'],
            'manufacturer' => $request['manufacturer'],
            'design' => $request['design'],
            'special_label' => $request['special_label'],
            'ean' => $request['ean'],
            'country' => $request['country'],
            'image_src' => $imageName,
        ]);

        return back()->with('success','Product added successfully!');
    }

    public function viewProduct($user_id)
    {
        return view('admin.products.products');
    }

    public function editProduct($user_id)
    {
        return view('admin.products.products');
    }

    public function deleteProduct($user_id)
    {
        return view('admin.products.products');
    }
}
