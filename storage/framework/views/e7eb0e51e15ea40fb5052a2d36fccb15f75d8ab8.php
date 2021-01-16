<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header">Chỉnh sửa đơn hàng</div>
		<div class="card-body">
			<form action="<?php echo e(route('donhang.sua', ['id' => $donhang->id])); ?>" method="post">
				<?php echo csrf_field(); ?>
				
				<div class="mb-3">
					<label class="form-label" for="user_id">Khách hàng</label>
					<input type="text" class="form-control" id="user" name="user_id" value="<?php echo e($donhang->NguoiDung->name); ?>" disabled required />
				</div>
				
				<div class="mb-3">
					<label class="form-label" for="dienthoai">Điện thoại giao hàng</label>
					<input type="text" class="form-control <?php $__errorArgs = ['dienthoai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="dienthoai" name="dienthoai" value="<?php echo e($donhang->dienthoaigiaohang); ?>" required />
					<?php $__errorArgs = ['dienthoai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="invalid-feedback"><strong><?php echo e($message); ?></strong></div>
					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				
				<div class="mb-3">
					<label class="form-label" for="diachi">Địa chỉ giao hàng</label>
					<input type="text" class="form-control <?php $__errorArgs = ['diachi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="diachi" name="diachi" value="<?php echo e($donhang->diachigiaohang); ?>" required />
					<?php $__errorArgs = ['diachi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="invalid-feedback"><strong><?php echo e($message); ?></strong></div>
					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				
				<div class="mb-3">
					<label class="form-label" for="tinhtrang">Tình trạng đơn hàng</label>
					<select class="form-select <?php $__errorArgs = ['tinhtrang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tinhtrang" name="tinhtrang" required>
						<option value="">-- Chọn --</option>
						<option value="0" <?php echo e(($donhang->tinhtrang == 0) ? 'selected' : ''); ?>>Mới</option>
						<option value="1" <?php echo e(($donhang->tinhtrang == 1) ? 'selected' : ''); ?>>Đang xác nhận</option>
						<option value="2" <?php echo e(($donhang->tinhtrang == 2) ? 'selected' : ''); ?>>Đã hủy</option>
						<option value="3" <?php echo e(($donhang->tinhtrang == 3) ? 'selected' : ''); ?>>Đang đóng gói</option>
						<option value="4" <?php echo e(($donhang->tinhtrang == 4) ? 'selected' : ''); ?>>Đang đi nhận</option>
						<option value="5" <?php echo e(($donhang->tinhtrang == 5) ? 'selected' : ''); ?>>Đang chuyển</option>
						<option value="6" <?php echo e(($donhang->tinhtrang == 6) ? 'selected' : ''); ?>>Thất bại</option>
						<option value="7" <?php echo e(($donhang->tinhtrang == 7) ? 'selected' : ''); ?>>Đang chuyển hoàn</option>
						<option value="8" <?php echo e(($donhang->tinhtrang == 8) ? 'selected' : ''); ?>>Đã chuyển hoàn</option>
						<option value="9" <?php echo e(($donhang->tinhtrang == 9) ? 'selected' : ''); ?>>Thành công</option>
					</select>
					<?php $__errorArgs = ['tinhtrang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="invalid-feedback"><strong><?php echo e($message); ?></strong></div>
					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Cập nhật</button>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Z:\wamp\www\larashop\resources\views/donhang/sua.blade.php ENDPATH**/ ?>