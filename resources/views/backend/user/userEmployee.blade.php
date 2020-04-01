@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Tài khoản</a></li>
    <li class="active">Nhân viên</li>
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
                        <h1 class="panel-title"><strong>Quản lý</strong> nhân viên</h1>
                        <div class="form-group pull-right">
                            <a href="{{ route('role-create')}}">
                                <button class="btn btn-primary btn-rounded"><span class="fa fa-plus"></span> Thêm mới quản trị</button>
                            </a>
                            <a href="{{ route('employee-create')}}">
                                <button class="btn btn-primary btn-rounded"><span class="fa fa-plus"></span> Thêm mới nhân viên</button>
                            </a>            
                        </div>
                        
                    </div>
                </div>

                <div class="panel-body panel-body-table">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50" class="text-center">ID</th>
                                    <th>Nhóm</th>
                                    <th width="200" class="text-center">Số lượng</th>
                                    <th width="120" class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="trow_1">
                                    <td class="text-center">1</td>
                                    <td><strong>Administrator</strong></td>
                                    <td class="text-center"><strong>1</strong></td>
                                    
                                    <td class="text-center">
                                        <a href="{{ route('employee-show')}}"><button
                                            class="btn btn-warning btn-rounded btn-condensed btn-sm"><span
                                                class="fa fa-info"></span></button></a>
                                        <a href="{{ route('role-edit')}}"><button
                                                class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                    class="fa fa-pencil"></span></button></a>
                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm"
                                            onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                    </td>
                                </tr>
                                <tr id="trow_2">
                                    <td class="text-center">2</td>
                                    <td><strong>Nhân viên</strong></td>
                                    <td class="text-center"><strong>2</strong></td>
                                    
                                    <td class="text-center">
                                        <a href="{{ route('employee-show')}}"><button
                                            class="btn btn-warning btn-rounded btn-condensed btn-sm"><span
                                                class="fa fa-info"></span></button></a>
                                        <a href="{{ route('role-edit')}}"><button
                                                class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                    class="fa fa-pencil"></span></button></a>
                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm"
                                            onClick="delete_row('trow_2');"><span class="fa fa-times"></span></button>
                                    </td>
                                </tr>
                                <tr id="trow_3">
                                    <td class="text-center">3</td>
                                    <td><strong>Nhân viên kho</strong></td>
                                    <td class="text-center"><strong>3</strong></td>
                                    
                                    <td class="text-center">
                                        <a href="{{ route('employee-show')}}"><button
                                            class="btn btn-warning btn-rounded btn-condensed btn-sm"><span
                                                class="fa fa-info"></span></button></a>
                                        <a href="{{ route('role-edit')}}"><button
                                                class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                    class="fa fa-pencil"></span></button></a>
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