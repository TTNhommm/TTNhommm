@extends('backend.layouts.backend-master')
@section('backend-main')

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Tài khoản</a></li>
    <li><a href="#">Quản trị nhân viên</a></li>
    <li class="active">Thêm mới nhân viên</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="post" action="{{ route('post.register') }}">
            @csrf
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Thêm mới</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Họ và tên</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" name="name" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Giới tính</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="sex" value="Nam" id="Nam"/>
                                                Nam
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="sex" value="Nữ" id="Nữ"/>
                                                Nữ
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Ngày sinh</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    <input type="text" class="form-control datepicker" name="birthday" value="1996-11-01">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Email</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                    <input type="text" class="form-control" name="email"/>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Số điện thoại</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                    <input type="text" class="form-control" name="phone"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Địa chỉ</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-home"></span></span>
                                    <input type="text" class="form-control" name="address"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Mật khẩu</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                    <input type="password" class="form-control" name="password"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Nhập lại mật khẩu</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                    <input type="password" class="form-control" name="passwordreset"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Vai trò</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control select" name="level">
                                    <option value="1">Administrator</option>
                                    <option value="2">Nhân viên</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-default">Xóa trường</button>
                        <button class="btn btn-primary pull-right">Thêm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
@stop