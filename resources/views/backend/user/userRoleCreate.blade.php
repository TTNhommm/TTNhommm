@extends('backend.layouts.backend-master')
@section('backend-main')

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Tài khoản</a></li>
    <li><a href="#">Quản trị nhân viên</a></li>
    <li class="active">Thêm mới quản trị</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Thêm mới</strong> quản trị</h3>
                    </div>

                    <div class="panel-body">

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tên vai trò quản trị</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" class="form-control" />
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Phân quyền quản trị</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Xem thành viên</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Thêm thành viên</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Sửa thành viên</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Xóa thành viên</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Xem danh mục</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Thêm danh mục</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Sửa danh mục</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Xóa danh mục</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Xem sản phẩm</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Thêm sản phẩm</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Sửa sản phẩm</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Xóa sản phẩm</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Xem đơn đặt hàng</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Duyệt đơn đặt hàng</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Lịch sử đơn đặt hàng</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Xóa đơn đơn đặt hàng</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Xem vai trò quản trị</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Thêm vai trò quản trị</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Sửa vai trò quản trị</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="check"><input type="checkbox" class="icheckbox"
                                                checked="checked" /> Xóa đơn vai trò quản trị</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-default">Xóa trường</button>
                        <button class="btn btn-primary pull-right">Lưu</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- END PAGE CONTENT WRAPPER -->
@stop