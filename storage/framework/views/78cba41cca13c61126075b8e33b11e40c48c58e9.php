<div class="ajax_quick_view">
	<div class="row">
		<div class="col-lg-6 col-md-6 mb-4 mb-md-0">
			<div class="product-image">
				<div class="product_img_box">
					<img id="product_img" src="<?php echo e(env('APP_URL') . '/storage/app/' .$sanpham->hinhanh); ?>" data-zoom-image="assets/images/product_zoom_img1.jpg" alt="product_img1" />
				</div>

			</div>
		</div>
		<div class="col-lg-6 col-md-6">
			<div class="pr_detail">
				<div class="product_description">
					<h4 class="product_title"><a href="#"><?php echo e($sanpham->tensanpham); ?></a></h4>
					<div class="product_price">
						<span class="price"><?php echo e(number_format($sanpham->dongia * 1.1)); ?><sup>đ</sup></span>
						<del><?php echo e(number_format($sanpham->dongia)); ?><sup>đ</sup></del>
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
						<button class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i> Add to cart</button>
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
</div>
<script src="assets/js/scripts.js"></script><?php /**PATH C:\wamp64\www\QTT_Mobile\resources\views/frontend/quick_view_sanpham.blade.php ENDPATH**/ ?>