<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function product()
    {
        return view('frontend.product');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function lien_he()
    {
        return view('frontend.contact');
    }
    public function dang_nhap()
    {
        return view('frontend.login');
    }
    public function dang_ki()
    {
        return view('frontend.register');
    }
    public function gio_hang()
    {
        return view('frontend.cart');
    }
    public function dat_giao_hang()
    {
        return view('frontend.checkout');
    }
    public function xac_nhan()
    {
        return view('frontend.confirm');
    }
    public function chi_tiet_san_pham()
    {
        return view('frontend.product-detail');
    }
}
