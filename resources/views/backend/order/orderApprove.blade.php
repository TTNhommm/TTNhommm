@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Đơn hàng</a></li>
    <li class="active">Đơn hàng đã duyệt</li>
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
                        <h1 class="panel-title"><strong>Quản lý</strong> đơn hàng đã duyệt</h1>
                        <a href="{{ route('order-notapprove')}}">
                            <button class="btn btn-primary btn-rounded pull-right"><span class="fa fa-check"></span> Đơn hàng đã duyệt</button>
                        </a>
                    </div>
                </div>

                <div class="panel-body panel-body-table">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50" class="text-center">ID</th>
                                    <th width="200">Tên khách hàng</th>
                                    {{-- <th width="100">status</th>
                                    <th width="100">amount</th> --}}
                                    <th width="200" class="text-center">Email</th>
                                    <th width="120" class="text-center">Số điện thoại</th>
                                    <th width="200" class="text-center">Địa chỉ</th>
                                    <th width="200" class="text-center">Thông tin đơn hàng</th>
                                    <th width="200" class="text-center">Tổng thanh toán</th>
                                    <th class="text-center">Chú thích</th>
                                    <th width="120" class="text-center">Trạng thái</th>
                                    <th width="120" class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="trow_1">
                                    <td class="text-center">1</td>
                                    <td><strong>Trần Duy Thắng</strong></td>
                                    {{-- <td><span class="label label-success">New</span></td>
                                    <td>$430.20</td> --}}
                                    <td class="text-center">Thang@gmail.com</td>
                                    <td class="text-center">0944126876</td>
                                    <td class="text-center">Long Biên, Hà Nội</td>
                                    <td class="text-center">Apple Macbook Pro 2020</td>
                                    <td class="text-center">85.800.000 VNĐ</td>
                                    <td class="text-center">Ship vào giờ hành chính</td>
                                    <td class="text-center"><button type="button" class="btn btn-primary">Đã
                                            duyệt</button></td>
                                    <td class="text-center">
                                        <a href="{{ route('order-detail')}}"><button
                                                class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                    class="fa fa-info"></span></button></a>
                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm"
                                            onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                    </td>
                                </tr>
                                <tr id="trow_2">
                                    <td class="text-center">1</td>
                                    <td><strong>Trần Duy Thắng</strong></td>
                                    {{-- <td><span class="label label-success">New</span></td>
                                    <td>$430.20</td> --}}
                                    <td class="text-center">Thang@gmail.com</td>
                                    <td class="text-center">0944126876</td>
                                    <td class="text-center">Long Biên, Hà Nội</td>
                                    <td class="text-center">Apple Macbook Pro 2020</td>
                                    <td class="text-center">85.800.000 VNĐ</td>
                                    <td class="text-center">Ship vào giờ hành chính</td>
                                    <td class="text-center"><button type="button" class="btn btn-primary">Đã
                                            duyệt</button></td>
                                    <td class="text-center">
                                        <a href="{{ route('order-detail')}}"><button
                                                class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                    class="fa fa-info"></span></button></a>
                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm"
                                            onClick="delete_row('trow_2');"><span class="fa fa-times"></span></button>
                                    </td>
                                </tr>
                                <tr id="trow_3">
                                    <td class="text-center">1</td>
                                    <td><strong>Trần Duy Thắng</strong></td>
                                    {{-- <td><span class="label label-success">New</span></td>
                                    <td>$430.20</td> --}}
                                    <td class="text-center">Thang@gmail.com</td>
                                    <td class="text-center">0944126876</td>
                                    <td class="text-center">Long Biên, Hà Nội</td>
                                    <td class="text-center">Apple Macbook Pro 2020</td>
                                    <td class="text-center">85.800.000 VNĐ</td>
                                    <td class="text-center">Ship vào giờ hành chính</td>
                                    <td class="text-center"><button type="button" class="btn btn-primary">Đã
                                            duyệt</button></td>
                                    <td class="text-center">
                                        <a href="{{ route('order-detail')}}"><button
                                                class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                    class="fa fa-info"></span></button></a>
                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm"
                                            onClick="delete_row('trow_3');"><span class="fa fa-times"></span></button>
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
<!-- PAGE CONTENT WRAPPER 
@stop