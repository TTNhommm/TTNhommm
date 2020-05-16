@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Đơn hàng</a></li>
    <li class="active">Quản lý đơn hàng</li>
</ul>
<!-- END BREADCRUMB -->
<!-- Start Banner Area -->
<div class="page-content-wrap">
    <!-- START RESPONSIVE TABLES -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="page-head-text">
                        <h1 class="panel-title"><strong>Quản lý</strong> đơn hàng</h1>
                        <!-- <a href="{{ route('admin.get.create.product')}}">
                            <button class="btn btn-primary btn-rounded pull-right"><span class="fa fa-plus"></span> Thêm
                                sản phẩm</button>
                        </a> -->
                    </div>
                </div>
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="200" class="text-center">Tên sản phẩm</th>
                                    <th width="250" class="text-center">Hình ảnh</th>
                                    <th width="220" class="text-center">Giá</th>
                                    <th width="50" class="text-center">Số lượng</th>
                                    <th width="150" class="text-center">Thành tiền</th>
                                    <th width="100" class="text-center">Hành động</th>
                                    <th width="100" class="text-center">Hành động</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1 ?>
                                @if(isset($cartCollection))
                                @foreach($cartCollection as $item)
                                <tr class="text-center">
                                    <td>
                                        <div class="media-body text-center">
                                            <p>{{ $item->name }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media text-center">
                                            <div class="d-flex">
                                                <img class="img-thumbnail" width="100" height="080"
                                                    src="public/img/product/{{ $item->attributes->image}}" alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>{{ number_format($item->price) }} VNĐ</h5>
                                    </td>
                                    <form action="{{ route('cart.update') }}" method="post">
                                        @csrf
                                        <td>
                                            <div class="product_count text-center">
                                                <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                                {{-- <input type="text" name="qty" id="sst{{$i}}"
                                                value="{{ $item->quantity }}" > --}}
                                                <input type="text" name="qty" class="form-control"
                                                    value="{{ $item->quantity }}" id="sst{{$i}}" name="quantity">
                                                </label>
                                            </div>
                                        </td>

                                        <td class="text-center">
                                            <h5>{{ number_format($item->quantity* $item->price) }} VNĐ</h5>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span> Cập nhật</button>
                                        </td>
                                    </form>
                                    <form action="{{ route('cart.remove') }}" method="post">
                                        @csrf
                                        <td>
                                            <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                            <button class="btn btn-danger btn-rounded btn-condensed btn-sm"><span class="fa fa-times"></span> Xóa</button>
                                        </td>
                                    </form>
                                </tr>
                                <?php $i += 1 ?>
                                @endforeach
                                @endif
                                <tr class="bottom_button text-center">
                                    <td colspan="3"><strong>Tổng</strong></td>
                                    <td><strong>{{ $item->quantity }}</strong></td>
                                    <td colspan="3">
                                        <h5><strong>{{ number_format(\Cart::getTotal())}} VNĐ</strong></h5>
                                    </td>
                                </tr>
                                <tr class="out_button_area">
                                    <td colspan="3"></td>
                                    <td colspan="2"  class="text-center">
                                        <a class="btn btn-primary" href="{{ route('admin.get.cart')}}"><span class="fa fa-arrow-right"></span> Tiếp tục thêm</a>
                                    </td>
                                    <td colspan="2"  class="text-center">
                                        <a class="btn btn-warning" href="{{ route('check.get')}}"><span class="fa fa-check"></span> Xác nhận đơn hàng</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- END RESPONSIVE TABLES -->
</div>
<!--================End Cart Area =================-->
@stop