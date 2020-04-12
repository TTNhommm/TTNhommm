<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestProduct;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Http\Controllers\Controller as Controllers;


class AdminProductController extends Controllers
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
        $this->validate($req,[
            'pro_name' => 'required|unique:products,pro_name',
            'pro_cate_id' => 'required',
            'pro_type'=> 'required',
            'pro_price'=> 'required',
            'pro_image'=> 'required',
            'pro_content'=>'required',            

        ],[
            'pro_name.required'=>' Vui lòng nhập tên sản phẩm',
            'pro_cate_id.required' => 'Vui lòng nhập danh mục',
            'pro_name.unique'=>'Sản phẩm đã tồn tại',
            'pro_type'=> ' Vui lòng chọn loại sản phẩm',
            'pro_price.required'=>'Vui lòng nhập giá sản phẩm',
            'pro_image.required'=>'Vui lòng chọn ảnh cho sản phẩm',
            'pro_content.required'=>'Vui lòng nhập mô tả về sản phẩm',
        ]);

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
        $pro_detail = $req->only('cpu','ram', 'screen', 'card','harddrive','weight', 'camera', 'port','pin');
        $product->pro_detail = implode(",", $pro_detail);
        $product->pro_amount += 1; 
        $product->save();
        return redirect()->back()->with('success','Thêm sản phẩm thành công');
    }
    public function edit($id)
    {  
        $categories = Category::all();
        $product = Product::find($id);
        $pro_detail = explode(',',$product->pro_detail);
        $viewData =[
            'categories' => $categories,
            'product' => $product,
            'pro_detail' => $pro_detail,
            'index' => 0
        ];
        return view('backend.product.editProduct',$viewData);
    }
    public function update(Request $req,$id)
    {
        $product= Product::find($id);
        $product->pro_name = $req->pro_name;
        $product->pro_type = $req->pro_type;
        $product->pro_slug =Str::slug($req->pro_name,'-');
        $product->pro_content= $req->pro_content;
        $product->pro_price  = $req->pro_price;
        $product->pro_cate_id = $req->pro_cate_id;
        if($req->hasFile('pro_image'))
        {   $path_img_old ="upload/upload_product/".$product->pro_image;
            // dd($path_img_old);
            if(file_exists($path_img_old))
            {
                @unlink($path_img_old);
            }
            $file = $req->file('pro_image');
            $filename = time().$file->getclientoriginalName();
            $file->move('upload/upload_product',$filename);
            $product->pro_image = $filename;
        }
        $pro_detail = $req->only('cpu','ram', 'screen', 'card','harddrive','weight', 'camera', 'port','pin');
        $product->pro_detail = implode(",", $pro_detail);
        // $product->pro_amount += 1; 
        $product->save();
        dd('thanh công');
        // return redirect()->back()->with('success','Cập nhật sản phẩm thành công');
    }
    public function action($action,$id)
    {
        if(isset($action))
        {   
             $product   = Product::find($id);
            switch($action)
            {
                case 'delete':
                 $product->delete();
                break;
            }
            // $product->save();
        }
        return redirect()->back();
    }
}
