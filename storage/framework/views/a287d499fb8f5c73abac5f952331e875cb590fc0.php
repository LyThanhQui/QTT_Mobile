<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
	<title><?php echo $__env->yieldContent('title', 'Trang chủ'); ?> - <?php echo e(config('app.name', 'Laravel')); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('public/assets/images/favicon.png')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/animate.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/bootstrap/css/bootstrap.min.css')); ?>" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/all.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/ionicons.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/themify-icons.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/linearicons.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/flaticon.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/simple-line-icons.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/owlcarousel/css/owl.carousel.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/owlcarousel/css/owl.theme.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/owlcarousel/css/owl.theme.default.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/magnific-popup.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/jquery-ui.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/slick.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/slick-theme.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/style.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/responsive.css')); ?>" />
</head>

<body>
	<div class="preloader">
		<div class="lds-ellipsis">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	<header class="header_wrap fixed-top header_with_topbar">
		<div class="bottom_header dark_skin main_menu_uppercase">
			<div class="container">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="<?php echo e(route('frontend')); ?>">
						<img class="logo_light" src="<?php echo e(asset('public/assets/images/smartphone.png')); ?>" />
						<img class="logo_dark" src="<?php echo e(asset('public/assets/images/logo_dark.png')); ?>" />
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
						<span class="ion-android-menu"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li><a class="nav-link nav_item" href="<?php echo e(route('frontend')); ?>">Trang chủ</a></li>

							<li class="dropdown dropdown-mega-menu">
								<a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Cửa hàng</a>
								<div class="dropdown-menu">
									<ul class="mega-menu d-lg-flex">
										<li class="mega-menu-col col-lg-3">
											<ul>
												<li class="dropdown-header">Điện thoại</li>
												<li><a class="dropdown-item nav-link nav_item" href="#">SAMSUNG</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">OPPO</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">VIVO</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">REALME</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">IPHONE</a></li>
											</ul>
										</li>
										<li class="mega-menu-col col-lg-3">
											<ul>
												<li class="dropdown-header">Laptop</li>
												<li><a class="dropdown-item nav-link nav_item" href="#">MACBOOK</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">ASUS</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">HP</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">LENOVO</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">DELL</a></li>
											</ul>
										</li>
										<li class="mega-menu-col col-lg-3">
											<ul>
												<li class="dropdown-header">Tablet</li>
												<li><a class="dropdown-item nav-link nav_item" href="#">IPAD</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">SAMSUNG</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">HUAWEI</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">LENOVO</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">MASSTEL</a></li>
											</ul>
										</li>
										<li class="mega-menu-col col-lg-3">
											<ul>
												<li class="dropdown-header">Phụ kiện</li>
												<li><a class="dropdown-item nav-link nav_item" href="#">PHỤ KIỆN DI ĐỘNG</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">PHỤ KIỆM LAPTOP</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">THIẾT BỊ ÂM THANH</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">THIẾT BỊ LƯU TRỮ</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">PHỤ KIỆN CHÍNH HÃNG</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li><a class="nav-link nav_item" href="<?php echo e(route('frontend')); ?>">Điện Thoại</a></li>
							<li><a class="nav-link nav_item" href="<?php echo e(route('frontend.laptop')); ?>">Laptop</a></li>
							<li><a class="nav-link nav_item" href="<?php echo e(route('frontend.tablet')); ?>">Máy Tính Bảng</a></li>



							<li><a class="nav-link nav_item" href="<?php echo e(route('frontend.lienhe')); ?>">Liên hệ</a></li>
						</ul>
					</div>
					<ul class="navbar-nav attr-nav align-items-center">
						<li>
							<a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
							<div class="search_wrap">
								<span class="close-search"><i class="ion-ios-close-empty"></i></span>
								<form action="https://www.google.com.vn/search" method="get">
									<input type="hidden" name="hl" id="hl" value="vi" />
									<input type="text" placeholder="Bạn muốn tìm gì?" class="form-control" id="search_input" name="q" />
									<button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
								</form>
							</div>
							<div class="search_overlay"></div>
						</li>

						<li><a href="<?php echo e(route('khachhang')); ?>" class="nav-link"><i class="linearicons-user"></i></a></li>
						<li class="dropdown cart_dropdown">
							<a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count"><?php echo e(Cart::count()); ?></span></a>
							<?php if(Cart::count() > 0): ?>
							<div class="cart_box dropdown-menu dropdown-menu-right">
								<ul class="cart_list">
									<?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li>
										<a href="#" class="item_remove"><i class="ion-close"></i></a>
										<a href="#"><img src="<?php echo e(env('APP_URL') . '/storage/app/' . $value->options->image); ?>" /><?php echo e($value->name); ?></a>
										<span class="cart_quantity"> <?php echo e($value->qty); ?> x <span class="cart_amount"><?php echo e(number_format($value->price)); ?></span><span class="price_symbole">đ</span></span>
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
								<div class="cart_footer">
									<p class="cart_total"><strong>Tổng tiền sản phẩm:</strong> <span class="cart_price"><?php echo e(Cart::priceTotal()); ?>

										</span> <span class="price_symbole">đ
										</span></p>
									<p class="cart_buttons">
										<a href="<?php echo e(route('frontend.giohang')); ?>" class="btn btn-fill-line view-cart">GIỎ HÀNG</a>
										<a href="<?php echo e(route('frontend.dathang')); ?>" class="btn btn-fill-out checkout">THANH TOÁN</a>
									</p>
								</div>
							</div>
							<?php endif; ?>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<?php echo $__env->yieldContent('content'); ?>

	<footer class="footer_dark">
		<div class="footer_top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="widget">
							<div class="footer_logo">
								<a href="#"><img src="<?php echo e(asset('public/assets/images/logo_light.png')); ?>" /></a>
							</div>
							<p>QTT Mobile .</p>
						</div>
						<div class="widget">
							<ul class="social_icons social_white">
								<li><a href="#"><i class="ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
								<li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
								<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6">
						<div class="widget">
							<h6 class="widget_title">Useful links</h6>
							<ul class="widget_links">
								<li><a href="#">About Us</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Location</a></li>
								<li><a href="#">Affiliates</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6">
						<div class="widget">
							<h6 class="widget_title">Category</h6>
							<ul class="widget_links">
								<li><a href="#">Điên thoại</a></li>
								<li><a href="#">Laptop</a></li>
								<li><a href="#">Tablet</a></li>
								<li><a href="#">Phụ kiện</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="widget">
							<h6 class="widget_title">Tài khoản của tôi</h6>
							<ul class="widget_links">
								<li><a href="#">Mua hàng</a></li>
								<li><a href="#">Giảm giá</a></li>
								<li><a href="#">Trả hàng</a></li>
								<li><a href="#">Lịch sử mua hàng</a></li>
								<li><a href="#">Tình trạng giao hàng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="widget">
							<h6 class="widget_title">Contact info</h6>
							<ul class="contact_info contact_info_light">
								<li>
									<i class="ti-location-pin"></i>
									<p>18 Ung Văn Khiêm, P. Đông Xuyên, TP. Long Xuyên, AG</p>
								</li>
								<li>
									<i class="ti-email"></i>
									<a href="mailto:larashop@gmail.com">QTTMobile@gmail.com</a>
								</li>
								<li>
									<i class="ti-mobile"></i>
									<p>+84 969 521 009</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom_footer border-top-tran">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p class="mb-md-0 text-center text-md-left">Copyright © 2020 by QTTMobile.</p>
					</div>
					<div class="col-md-6">
						<ul class="footer_payment text-center text-lg-right">
							<li><a href="#"><img src="<?php echo e(asset('public/assets/images/visa.png')); ?>" alt="visa" /></a></li>
							<li><a href="#"><img src="<?php echo e(asset('public/assets/images/discover.png')); ?>" alt="discover" /></a></li>
							<li><a href="#"><img src="<?php echo e(asset('public/assets/images/master_card.png')); ?>" alt="master_card" /></a></li>
							<li><a href="#"><img src="<?php echo e(asset('public/assets/images/paypal.png')); ?>" alt="paypal" /></a></li>
							<li><a href="#"><img src="<?php echo e(asset('public/assets/images/amarican_express.png')); ?>" alt="amarican_express" /></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<a href="#" class="scrollup" style="display:none;"><i class="ion-ios-arrow-up"></i></a>

	<script src="<?php echo e(asset('public/assets/js/jquery-1.12.4.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/jquery-ui.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/popper.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/owlcarousel/js/owl.carousel.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/magnific-popup.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/waypoints.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/parallax.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/jquery.countdown.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/hoverparallax.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/jquery.countTo.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/isotope.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/jquery.appear.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/jquery.parallax-scroll.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/jquery.dd.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/slick.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/jquery.elevatezoom.js')); ?>"></script>
	<?php echo $__env->yieldContent('javascript'); ?>
	<script src="<?php echo e(asset('public/assets/js/scripts.js')); ?>"></script>
</body>

</html><?php /**PATH C:\wamp64\www\QTT_Mobile\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>