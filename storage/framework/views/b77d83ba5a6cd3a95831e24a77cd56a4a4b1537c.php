

<?php $__env->startSection('title', 'Giỏ hàng'); ?>

<?php $__env->startSection('content'); ?>
	<div class="breadcrumb_section bg_gray page-title-mini">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="page-title">
						<h1>Giỏ hàng</h1>
					</div>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb justify-content-md-end">
						<li class="breadcrumb-item"><a href="<?php echo e(route('frontend')); ?>">Trang chủ</a></li>
						<li class="breadcrumb-item active">Giỏ hàng</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	
	<div class="main_content">
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="table-responsive shop_cart_table">
							<table class="table">
								<thead>
									<tr>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Sản phẩm</th>
										<th class="product-price">Đơn giá</th>
										<th class="product-quantity">Số lượng</th>
										<th class="product-subtotal">Thành tiền</th>
										<th class="product-remove">Xóa</th>
									</tr>
								</thead>
								<tbody>
									<?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td class="product-thumbnail"><a href="#"><img src="<?php echo e(env('APP_URL') . '/storage/app/' . $value->options->image); ?>" alt="product1"></a></td>
											<td class="product-name" data-title="Product"><a href="#"><?php echo e($value->name); ?></a></td>
											<td class="product-price" data-title="Price"><?php echo e(number_format($value->price)); ?></td>
											<td class="product-quantity" data-title="Quantity">
												<div class="quantity">
													<a class="minus" href="<?php echo e(route('frontend.giohang.giam', ['row_id' => $value->rowId])); ?>">-</a>
													<input type="text" name="qty" value="<?php echo e($value->qty); ?>" class="qty" size="4" />
													<a class="plus" href="<?php echo e(route('frontend.giohang.tang', ['row_id' => $value->rowId])); ?>">+</a>
												</div>
											</td>
											<td class="product-subtotal" data-title="Total"><?php echo e(number_format($value->price * $value->qty)); ?></td>
											<td class="product-remove" data-title="Remove"><a href="<?php echo e(route('frontend.giohang.xoa', ['row_id' => $value->rowId])); ?>"><i class="ti-close"></i></a></td>
										</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="6" class="px-0">
											<div class="row no-gutters align-items-center">
												<div class="col-lg-4 col-md-6 mb-3 mb-md-0">
													<div class="coupon field_form input-group">
														<input type="text" value="" class="form-control form-control-sm" placeholder="Mã giảm giá?" />
														<div class="input-group-append">
															<button class="btn btn-fill-out btn-sm" type="submit">ÁP DỤNG</button>
														</div>
													</div>
												</div>
												<div class="col-lg-8 col-md-6 text-left text-md-right">
													<a href="<?php echo e(route('frontend.giohang.xoatatca')); ?>" class="btn btn-line-fill btn-sm" type="submit">XÓA GIỎ HÀNG</a>
												</div>
											</div>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="medium_divider"></div>
						<div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
						<div class="medium_divider"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="border p-3 p-md-4">
							<div class="heading_s1 mb-3">
								<h6>Tổng tiền giỏ hàng</h6>
							</div>
							<div class="table-responsive">
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td class="cart_total_label">Tổng tiền sản phẩm</td>
											<td class="cart_total_amount"><?php echo e(Cart::subtotal()); ?><sup>đ</sup></td>
										</tr>
										<tr>
											<td class="cart_total_label">Thuế VAT (10%)</td>
											<td class="cart_total_amount"><?php echo e(Cart::tax()); ?><sup>đ</sup></td>
										</tr>
										<tr>
											<td class="cart_total_label">Phí vận chuyển</td>
											<td class="cart_total_amount">Miễn phí vận chuyển</td>
										</tr>
										<tr>
											<td class="cart_total_label">Tổng thanh toán</td>
											<td class="cart_total_amount"><strong><?php echo e(Cart::total()); ?><sup>đ</sup></strong></td>
										</tr>
									</tbody>
								</table>
							</div>
							<a href="<?php echo e(route('frontend.dathang')); ?>" class="btn btn-fill-out">TIẾN HÀNH THANH TOÁN</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Z:\wamp\www\larashop\resources\views/frontend/giohang.blade.php ENDPATH**/ ?>