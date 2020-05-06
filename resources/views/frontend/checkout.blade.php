@extends('layouts.master')

@section('main')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
                <div class="col-first">
                    <h1>Thanh toán</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Thanh toán</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Thông tin đơn hàng</h3>
                        <form class="row contact_form" action="{{route('check.post')}}" method="post" novalidate="novalidate">
                        @csrf
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="first" name="name">
                                <span class="placeholder" data-placeholder="Họ và tên"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="number" name="phone">
                                <span class="placeholder" data-placeholder="Số điện thoại"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email">
                                <span class="placeholder" data-placeholder="Email "></span>
                            </div>
                           
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="address">
                                <span class="placeholder" data-placeholder="Địa chỉ"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="note" name="note">
                                <span class="placeholder" data-placeholder="Ghi chú"></span>
                            </div>
                            <div class="col-md-offset-3 col-md-6  form-group p_star">
                                <button class="btn btn-info"> XÁC NHẬN </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Đơn hàng</h2>
                            <ul class="list">
                                <li><a href="#">Sản phẩm <span>Thành tiền</span></a></li>
                                @if(isset($cartCollection))
                                @foreach($cartCollection as $item)
                                 <li><a href="#">{{ $item->name }} <span class="middle">x {{ $item->quantity }}</span> <span class="last">{{ $item->quantity* $item->price}} VNĐ</span></a></li>
                                @endforeach
                                @endif
                                <li>Total :        {{ \Cart::getTotal() }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
@stop