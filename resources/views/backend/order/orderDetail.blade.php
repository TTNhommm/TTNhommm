@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Đơn hàng</a></li>
    <li><a href="#">Chi tiết đơn hàng</a></li>
    <li class="active">#ĐH{{ $orders->id}}</li>
</ul>
<!-- END BREADCRUMB -->                                                

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    
    <div class="row">
        <div class="col-md-12">
            
            <div class="panel panel-default">
                <div class="panel-body">                            
                    <h2>CHI TIẾT ĐƠN HÀNG <strong>#ĐH{{ $orders->id}}</strong></h2>
                    <div class="push-down-10 pull-right">
                        <button class="btn btn-primary"><span class="fa fa-print"></span> In</button>                                        
                    </div>
                    <!-- INVOICE -->
                    <div class="invoice">

                        <div class="row">
                            <div class="col-md-4">

                                <div class="invoice-address">
                                    <h5>Từ</h5>
                                    <h6>Công ty</h6>
                                    <p>Công Ty Cổ Phần Máy Tính Electro</p>
                                    <p>236 Hoàng Quốc Việt</p>
                                    <p>Cầu Giấy, Hà Nội</p>
                                    <p>Phone: 0944 126-876</p>
                                </div>

                            </div>
                            <div class="col-md-4">

                                <div class="invoice-address">
                                    <h5>Đến</h5>
                                    <h6>Nhà riêng</h6>
                                    <p>{{ $orders->nameguest }}</p>
                                    <p>{{ $orders->emailguest }}</p>
                                    <p>{{ $orders->address }}</p>
                                    <p>Phone: {{ $orders->phone }}</p>
                                </div>                                        

                            </div>
                            <div class="col-md-4">

                                <div class="invoice-address">
                                    <h5>Hóa đơn</h5>
                                    <table class="table table-striped">
                                        <tr>
                                            <td width="200">Mã hóa đơn:</td><td class="text-right">#ĐH{{ $orders->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Ngày nhập hóa đơn:</td><td class="text-right">{{ $orders->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tổng hóa đơn:</strong></td><td class="text-right"><strong>{{ $orders->price_order}}</strong></td>
                                        </tr>
                                    </table>

                                </div>                                        

                            </div>
                        </div>
                        
                        <div class="table-invoice">
                            <table class="table">
                                <tr>
                                    <th>Chi tiết hóa đơn</th>
                                    <th class="text-center">Giá</th>
                                    <th class="text-center">Số lượng</th>
                                    <th class="text-right">Tổng</th>
                                </tr>
                                
                                <?php $order_detail = explode(',',$orders->info_order); ?>
                                @for($key =0; $key < count($order_detail); $key++)
                               
                                <tr> 
                                @if($key % 2 == 0 )
                                    <td>
                                        <strong>{{ $order_detail[$key] }}</strong>
                                    </td> 
                                    <td class="text-center"></td>
                                    <td class="text-center">{{ $order_detail[$key+1] }}</td>
                                    <td class="text-right">26.000.000 VNĐ</td>
                                @endif
                                    
                                </tr>
                               
                                @endfor
                            </table>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right push-down-20">
                                    <button class="btn btn-primary"><span class="fa fa-mail-reply"></span> Quay về</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END INVOICE -->

                </div>
            </div>
    
        </div>
    </div>

</div>
<!-- END PAGE CONTENT WRAPPER -->      
@stop