@extends('backend.layouts.backend-master')
@section('backend-main')
</section>
    <div class="container">
        <div class="cart">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Sổ lượng</th>
                            <th scope="col">Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cartCollection as $item)
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <!-- <img src="{{ asset("img/product/$item->attributes->image") }}" alt=""> -->
                                    </div>
                                    <div class="media-body">
                                        <p>{{ $item->name }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>{{ $item->price }}</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="number" name="qty" id="sst"  value="1">
                                </div>
                            </td>
    
                        </tr>
                    @endforeach
                        <tr class="bottom_button">
                            <td>
                                <a class="gray_btn" href="#">Cập nhật giỏ hàng</a>
                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Tổng</h5>
                            </td>
                            <td>
                                <h5>$2160.00</h5>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                            <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="#">Tiếp tục mua sắm</a>
                                    <a class="primary-btn" href="">Thanh toán</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@stop
