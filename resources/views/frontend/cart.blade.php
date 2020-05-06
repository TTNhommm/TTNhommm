@extends('backend.layouts.backend-master')
@section('backend-main')
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
                                    <th width="150" class="text-center">Hình ảnh</th>
                                    <th class="text-center">Tên sản phẩm</th>
                                    <th width="220" class="text-center">Giá</th>
                                    <th width="220" class="text-center">Hành động</th>
                                    <th width="150" class="text-center">Thành tiền</th>
                                    <th width="100" class="text-center">Option</th>
                                    <th width="100" class="text-center">Option</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php $i = 1 ?>
                                @if(isset($cartCollection))
                                @foreach($cartCollection as $item)
                                <tr class="text-center">
                                    <td>
                                        <div class="media text-center">
                                            <div class="d-flex">
                                                <img class="img-thumbnail"  width="100" height="080" src="/img/product/{{ $item->attributes->image}}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media-body text-center">
                                                <p>{{ $item->name }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>{{ $item->price }}</h5>
                                    </td>
                                    <form action="{{ route('cart.update') }}" method="post">
                                    @csrf
                                        <td>
                                            <div class="product_count text-center">
                                                <input type="hidden" value="{{ $item->id }}" id="id" name="id"> 
                                                <input type="text" name="qty" id="sst{{$i}}" value="{{ $item->quantity }}" >
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <h5>{{ $item->quantity* $item->price}}</h5>
                                        </td> 
                                        <td>
                                            <button class="btn btn-success">Cập nhật</button>
                                        </td> 
                                    </form>
                                    <form action="{{ route('cart.remove') }}" method="post">
                                    @csrf
                                        <td>
                                            <input type="hidden" value="{{ $item->id }}" id="id" name="id"> 
                                            <button class="btn btn-danger">Xóa</button>
                                        </td>
                                    </form>
                                </tr>
                                <?php $i += 1 ?>
                                @endforeach
                                @endif
                                <tr class="bottom_button">
                                    
                                    <td>
                                        <h5>Tổng</h5>
                                    </td>
                                    <td>
                                        <h5>{{ \Cart::getTotal() }}</h5>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class="out_button_area">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('admin.get.cart')}}">Tiếp tục thêm</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('check.get')}}">Chốt đơn</a>
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


