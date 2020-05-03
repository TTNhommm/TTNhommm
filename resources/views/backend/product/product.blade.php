@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ route('admin.home')}}">Trang chủ</a></li>
    <li><a href="{{ route('admin.get.list.product')}}">Sản phẩm</a></li>
    <li class="active">Danh sách sản phẩm</li>
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
                                    <th width="250" class="text-center">Tên sản phẩm</th>
                                    <th class="text-center">Mô tả</th>
                                    <th width="150" class="text-center">Hình ảnh</th>
                                    <th width="150" class="text-center">Loại</th>
                                    <th width="120" class="text-center">Giá</th>
                                    <th width="100" class="text-center">Danh mục</th>
                                    <th width="50" class="text-center">Trạng thái</th>
                                    <th width="120" class="text-center">Ngày nhập</th>
                                    <th width="120" class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @if(isset($products))
                                @foreach($products as $product )
                                <tr>
                                    <td class="text-center">{{ $product->id }}</td>
                                    <td><strong>{{ $product->pro_name}}</strong></td>
                                    <td style="display: -webkit-box; -webkit-line-clamp: 4; overflow:
                                        hidden; -webkit-box-orient: vertical;border-width:1px 0 0 0">
                                        {{$product->pro_content}}</td>
                                    <td class="text-center"><img class="img-fluid" style="width:100px"
                                        src="{{ asset("img/product/$product->pro_image")}}" alt=""></td>
                                          <!--  src="{{asset("public/img/product/$product->pro_image")}}" alt=""></td> -->
                                    <td class="text-center">{{ $product->pro_type}}</td>
                                    <td class="text-center">{{ number_format($product->pro_price) }} VNĐ</td>
                                    <?php
                                        $category=DB::table('categories')->where('id',$product->id)->first();
                                    ?>
                                    <td class="text-center">
                                        {{ $product->getCategory() }}
                                    </td>
                                    <td class="text-center"> <label class="switch switch-small">
                                            <input type="checkbox" checked value="0" />
                                            <span></span>
                                        </label></td>
                                    <td class="text-center">{{ date_format($product->created_at,'d/m/Y H:i:s') }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.get.action.product',['delete',$product->id])}}">
                                            <button class="btn btn-danger btn-rounded btn-condensed btn-sm">
                                                <span class="fa fa-times"></span></button>
                                        </a>
                                        <a href="{{ route('admin.get.edit.product',$product->id) }}">
                                            <button class="btn btn-primary btn-rounded btn-condensed btn-sm">
                                                <span class="fa fa-pencil"></span></button>
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