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
        $products->name = $req->name;
        $products->cate_slug = Str::slug($req->name,'-');
        $products->save();
        return redirect()->back();
    }
}
