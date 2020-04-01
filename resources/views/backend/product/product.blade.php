@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data Tables</li>
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
                        <h1 class="panel-title"><strong>Quản lý</strong> sản phẩm</h1>
                        <a href="{{ route('product-create')}}">
                            <button class="btn btn-primary btn-rounded pull-right"><span class="fa fa-plus"></span> Thêm sản phẩm</button>
                        </a>
                    </div>
                </div>

                <div class="panel-body panel-body-table">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50" class="text-center">ID</th>
                                    <th width="200">Tên sản phẩm</th>
                                    {{-- <th width="100">status</th>
                                    <th width="100">amount</th> --}}
                                    <th class="text-center">Mô tả</th>
                                    <th width="200" class="text-center">Hình ảnh</th>
                                    <th width="120" class="text-center">Danh mục</th>
                                    <th width="120" class="text-center">Trạng thái</th>
                                    <th width="120" class="text-center">Ngày nhập</th>
                                    <th width="120" class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="trow_1">
                                    <td class="text-center">1</td>
                                    <td><strong>Apple Macbook Pro 2020</strong></td>
                                    {{-- <td><span class="label label-success">New</span></td>
                                    <td>$430.20</td> --}}
                                    <td class="text-center">MacBook Pro 13 hứa hẹn sẽ được trang bị bàn phím mới như
                                        phiên bản 16 inch, bên cạnh đó còn có những tính năng gì khác? Dưới đây là tổng
                                        hợp những thông tin, dự đoán cũng như tin đồn về dòng MacBook Pro 2020 cho đến
                                        thời điểm hiện tại.</td>
                                    <td class="text-center"><img class="img-fluid" style="width:100px"
                                            src="{{ url('/') }}/public/img/product/macpro-1.jpg" alt=""></td>
                                    <td class="text-center">Apple</td>
                                    <td class="text-center"> <label class="switch switch-small">
                                            <input type="checkbox" checked value="0" />
                                            <span></span>
                                        </label></td>
                                    <td class="text-center">23/09/2015</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                class="fa fa-info"></span></button>
                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm"
                                            onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                    </td>
                                </tr>
                                <tr id="trow_2">
                                    <td class="text-center">1</td>
                                    <td><strong>Apple Macbook Pro 2020</strong></td>
                                    {{-- <td><span class="label label-success">New</span></td>
                                    <td>$430.20</td> --}}
                                    <td class="text-center">MacBook Pro 13 hứa hẹn sẽ được trang bị bàn phím mới như
                                        phiên bản 16 inch, bên cạnh đó còn có những tính năng gì khác? Dưới đây là tổng
                                        hợp những thông tin, dự đoán cũng như tin đồn về dòng MacBook Pro 2020 cho đến
                                        thời điểm hiện tại.</td>
                                    <td class="text-center"><img class="img-fluid" style="width:100px"
                                            src="{{ url('/') }}/public/img/product/macpro-1.jpg" alt=""></td>
                                    <td class="text-center">Apple</td>
                                    <td class="text-center"> <label class="switch switch-small">
                                            <input type="checkbox" checked value="0" />
                                            <span></span>
                                        </label></td>
                                    <td class="text-center">23/09/2015</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                class="fa fa-info"></span></button>
                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm"
                                            onClick="delete_row('trow_2');"><span class="fa fa-times"></span></button>
                                    </td>
                                </tr>
                                <tr id="trow_3">
                                    <td class="text-center">1</td>
                                    <td><strong>Apple Macbook Pro 2020</strong></td>
                                    {{-- <td><span class="label label-success">New</span></td>
                                    <td>$430.20</td> --}}
                                    <td class="text-center">MacBook Pro 13 hứa hẹn sẽ được trang bị bàn phím mới như
                                        phiên bản 16 inch, bên cạnh đó còn có những tính năng gì khác? Dưới đây là tổng
                                        hợp những thông tin, dự đoán cũng như tin đồn về dòng MacBook Pro 2020 cho đến
                                        thời điểm hiện tại.</td>
                                    <td class="text-center"><img class="img-fluid" style="width:100px"
                                            src="{{ url('/') }}/public/img/product/macpro-1.jpg" alt=""></td>
                                    <td class="text-center">Apple</td>
                                    <td class="text-center"> <label class="switch switch-small">
                                            <input type="checkbox" checked value="0" />
                                            <span></span>
                                        </label></td>
                                    <td class="text-center">23/09/2015</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                class="fa fa-info"></span></button>
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