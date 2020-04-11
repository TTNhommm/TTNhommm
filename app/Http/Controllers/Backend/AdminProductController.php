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
        return view('backend.product.addProduct',compact('categories'));
    }
    public function store(Request $req)
    {
        $product= new Product();
        $product->pro_name = $req->pro_name;
        $product->pro_type = $req->pro_type;
        $product->pro_slug =Str::slug($req->pro_name,'-');
        $product->pro_content= $req->pro_content;
        // $product->pro_sale  =$req->pro_sale;
        $product->pro_price  = $req->pro_price;
        $product->pro_cate_id = $req->pro_cate_id;
        if($req->hasFile('pro_image'))
        {
            $file = $req->file('pro_image');
            $filename = time().$file->getclientoriginalName();
            $file->move('upload/upload_product',$filename);
            $product->pro_image = $filename;
        }
        $description = $req->only('cpu','ram', 'screen', 'pin', 'card', 'camera', 'harddrive','weight','port');
        $product->description = implode(",", $description);
        $product->pro_amount += 1; 
        $product->save();
        return redirect()->back();
    }
}
