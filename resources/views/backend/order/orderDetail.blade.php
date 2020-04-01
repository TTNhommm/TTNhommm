@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Đơn hàng</a></li>
    <li><a href="#">Chi tiết đơn hàng</a></li>
    <li class="active">#ĐH1</li>
</ul>
<!-- END BREADCRUMB -->                                                

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    
    <div class="row">
        <div class="col-md-12">
            
            <div class="panel panel-default">
                <div class="panel-body">                            
                    <h2>CHI TIẾT ĐƠN HÀNG <strong>#ĐH1</strong></h2>
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
                                    <p>Trần Duy Thắng</p>
                                    <p>CT10 khu đô thị Việt Hưng</p>
                                    <p>Long Biên, Hà Nội</p>
                                    <p>Phone: 0944 126-876</p>
                                </div>                                        

                            </div>
                            <div class="col-md-4">

                                <div class="invoice-address">
                                    <h5>Hóa đơn</h5>
                                    <table class="table table-striped">
                                        <tr>
                                            <td width="200">Mã hóa đơn:</td><td class="text-right">#ĐH1</td>
                                        </tr>
                                        <tr>
                                            <td>Ngày nhập hóa đơn:</td><td class="text-right">03/03/2020</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tổng hóa đơn:</strong></td><td class="text-right"><strong>78.000.000 VNĐ</strong></td>
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
                                <tr>
                                    <td>
                                        <strong>Apple Macbook Pro 2020</strong>
                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.</p> --}}
                                    </td>
                                    <td class="text-center">26.000.000 VNĐ</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">26.000.000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Apple Macbook Pro 2020</strong>
                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.</p> --}}
                                    </td>
                                    <td class="text-center">26.000.000 VNĐ</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">26.000.000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Apple Macbook Pro 2020</strong>
                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.</p> --}}
                                    </td>
                                    <td class="text-center">26.000.000 VNĐ</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">26.000.000 VNĐ</td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Hình thức thanh toán</h4>
                                
                                <div class="paymant-table">
                                    {{-- <a href="#" class="active">
                                        <img src="{{ url('/') }}/public/admin/img/cards/paypal.png"/> PayPal
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                    <a href="#">
                                        <img src="{{ url('/') }}/public/admin/img/cards/visa.png"/> Visa
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a> --}}
                                    <a href="#">
                                        {{-- <img src="{{ url('/') }}/public/admin/img/cards/mastercard.png"/>  --}}
                                        Thanh toán khi nhận hàng
                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                                    </a>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <h4>Khoản thanh toán</h4>
                                
                                <table class="table table-striped">
                                    <tr>
                                        <td width="200"><strong>Tạm tính:</strong></td><td class="text-right">78.000.000 VNĐ</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Thuế (VAT 10%):</strong></td><td class="text-right">7.800.000 VNĐ</td>
                                    </tr>
                                    {{-- <tr>
                                        <td><strong>Discount (2%):</strong></td><td class="text-right">$50.66</td>
                                    </tr> --}}
                                    <tr class="total">
                                        <td>Tổng thanh toán:</td><td class="text-right">85.800.000 VNĐ</td>
                                    </tr>
                                </table>                                                
                            </div>
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