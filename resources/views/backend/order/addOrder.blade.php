@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ route('admin.home')}}">Trang chủ</a></li>
    <li><a href="{{ route('admin.get.list.product')}}">Sản phẩm</a></li>
    @if(\Cart::getTotalQuantity()>0)
    <li class="active">Số lượng sản phẩm : {{ \Cart::getTotalQuantity()}}</li>
    @else
    <li class="active">Số lượng sản phẩm : 0 </li>
    @endif
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- START RESPONSIVE TABLES -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="page-head-text">
                        <h1 class="panel-title"><strong>Quản lý</strong> sản phẩm</h1>
                        <!-- <div class="cart">
								<div class="circle-shopping expand">
									<div class="shopping-carts text-right">
										<div class="cart-toggler">
											<a href="#"><span class="fa fa-user"></span></a>
											<a href="#"><span class="cart-quantity">2</span></a>
                                            <div class="restrain small-cart-content">
                                                <ul class="cart-list"> 
                                                    <li>
                                                        <div class="small-cart-detail">
                                                            <p>Name</p>
                                                            <a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
                                                            <span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p class="total">Subtotal: <span class="amount">$155.00</span></p>
                                                <p class="buttons">
                                                    <a href="checkout.html" class="button">Checkout</a>
                                                </p>
                                            </div>
                                        </div>
									</div>
								</div>
							</div> -->
                        <a href="{{ route('cart.index')}}">
                            <button class="btn btn-primary btn-rounded pull-right"><span class="fa fa-plus"></span> Xem
                                hóa đơn </button>
                        </a>
                    </div>
                </div>
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50" class="text-center">ID</th>
                                    <th width="250" class="text-center">Tên sản phẩm</th>
                                    <th width="150" class="text-center">Hình ảnh</th>
                                    <th width="150" class="text-center">Loại</th>
                                    <th width="120" class="text-center">Giá</th>
                                    <th width="100" class="text-center">Danh mục</th>
                                    <th width="30" class="text-center">Số lượng</th>
                                    <th width="100" class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($products))
                                @foreach($products as $product )
                                <tr>
                                    <td class="text-center">{{ $product->id }}</td>
                                    <td><strong>{{ $product->pro_name}}</strong></td>
                                    <td class="text-center"><img class="img-fluid" style="width:100px"
                                            {{-- src="{{ asset("img/product/$product->pro_image")}}" alt=""></td> --}}
                                    src="{{asset("public/img/product/$product->pro_image")}}" alt=""></td>
                                    <td class="text-center">{{ $product->pro_type}}</td>
                                    <td class="text-center">{{ number_format($product->pro_price) }} VNĐ</td>
                                    <?php
                                        $category=DB::table('categories')->where('id',$product->id)->first();
                                    ?>
                                    <td class="text-center">
                                        {{ $product->getCategory() }}
                                    </td>
                                    <form action="{{ route('cart.store',$product->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <td class="text-center">
                                            <input type="number" class="form-control" value="0" id="quantity"
                                                name="quantity">
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                            <input type="hidden" value="{{ $product->pro_name }}" name="pro_name">
                                            <input type="hidden" value="{{ $product->pro_price }}" name="pro_price">
                                            <input type="hidden" value="{{ $product->pro_image }}" name="pro_image">
                                            <button class="btn btn-primary btn-rounded btn-condensed btn-sm"
                                            class="tooltip-test" title="add to cart">
                                            <span class="fa fa-shopping-cart"></span> Thêm đơn hàng
                                        </button>
                                        </td>
                                    </form>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- END RESPONSIVE TABLES -->
</div>
@stop