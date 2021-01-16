
<?php $__env->startSection('content'); ?>
<div class="compare_box">
	<div class="table-responsive">
		<table class="table table-bordered text-center">
			<tbody>
				<tr class="pr_image">
					<th class="row_title " width="15%"></th>
					<td class="row_img"><img src="<?php echo e(env('APP_URL') . '/storage/app/' .$sp1->hinhanh); ?>" alt="compare-img"></td>
					<td class="row_img"><img src="<?php echo e(env('APP_URL') . '/storage/app/' .$sp2->hinhanh); ?>"></td>

				</tr>
				<tr class="pr_title">
					<td class="row_title">Tên sản phẩm</td>
					<td class="product_name"><a href="shop-product-detail.html"><?php echo e($sp1->tensanpham); ?></a></td>
					<td class="product_name"><a href="shop-product-detail.html"><?php echo e($sp2->tensanpham); ?></a></td>

				</tr>

				<tr class="pr_rating">
					<td class="row_title">Đơn giá</td>
					<td>
						<div class="rating_wrap">

							<span class="rating_num"><?php echo e(number_format($sp1->dongia * 1.1)); ?><sup>đ</sup></span>
						</div>
					</td>
					<td>
						<div class="rating_wrap">

							<span class="rating_num"><?php echo e(number_format($sp2->dongia * 1.1)); ?><sup>đ</sup></span>
						</div>
					</td>

				</tr>
				<tr class="pr_add_to_cart">
					<td></td>
					<td class="row_btn"><a href="#" class="btn btn-fill-out"><i class="icon-basket-loaded"></i> Add To Cart</a></td>
					<td class="row_btn"><a href="#" class="btn btn-fill-out"><i class="icon-basket-loaded"></i> Add To Cart</a></td>

				</tr>

				<tr class="pr_color">
					<td class="row_title">Color</td>
					<td class="row_color">
						<div class="product_color_switch">
							<span data-color="#87554B"></span>
							<span data-color="#333333"></span>
							<span data-color="#DA323F"></span>
						</div>
					</td>

					<td class="row_color">
						<div class="product_color_switch">
							<span data-color="#333333"></span>
							<span data-color="#7C502F"></span>
							<span data-color="#2F366C"></span>
							<span data-color="#874A3D"></span>
						</div>
					</td>
				</tr>
				<tr class="pr_size">
					<td class="row_title">Bộ nhớ trong</td>
					<td class="row_size"><span>16G, 32G, 64G</span></td>
					<td class="row_size"><span>32G, 64G, 128G</span></td>

				</tr>
				<tr class="pr_stock">
					<td class="row_title">Dung lượng pin</td>
					<td class="row_stock"><span class="in-stock">3110 mAh, có sạc nhanh</span></td>
					<td class="row_stock"><span class="out-stock">3110 mAh, có sạc nhanh</span></td>

				</tr>
				<tr class="pr_weight">
					<td class="row_title">Màn hình</td>
					<td class="row_weight">IPS LCD, 6.1", Liquid Retina</td>
					<td class="row_weight">IPS LCD, 6.1", Liquid Retina</td>

				</tr>
				<tr class="pr_dimensions">
					<td class="row_title">Thời điểm ra mắt</td>
					<td class="row_dimensions">1/2021</td>
					<td class="row_dimensions">11/2020</td>

				</tr>
				<tr class="pr_remove">
					<td class="row_title"></td>
					<td class="row_remove">
						<a href="#"><span>Remove</span> <i class="fa fa-times"></i></a>
					</td>
					<td class="row_remove">
						<a href="#"><span>Remove</span> <i class="fa fa-times"></i></a>
					</td>

				</tr>
			</tbody>
		</table>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\QTT_Mobile\resources\views/frontend/compare_sanpham.blade.php ENDPATH**/ ?>