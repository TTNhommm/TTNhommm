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
                        <a href="{{ route('admin.get.create.product')}}">
                            <button class="btn btn-primary btn-rounded pull-right"><span class="fa fa-plus"></span> Thêm
                                sản phẩm</button>
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
                                    <th width="200" class="text-center">Loại</th>
                                    <th width="120" class="text-center">Giá</th>
                                    <th width="120" class="text-center">Danh mục</th>
                                    <th width="120" class="text-center">Trạng thái</th>
                                    <th width="120" class="text-center">Ngày nhập</th>
                                    <th width="120" class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($products))
                                @foreach($products as $product )
                                {{-- <tr id="trow_1"> --}}
                                <tr>
                                    <td class="text-center">{{ $product->id }}</td>
                                    <td><strong>{{ $product->pro_name}}</strong></td>
                                    {{-- <td><span class="label label-success">New</span></td>
                                        <td>$430.20</td> --}}
                                    <td class="text-center" style="display: -webkit-box; -webkit-line-clamp: 4; overflow:
                                        hidden; -webkit-box-orient: vertical;">{{$product->description}}</td>
                                    <td class="text-center"><img class="img-fluid" style="width:100px"
                                            src="{{asset("public/img/product/$product->pro_image")}}" alt=""></td>
                                    <td class="text-center">Laptop đồ họa</td>
                                    <td class="text-center">25.000.000</td>
                                    <?php
                                        $category=DB::table('categories')->where('id',$product->id)->first();
                                    ?>
                                    <td class="text-center">
                                        {{$category->name}}
                                    </td>
                                    <td class="text-center"> <label class="switch switch-small">
                                            <input type="checkbox" checked value="0" />
                                            <span></span>
                                        </label></td>
                                    <td class="text-center">{{$product->created_at}}</td>
                                    <td class="text-center">
                                        {{-- <button class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                class="fa fa-info"></span></button>
                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm"
                                            onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button> --}}
                                        <a href="{{ route('admin.get.edit.product',$product->id) }}">
                                            <button class="btn btn-primary btn-rounded btn-condensed btn-sm">
                                                <span class="fa fa-pencil"></span></button>
                                        </a>
                                        <a href="{{ route('admin.get.action.product',['delete',$product->id]) }}">
                                            <button class="btn btn-danger btn-rounded btn-condensed btn-sm"><span
                                                    class="fa fa-times"></span></button>
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
<!-- PAGE CONTENT WRAPPER 
@stop