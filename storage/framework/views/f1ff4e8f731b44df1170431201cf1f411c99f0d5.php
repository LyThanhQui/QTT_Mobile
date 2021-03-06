﻿	
	<?php $__env->startSection('content'); ?>
	<div class="breadcrumb_section bg_gray page-title-mini">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="page-title">
						<h1><?php echo e($sanpham->tensanpham); ?></h1>
					</div>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb justify-content-md-end">
						<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
						<li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
						<li class="breadcrumb-item active">Tên sản phẩm</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="main_content">
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 mb-4 mb-md-0">
						<div class="product-image">
							<div class="product_img_box">
								<img id="product_img" src="<?php echo e(env('APP_URL') . '/storage/app/' .$sanpham->hinhanh); ?>" data-zoom-image="assets/images/product_zoom_img1.jpg" alt="product_img1" />
								<a href="#" class="product_img_zoom" title="Zoom">
									<span class="linearicons-zoom-in"></span>
								</a>
							</div>
							<div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
								<div class="item">
									<a href="#" class="product_gallery_item active" data-image="assets/images/product_img1.jpg" data-zoom-image="assets/images/product_zoom_img1.jpg">
										<img src="<?php echo e(env('APP_URL') . '/storage/app/' .$sanpham->hinhanh); ?>" alt="product_small_img1" />
									</a>
								</div>
								<div class="item">
									<a href="#" class="product_gallery_item" data-image="assets/images/product_img1-2.jpg" data-zoom-image="assets/images/product_zoom_img2.jpg">
										<img src="<?php echo e(env('APP_URL') . '/storage/app/' .$sanpham->hinhanh); ?>" alt="product_small_img2" />
									</a>
								</div>
								<div class="item">
									<a href="#" class="product_gallery_item" data-image="assets/images/product_img1-3.jpg" data-zoom-image="assets/images/product_zoom_img3.jpg">
										<img src="<?php echo e(env('APP_URL') . '/storage/app/' .$sanpham->hinhanh); ?>" alt="product_small_img3" />
									</a>
								</div>
								<div class="item">
									<a href="#" class="product_gallery_item" data-image="assets/images/product_img1-4.jpg" data-zoom-image="assets/images/product_zoom_img4.jpg">
										<img src="<?php echo e(env('APP_URL') . '/storage/app/' .$sanpham->hinhanh); ?>" alt="product_small_img4" />
									</a>
								</div>
								<div class="item">
									<a href="#" class="product_gallery_item" data-image="assets/images/product_img1-2.jpg" data-zoom-image="assets/images/product_zoom_img2.jpg">
										<img src="<?php echo e(env('APP_URL') . '/storage/app/' .$sanpham->hinhanh); ?>" alt="product_small_img2" />
									</a>
								</div>
								<div class="item">
									<a href="#" class="product_gallery_item" data-image="assets/images/product_img1-3.jpg" data-zoom-image="assets/images/product_zoom_img3.jpg">
										<img src="<?php echo e(env('APP_URL') . '/storage/app/' .$sanpham->hinhanh); ?>" alt="product_small_img3" />
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="pr_detail">
							<div class="product_description">
								<h4 class="product_title"><a href="#"><?php echo e($sanpham->tensanpham); ?></a></h4>
								<div class="product_price">
									<span class="price"><?php echo e(number_format($sanpham->dongia )); ?><sup>đ</sup></span>
									<del><?php echo e(number_format($sanpham->dongia * 1.1)); ?><sup>đ</sup></del>
									<div class="on_sale">
										<span>10% Off</span>
									</div>
								</div>
								<div class="rating_wrap">
									<div class="rating">
										<div class="product_rate" style="width:80%"></div>
									</div>
									<span class="rating_num">(21)</span>
								</div>
								<div class="pr_desc">
									<p>Trong những tháng cuối năm 2020 Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bức phá.</p>
								</div>
								<div class="product_sort_info">
									<ul>
										<li><i class="linearicons-shield-check"></i> Bảo hành 1 năm</li>
										<li><i class="linearicons-sync"></i> 30 ngày đổi trả </li>
										<li><i class="linearicons-bag-dollar"></i>Thanh toán khi nhận hàng </li>
									</ul>
								</div>
								<div class="pr_switch_wrap">
									<span class="switch_lable">Màu</span>
									<div class="product_color_switch">
										<span class="active" data-color="#87554B"></span>
										<span data-color="#333333"></span>
										<span data-color="#DA323F"></span>
									</div>
								</div>
								<div class="pr_switch_wrap">
									<span class="switch_lable">Bộ nhớ trong</span>
									<div class="product_size_switch">
										<span>32</span>
										<span>64</span>
										<span>128</span>
										<span>256</span>
										<span>512</span>
									</div>
								</div>
							</div>
							<hr />
							<div class="cart_extra">
								<div class="cart-product-quantity">
									<div class="quantity">
										<input type="button" value="-" class="minus">
										<input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
										<input type="button" value="+" class="plus">
									</div>
								</div>
								<div class="cart_btn">
									<button class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i><a href="<?php echo e(route('frontend.giohang.them', ['tensanpham_slug' => $sanpham->tensanpham_slug])); ?>"> Add to cart</a></button>
									<a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
									<a class="add_wishlist" href="#"><i class="icon-heart"></i></a>
								</div>
							</div>
							<hr />
							<ul class="product-meta">
								<li>Hãng <a href="#">Apple</a></li>
								<li>Loại: <a href="#">Hàng cao cấp</a></li>
								<li>Tags: <a href="#" rel="tag">Iphone11</a>, <a href="#" rel="tag">Apple</a> </li>
							</ul>
							<div class="product_share">
								<span>Share:</span>
								<ul class="social_icons">
									<li><a href="#"><i class="ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
									<li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
									<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="large_divider clearfix"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="tab-style3">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Thông tin sản phẩm</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Thông số kỹ thuật</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="false">Đánh giá (2)</a>
								</li>
							</ul>
							<div class="tab-content shop_info_tab">
								<div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
									<?php echo $sanpham->motasanpham; ?>


								</div>
								<div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
									<table class="table table-bordered">
										<tr>
											<td>Màn hình:</td>
											<td> IPS LCD, 6.1", Liquid Retina</td>
										</tr>
										<tr>
											<td>Hệ điều hành:</td>
											<td> iOS 14</td>
										</tr>
										<tr>
											<td>Camera sau:</td>
											<td>2 camera 12 MP</td>
										</tr>
										<tr>
											<td>Camera trước:</td>
											<td> 12 MP</td>
										</tr>

										<tr>
											<td>CPU:</td>
											<td> Apple A13 Bionic 6 nhân</td>
										</tr>
										<tr>
											<td>RAM:</td>
											<td> 4 GB</td>
										</tr>
										<tr>
											<td>Camera sau:</td>
											<td>2 camera 12 MP</td>
										</tr>
										<tr>
											<td>Bộ nhớ trong:</td>
											<td> 256 GB</td>
										</tr>
										<tr>
											<td>Dung lượng pin:</td>
											<td>
												3110 mAh, có sạc nhanh</td>
										</tr>
									</table>
								</div>
								<div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
									<div class="comments">
										<h5 class="product_tab_title">Có 2 đánh giá cho sản phẩm <span><?php echo e($sanpham->tensanpham); ?></span></h5>
										<ul class="list_none comment_list mt-4">
											<li>
												<div class="comment_img">
													<img src="<?php echo e(env('APP_URL') . '/storage/app/user/LyThanhQui.JPG'); ?>" alt="user1" />
												</div>
												<div class="comment_block">
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:80%"></div>
														</div>
													</div>
													<p class="customer_meta">
														<span class="review_author">Lý Thanh Qui</span>
														<span class="comment-date">March 5, 2020</span>
													</p>
													<div class="description">
														<p>Sản phẩm trong tầm giá chơi game rất mượt, thời gian on screen hơn 6 tiếng</p>
													</div>
												</div>
											</li>
											<li>
												<div class="comment_img">
													<img src="<?php echo e(env('APP_URL') . '/storage/app/user/thai-thanh.jpg'); ?>" alt="user2" />
												</div>
												<div class="comment_block">
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:60%"></div>
														</div>
													</div>
													<p class="customer_meta">
														<span class="review_author">Lê Hồ Thái Thanh</span>
														<span class="comment-date">June 17, 2020</span>
													</p>
													<div class="description">
														<p>Máy có hiện tượng giật lag khi hoạt động liên tục nhiều giờ, chụp hình thiếu sáng không được đẹp.</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="review_form field_form">
										<h5>Đánh giá của bạn</h5>
										<form class="row mt-3">
											<div class="form-group col-12">
												<div class="star_rating">
													<span data-value="1"><i class="far fa-star"></i></span>
													<span data-value="2"><i class="far fa-star"></i></span>
													<span data-value="3"><i class="far fa-star"></i></span>
													<span data-value="4"><i class="far fa-star"></i></span>
													<span data-value="5"><i class="far fa-star"></i></span>
												</div>
											</div>
											<div class="form-group col-12">
												<textarea required="required" placeholder="Nhập đánh giá tại đây" class="form-control" name="message" rows="4"></textarea>
											</div>
											<div class="form-group col-md-6">
												<input required="required" placeholder="Họ và tên *" class="form-control" name="name" type="text">
											</div>
											<div class="form-group col-md-6">
												<input required="required" placeholder="Email *" class="form-control" name="email" type="email">
											</div>
											<div class="form-group col-12">
												<button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Bình luận</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="small_divider"></div>
						<div class="divider"></div>
						<div class="medium_divider"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="heading_s1">
							<h3>Sản phẩm liên quan</h3>
						</div>
						<div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
							<div class="item">
								<div class="product">
									<div class="product_img">
										<a href="#">
											<img src="<?php echo e(env('APP_URL') . '/storage/app/' .$sp1->hinhanh); ?>" alt="product_img1">
										</a>
										<div class="product_action_box">
											<ul class="list_none pr_action_btn">
												<li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
												<li><a href="<?php echo e(route('frontend.compare', ['id' => $sanpham->id,  'id1' => $sp1->id])); ?>"><i class="icon-shuffle"></i></a></li>
												<li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
												<li><a href="#"><i class="icon-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product_info">
										<h6 class="product_title"><a href="shop-product-detail.html"><?php echo e($sp1->tensanpham); ?></a></h6>
										<div class="product_price">
											<span class="price"><?php echo e(number_format($sp1->dongia * 1.1)); ?><sup>đ</sup></span>
											<del><?php echo e(number_format($sp1->dongia)); ?><sup>đ</sup></del>
											<div class="on_sale">
												<span>35% Off</span>
											</div>
										</div>
										<div class="rating_wrap">
											<div class="rating">
												<div class="product_rate" style="width:80%"></div>
											</div>
											<span class="rating_num">(21)</span>
										</div>
										<div class="pr_desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
										</div>
										<div class="pr_switch_wrap">
											<div class="product_color_switch">
												<span class="active" data-color="#87554B"></span>
												<span data-color="#333333"></span>
												<span data-color="#DA323F"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product">
									<div class="product_img">
										<a href="shop-product-detail.html">
											<img src="<?php echo e(env('APP_URL') . '/storage/app/' .$sp2->hinhanh); ?>" alt="product_img2">
										</a>
										<div class="product_action_box">
											<ul class="list_none pr_action_btn">
												<li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
												<li><a href="<?php echo e(route('frontend.compare', ['id' => $sanpham->id,  'id1' => $sp2->id])); ?>"><i class="icon-shuffle"></i></a></li>
												<li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
												<li><a href="#"><i class="icon-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product_info">
										<h6 class="product_title"><a href="shop-product-detail.html"><?php echo e($sp2->tensanpham); ?></a></h6>
										<div class="product_price">
											<span class="price"><?php echo e(number_format($sp2->dongia * 1.1)); ?><sup>đ</sup></span>
											<del><?php echo e(number_format($sp2->dongia)); ?><sup>đ</sup></del>
											<div class="on_sale">
												<span>25% Off</span>
											</div>
										</div>
										<div class="rating_wrap">
											<div class="rating">
												<div class="product_rate" style="width:68%"></div>
											</div>
											<span class="rating_num">(15)</span>
										</div>
										<div class="pr_desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
										</div>
										<div class="pr_switch_wrap">
											<div class="product_color_switch">
												<span class="active" data-color="#847764"></span>
												<span data-color="#0393B5"></span>
												<span data-color="#DA323F"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product">
									<span class="pr_flash">New</span>
									<div class="product_img">
										<a href="shop-product-detail.html">
											<img src="<?php echo e(env('APP_URL') . '/storage/app/' .$sp3->hinhanh); ?>" alt="product_img3">
										</a>
										<div class="product_action_box">
											<ul class="list_none pr_action_btn">
												<li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
												<li><a href="<?php echo e(route('frontend.compare', ['id' => $sanpham->id,  'id1' => $sp3->id])); ?>"><i class="icon-shuffle"></i></a></li>
												<li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
												<li><a href="#"><i class="icon-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product_info">
										<h6 class="product_title"><a href="shop-product-detail.html"><?php echo e($sp3->tensanpham); ?></a></h6>
										<div class="product_price">
											<span class="price"><?php echo e(number_format($sp3->dongia * 1.1)); ?><sup>đ</sup></span>
											<del><?php echo e(number_format($sp3->dongia)); ?><sup>đ</sup></del>
										</div>
										<div class="rating_wrap">
											<div class="rating">
												<div class="product_rate" style="width:87%"></div>
											</div>
											<span class="rating_num">(25)</span>
										</div>
										<div class="pr_desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
										</div>
										<div class="pr_switch_wrap">
											<div class="product_color_switch">
												<span class="active" data-color="#333333"></span>
												<span data-color="#7C502F"></span>
												<span data-color="#2F366C"></span>
												<span data-color="#874A3D"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product">
									<div class="product_img">
										<a href="shop-product-detail.html">
											<img src="<?php echo e(env('APP_URL') . '/storage/app/' .$sp4->hinhanh); ?>" alt="product_img4">
										</a>
										<div class="product_action_box">
											<ul class="list_none pr_action_btn">
												<li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
												<li><a href="<?php echo e(route('frontend.compare', ['id' => $sanpham->id,  'id1' => $sp4->id])); ?>"><i class="icon-shuffle"></i></a></li>
												<li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
												<li><a href="#"><i class="icon-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product_info">
										<h6 class="product_title"><a href="shop-product-detail.html"><?php echo e($sp4->tensanpham); ?></a></h6>
										<div class="product_price">
											<span class="price"><?php echo e(number_format($sp4->dongia * 1.1)); ?><sup>đ</sup></span>
											<del><?php echo e(number_format($sp4->dongia)); ?><sup>đ</sup></del>
											<div class="on_sale">
												<span>20% Off</span>
											</div>
										</div>
										<div class="rating_wrap">
											<div class="rating">
												<div class="product_rate" style="width:70%"></div>
											</div>
											<span class="rating_num">(22)</span>
										</div>
										<div class="pr_desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
										</div>
										<div class="pr_switch_wrap">
											<div class="product_color_switch">
												<span class="active" data-color="#333333"></span>
												<span data-color="#A92534"></span>
												<span data-color="#B9C2DF"></span>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\QTT_Mobile\resources\views/frontend/detail.blade.php ENDPATH**/ ?>