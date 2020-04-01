@extends('layouts.master')

@section('main')
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
				<div class="col-first">
					<h1>Chi tiết sản phẩm</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Sản phẩm<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.html">APPLE MACBOOK AIR 13 </a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ url('/')}}/public/img/category/product/apple/s-p1.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ url('/')}}/public/img/category/product/apple/s-p2.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ url('/')}}/public/img/category/product/apple/s-p3.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ url('/')}}/public/img/category/product/apple/s-p4.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>APPLE MACBOOK AIR 13</h3>
						<h2>$149.99</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Danh mục</span> : Apple Macbook</a></li>
							<li><a href="#"><span>Tình trạng</span> : Có sẵn</a></li>
						</ul>
						<p>MacBook Pro 13 inch 2019 với chip Intel thế hệ thứ 8 cho sức mạnh gấp đôi so với trước, được tích hợp Touch Bar, Touch ID, màn hình Retina True Tone và chip bảo mật Apple T2.
						</p>
						<div class="product_count">
							<label for="qty">Số lượng:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="#">Thêm vào giỏ hàng</a>
							{{-- <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a> --}}
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Giới thiệu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Thông số kỹ thuật</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
					 aria-selected="false">Bình luận</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
					 aria-selected="false">Đánh giá</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>Apple ra MacBook Air Retina 2019 với màn hình công nghệ TrueTone
						Tối qua, theo giờ Việt Nam Apple vừa bất ngờ giới thiệu bản nâng cấp MacBook Air 2019 Retina mới. Theo đó MacBook Air 2019 sở hữu hữu màn hình Retina 13,3 inch độ phân giải 2560×1600 pixel được tích hợp công nghệ True Tone. Công nghệ này giúp tự động điều chỉnh cân bằng trắng của màn hình MacBook Air 2019 để phù hợp với nhiệt độ màu của ánh sáng xung quanh người dùng. Qua đó giúp những trải nghiệm về màu sắc trên màn hình của người dùng trở nên tự nhiên hơn.
						
						
						
						Nâng cấp đáng chú ý tiếp theo của MacBook Air 2019 nằm ở con chip Intel thế hệ thứ 8 cho hiệu suất nhanh hơn. Cụ thể, MacBook Air 2019 được tích hợp bộ vi xử lý Intel Core i5 1.6GHz, chip đồ họa Intel UHD Graphics 617, RAM 8GB, ổ cứng SSD 128 GB (hỗ trợ tối đa 1.5 TB và nhanh hơn 60%).
						
						Ngoài ra máy cũng sở hữu bàn phím loại cánh bướm thế hệ thứ 3, tích hợp tính năng nhận diện vân tay Touch ID, có 2 cổng USB-C và 1 jack tai nghe 3.5mm.
						
						
						 
						Cùng với MacBook Air, Apple cũng nâng cấp nhẹ cho MacBook Pro 13 inch 2019 với chip Intel thế hệ thứ 8 cho sức mạnh gấp đôi so với trước, được tích hợp Touch Bar, Touch ID, màn hình Retina True Tone và chip bảo mật Apple T2
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5><strong>Bộ xử lý CPU:</strong></h5>
									</td>
									<td>
										<h5>Core i5 1.6GHz dual-core 8th-generation - 8210Y</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Bộ nhớ RAM:</strong></h5>
									</td>
									<td>
										<h5>8GB</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Màn hình:</strong></h5>
									</td>
									<td>
										<h5>13.3 inch, Retina (2560 x 1600 pixels)</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Card màn hình:</strong></h5>
									</td>
									<td>
										<h5>Intel UHD Graphics 617 graphics</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Ổ cứng:</strong></h5>
									</td>
									<td>
										<h5>SSD, 128 GB</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Kích thước và trọng lượng:</strong></h5>
									</td>
									<td>
										<h5>1.25 kg</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Camera:</strong></h5>
									</td>
									<td>
										<h5>720p FaceTime HD</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Cổng kết nối:</strong></h5>
									</td>
									<td>
										<h5>Two Thunderbolt 3 ports</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Pin và sạc:</strong></h5>
									</td>
									<td>
										<h5>49.9 W h Li-Poly</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{ url('/')}}/public/img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Trần Văn An</h4>
											<h5>12/2/2018 lúc 15:56</h5>
											<a class="reply_btn" href="#">Trả lời</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item reply">
									<div class="media">
										<div class="d-flex">
											<img src="{{ url('/')}}/public/img/product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Trần Văn An</h4>
											<h5>12/2/2018 lúc 15:56</h5>
											<a class="reply_btn" href="#">Trả lời</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{ url('/')}}/public/img/product/review-3.png" alt="">
										</div>
										<div class="media-body">
											<h4>Trần Văn An</h4>
											<h5>12/2/2018 lúc 15:56</h5>
											<a class="reply_btn" href="#">Trả lời</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Đăng bình luận</h4>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Họ tên của bạn">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Địa chỉ email">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Số điện thoại">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Nội dung"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn primary-btn">Đăng</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="row total_rate">
								<div class="col-6">
									<div class="box_total">
										<h5>Đánh giá chung</h5>
										<h4>4.0</h4>
										<h6>(03 đánh giá)</h6>
									</div>
								</div>
								<div class="col-6">
									<div class="rating_list">
										<h3>Dựa trên 3 đánh giá</h3>
										<ul class="list">
											<li><a href="#">5 Sao <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">4 Sao <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">3 Sao <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">2 Sao <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">1 Sao <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="review_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{ url('/')}}/public/img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Trần Văn An</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{ url('/')}}/public/img/product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Trần Văn An</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{ url('/')}}/public/img/product/review-3.png" alt="">
										</div>
										<div class="media-body">
											<h4>Trần Văn An</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Thêm đánh giá</h4>
								<p>Đánh giá của bạn:</p>
								<ul class="list">
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
								</ul>
								{{-- <p>Outstanding</p> --}}
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Họ tên của bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Họ tên của bạn'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Địa chỉ email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ email'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Số điện thoại" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số điện thoại'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Đánh giá" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Đánh giá'"></textarea></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="primary-btn">Đánh giá</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

	<!-- Start related-product Area -->
	{{-- <section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Deals of the Week</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ url('/')}}/public/img/r1.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ url('/')}}/public/img/r2.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ url('/')}}/public/img/r3.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ url('/')}}/public/img/r5.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ url('/')}}/public/img/r6.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ url('/')}}/public/img/r7.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ url('/')}}/public/img/r9.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ url('/')}}/public/img/r10.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ url('/')}}/public/img/r11.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="{{ url('/')}}/public/img/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End related-product Area -->
@stop