<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user|superadministrator');
    }
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
