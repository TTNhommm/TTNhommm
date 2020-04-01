@extends('layouts.master')

@section('main')
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
				<div class="col-first">
					<h1>Đăng ký</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Đăng ký</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="{{ url('/')}}/public/img/login.jpg" alt="">
						<div class="hover">
							<h4>Bạn đã có tài khoản?</h4>
							{{-- <p>There are advances being made in science and technology everyday, and a good example of this is the</p> --}}
							<a class="primary-btn" href="{{route('dang-nhap')}}">Đăng nhập ngay</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<div>
						<h3>Thông tin đăng ký</h3>
						<form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Tên tài khoản" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tên tài khoản'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Mật khẩu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mật khẩu'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Nhập lại mật khẩu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập lại mật khẩu'">
							</div>
							{{-- <div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div> --}}
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Đăng ký</button>
								{{-- <a href="#">Forgot Password?</a> --}}
							</div>
						</form>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
@stop