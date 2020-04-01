<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getOrderApprove()
    {
        return view('backend.order.orderApprove');
    }
    public function getOrderNotApprove()
    {
        return view('backend.order.orderNotApprove');
    }
    public function showOrder()
    {
        return view('backend.order.orderDetail');
    }
}
