<?php $__env->startSection('title', 'Thanh toán tiền cọc'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4 text-center">Vui lòng thanh toán tiền cọc để hoàn thành đặt bàn!</h2>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?php echo e(route('client.reservations.complete')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="amount" class="form-label">Số tiền</label>
                                <input type="text" class="form-control" id="amount" name="amount"
                                    value="<?php echo e(isset($reservation['deposit']) ? number_format($reservation['deposit']) : '0'); ?> VND"
                                    readonly>
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Phương thức thanh toán</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method"
                                        id="payment_method1" value="credit_card" checked>
                                    <label class="form-check-label" for="payment_method1">
                                        <i class="bi bi-credit-card"></i> Thẻ tín dụng
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method"
                                        id="payment_method2" value="paypal">
                                    <label class="form-check-label" for="payment_method2">
                                        <i class="bi bi-paypal"></i> PayPal
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method"
                                        id="payment_method3" value="bank_transfer">
                                    <label class="form-check-label" for="payment_method3">
                                        <i class="bi bi-bank"></i> Chuyển khoản ngân hàng
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2">Thanh toán</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT Polytechnic\Php3\QuanLyNhaHang\hoclaravel\resources\views/client/pages/checkOut.blade.php ENDPATH**/ ?>