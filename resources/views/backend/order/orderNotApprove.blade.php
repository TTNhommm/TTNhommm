@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Đơn hàng</a></li>
    <li class="active">Đơn hàng chưa duyệt</li>
</ul>
<!-- END BREADCRUMB -->
{{-- <!-- PAGE TITLE -->
 <div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Sortable Tables</h2>
</div>
<!-- END PAGE TITLE --> --}}

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <!-- START RESPONSIVE TABLES -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="page-head-text">
                        <h1 class="panel-title"><strong>Quản lý</strong> đơn hàng chưa duyệt</h1>
                        <a href="{{ route('admin.get.cart') }}">
                            <button class="btn btn-primary btn-rounded pull-right"><span class="fa fa-plus"></span> Thêm đơn hàng</button>
                        </a>
                    </div>
                </div>

                <div class="panel-body panel-body-table">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50" class="text-center">ID</th>
                                    <th width="150">Tên khách hàng</th>
                                    <th width="100" class="text-center">Email</th>
                                    <th width="100" class="text-center">Số điện thoại</th>
                                    <th width="200" class="text-center">Địa chỉ</th>
                                    <th width="300" class="text-center">Thông tin đơn hàng</th>
                                    <th width="200" class="text-center">Tổng thanh toán</th>
                                    <th class="text-center">Chú thích</th>
                                    <th width="80" class="text-center">Trạng thái</th>
                                    <th width="120" class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($orders)
                            @foreach($orders as $order)
                            <?php $order_detail = explode(',',$order->info_order); $key=0; ?>
                                <tr>
                                    <td class="text-center">{{ $order->id }}</td>
                                    <td><strong>{{ $order->nameguest }}</strong></td>                       
                                    <td class="text-center">{{ $order->emailguest }}</td>
                                    <td class="text-center">{{ $order->phone }}</td>
                                    <td class="text-center">{{ $order->address }}</td>
                                    <td class="text-center">
                                        @for($key =0; $key < count($order_detail); $key +=3)
                                            {{ $order_detail[$key].' x'.$order_detail[$key+1].' '.$order_detail[$key+2].',' }}
                                        @endfor
                                    </td>
                                    <td class="text-center">{{ $order->price_order }}</td>
                                    <td class="text-center">{{ $order->note }}</td>
                                    <td class="text-center">
                                        <a href="{{route('cart.reset',$order->id)}}">   
                                            <button type="button" class="btn btn-warning">Chưa duyệt </button>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('cart.update.get',$order->id) }}">
                                            <button class="btn btn-warning btn-rounded btn-condensed btn-sm">
                                                <span class="fa fa-check"></span>
                                            </button>
                                        </a>
                                        <a href="{{ route('order.detail',$order->id) }}">
                                            <button class="btn btn-primary btn-rounded btn-condensed btn-sm">
                                                <span class="fa fa-info"></span>
                                            </button>
                                        </a>
                                        <a href="{{ route('cart.delete',['delete',$order->id]) }}">
                                           <button class="btn btn-danger btn-rounded btn-condensed btn-sm">
                                                <span class="fa fa-times"></span>
                                           </button>
                                        </a>
                                    </td>
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