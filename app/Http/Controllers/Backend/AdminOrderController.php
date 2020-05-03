<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Orders;

class AdminOrderController extends Controller
{
    public function getOrderApprove()
    {
        return view('backend.order.orderApprove');
    }
    public function getOrderNotApprove()
    {
        $orders = Orders::where('status',0)->get();
        return view('backend.order.orderNotApprove',compact('orders'));
    }
    public function showOrder($id)
    {
        $orders = Orders::find($id);
        return view('backend.order.orderDetail',compact('orders'));
    }
    public function getCart()
    {
        $products = Product::all();
        $categories = Category::all();
        $viewData =[
            'categories' => $categories,
            'products' => $products,
            'index' => 0
        ];
        return view('backend.order.addOrder',$viewData);
    }
    public function cart()  {
        $cartCollection = \Cart::getContent();
        return view('frontend.cart')->with(['cartCollection' => $cartCollection]);
    }
    public function clear(){
        \Cart::clear();
        return view('backend.order.addOrder');
    }
    // public function remove(Request $request){
    //     \Cart::remove($request->id);
    //     return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    // }

    // public function update(Request $request){
    //     \Cart::update($request->id,
    //         array(
    //             'quantity' => array(
    //                 'relative' => false,
    //                 'value' => $request->quantity
    //             ),
    //     ));
    //     return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    // }
    public function add(Request $request)
    {
     \Cart::add([
        'id' => $request->id,
        'name' => $request->pro_name,
        'price' => $request->pro_price,
        'quantity' => $request->quantity,
        'attributes' => ['image' => $request->pro_image]
    ]);
        return redirect()->back();
    }
    public function checkout()
    {
        $cartCollection = \Cart::getContent();
        return view('frontend.checkout',compact('cartCollection'));
    }

    public function saveOrder(Request $request)
    {
        $cartCollection = \Cart::getContent();
        $order = new Orders();
        $order->nameguest = $request->name;
        $order->emailguest = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->note = $request->note;
        $detail = [];
        foreach($cartCollection as $item)
        {
         array_push($detail,$item->name);
         array_push($detail,$item->quantity);
        }
        $order->info_order = implode(",", $detail);
        $order->price_order = \Cart::getTotal();
        $order->status = 0;
        $order->save();
        \Cart::clear();
        return view('backend.order.addOrder');

    }
}
