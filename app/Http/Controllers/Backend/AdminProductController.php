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
        // $this->validate($req,[
        //     'pro_name' => 'required|unique:products,name',
        //     'pro_type'=> 'required',
        //     'pro_price'=> 'required',
        //     'pro_image'=> 'required',
        //     'pro_content'=>'required',            

        // ],[
        //     'name.required'=>' Chưa nhập tên sản phẩm',
        //     'name.unique'=>'Sản phẩm đã tồn tại',
        //     'pro_type'=> ' Chưa chọn loại sản phẩm',
        //     'pro_price.required'=>'Vui lòng nhập giá sản phẩm',
        //     'pro_image.required'=>'Vui lòng chọn ảnh cho sản phẩm',
        //     'pro_content.required'=>'Vui lòng nhập mô tả về sản phẩm',
        // ]);

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
        $pro_detail = $req->only('cpu','ram', 'screen', 'pin', 'card', 'camera', 'harddrive','weight','port');
        $product->pro_detail = implode(",", $pro_detail);
        $product->pro_amount += 1; 
        $product->save();
        return redirect()->back()->with('success','Thêm sản phẩm thành công');
    }
}
