@extends('backend.layouts.backend-master')
@section('backend-main')

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Danh mục</a></li>
    <li class="active">Thêm sản phẩm</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Thêm</strong> Danh mục</h3>
                       
                    </div>
                  
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Danh mục</label>
                                    <div class="col-md-9">
                                        <select class="form-control select">
                                            <option>Apple</option>
                                            <option>Dell</option>
                                            <option>Asus</option>
                                            <option>Msi</option>
                                            <option>Microsoft Surface</option>
                                            <option>Msi</option>
                                            <option>Hp</option>
                                            <option>Acer</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Tên sản phẩm</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" class="form-control" />
                                        </div>
                                        {{-- <span class="help-block">This is sample of text field</span> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Giá</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-dollar"></span></span>
                                            <input type="text" class="form-control" />
                                        </div>
                                        {{-- <span class="help-block">This is sample of text field</span> --}}
                                    </div>
                                </div>
                                {{-- 
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span
                                                    class="fa fa-unlock-alt"></span></span>
                                            <input type="password" class="form-control" />
                                        </div>
                                        <span class="help-block">Password field sample</span>
                                    </div>
                                </div> --}}

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Mô tả</label>
                                    <div class="col-md-9 col-xs-12">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Hình ảnh</label>
                                    <div class="col-md-9">
                                        <input type="file" class="fileinput btn-primary" name="filename" id="filename"
                                            title="Chọn hình ảnh" />
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Bộ xử lý CPU</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input type="text" class="form-control" />
                                        </div>
                                        {{-- <span class="help-block">This is sample of text field</span> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Bộ nhớ RAM</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input type="text" class="form-control" />
                                        </div>
                                        {{-- <span class="help-block">This is sample of text field</span> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Màn hình</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input type="text" class="form-control" />
                                        </div>
                                        {{-- <span class="help-block">This is sample of text field</span> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Card màn hình</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input type="text" class="form-control" />
                                        </div>
                                        {{-- <span class="help-block">This is sample of text field</span> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Ổ cứng</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input type="text" class="form-control" />
                                        </div>
                                        {{-- <span class="help-block">This is sample of text field</span> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Kích thước và trọng lượng</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input type="text" class="form-control" />
                                        </div>
                                        {{-- <span class="help-block">This is sample of text field</span> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Camera</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input type="text" class="form-control" />
                                        </div>
                                        {{-- <span class="help-block">This is sample of text field</span> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Cổng kết nối</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input type="text" class="form-control" />
                                        </div>
                                        {{-- <span class="help-block">This is sample of text field</span> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Pin và sạc</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                            <input type="text" class="form-control" />
                                        </div>
                                        {{-- <span class="help-block">This is sample of text field</span> --}}
                                    </div>
                                </div>


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