@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data Tables</li>
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
                        <h3 class="panel-title"><strong>Quản lý</strong> danh mục</h3>
                        <a href="{{ route('create-category')}}">
                            <button class="btn btn-primary btn-rounded pull-right"><span class="fa fa-plus"></span> Thêm danh mục</button>
                        </a>
                    </div>
                </div>

                <div class="panel-body panel-body-table">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50" class="text-center">ID</th>
                                    <th>Tên nhà cung cấp</th>
                                    {{-- <th width="100">status</th>
                                    <th width="100">amount</th> --}}
                                    <th width="200" class="text-center">Ngày nhập</th>
                                    <th width="120" class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="trow_1">
                                    <td class="text-center">1</td>
                                    <td><strong>Apple</strong></td>
                                    {{-- <td><span class="label label-success">New</span></td>
                                    <td>$430.20</td> --}}
                                    <td class="text-center">24/09/2015</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                class="fa fa-pencil"></span></button>
                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm"
                                            onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                    </td>
                                </tr>
                                <tr id="trow_2">
                                    <td class="text-center">2</td>
                                    <td><strong>Dell</strong></td>
                                    {{-- <td><span class="label label-warning">Pending</span></td>
                                    <td>$1,351.00</td> --}}
                                    <td class="text-center">23/09/2015</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                class="fa fa-pencil"></span></button>
                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm"
                                            onClick="delete_row('trow_2');"><span class="fa fa-times"></span></button>
                                    </td>
                                </tr>
                                <tr id="trow_3">
                                    <td class="text-center">3</td>
                                    <td><strong>Asus</strong></td>
                                    {{-- <td><span class="label label-info">In Queue</span></td>
                                    <td>$2,621.00</td> --}}
                                    <td class="text-center">22/09/2015</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                class="fa fa-pencil"></span></button>
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