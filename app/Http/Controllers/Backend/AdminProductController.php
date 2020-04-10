<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestProduct;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\Category;

class AdminProductController extends Controller
{
    public function index()
    {   
        $products = Product::all();
        $categories = Category::all();
        $viewData =[
            'categories' => $categories,
            'products' => $products,
            'index' => 0
        ];
        return view('backend.product.product',$viewData);
    }
    public function create()
    {
        $categories = Category::all();
        return view('backend.product.addProduct');
    }
    public function store(Request $req)
    {
        $products = new Product();
        $products->pro_name = $req->pro_name;
        $products->pro_slug = Str::slug($req->name,'-');
        if($req->pro_status)
        {
            $categories->pro_status = 1;
        }else {
            $categories->pro_status = 0;
        }
        $products->save();
        return redirect()->back();
    }
}
