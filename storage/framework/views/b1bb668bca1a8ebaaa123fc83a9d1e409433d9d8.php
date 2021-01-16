<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Đặt hàng thành công - <?php echo e(config('app.name', 'Laravel')); ?></title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		p {
			margin-top: 3px;
			margin-bottom: 3px;
		}
	</style>
</head>

<body>
	<p>Xin chào <?php echo e(Auth::user()->name); ?>!</p>
	<p>Xin cảm ơn bạn đã đặt hàng tại <?php echo e(config('app.name', 'Laravel')); ?>.</p>
	<p>Thông tin giao hàng:</p>
	<p>- Điện thoại: <strong><?php echo e($donhang->dienthoaigiaohang); ?></strong></p>
	<p>- Địa chỉ giao: <strong><?php echo e($donhang->diachigiaohang); ?></strong></p>
	
	<p>Thông tin đơn hàng bao gồm:</p>
	<table border="1">
		<thead>
			<tr>
				<th width="5%">#</th>
				<th>Sản phẩm</th>
				<th width="5%">SL</th>
				<th width="15%">Đơn giá</th>
				<th width="20%">Thành tiền</th>
			</tr>
		</thead>
		<tbody>
			<?php $tongtien = 0; ?>
			<?php $__currentLoopData = $donhang->DonHang_ChiTiet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chitiet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($loop->iteration); ?></td>
					<td><?php echo e($chitiet->SanPham->tensanpham); ?></td>
					<td><?php echo e($chitiet->soluongban); ?></td>
					<td style="text-align:right">
						<?php echo e(number_format($chitiet->dongiaban)); ?><sup><u>đ</u></sup>
					</td>
					<td style="text-align:right">
						<?php echo e(number_format($chitiet->soluongban * $chitiet->dongiaban)); ?><sup><u>đ</u></sup>
					</td>
				</tr>
				<?php $tongtien += $chitiet->soluongban * $chitiet->dongiaban; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td colspan="4">Tổng tiền sản phẩm:</td>
				<td style="text-align:right">
					<strong><?php echo e(number_format($tongtien)); ?></strong><sup><u>đ</u></sup>
				</td>
			</tr>
		</tbody>
	</table>
	
	<p>Trân trọng,</p>
	<p><?php echo e(config('app.name', 'Laravel')); ?></p>
</body>

</html><?php /**PATH C:\wamp64\www\QTT_Mobile\resources\views/emails/dathang.blade.php ENDPATH**/ ?>