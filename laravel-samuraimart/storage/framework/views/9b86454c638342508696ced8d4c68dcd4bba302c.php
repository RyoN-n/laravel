
 
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-9">
        <div class="container mt-4">
            <div class="row w-100">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-3">
                    <a href="<?php echo e(route('products.show', $product)); ?>">
                        <img src="<?php echo e(asset('img/dummy.png')); ?>" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="samuraimart-product-label mt-2">
                                <?php echo e($product->name); ?><br>
                                <label>￥<?php echo e($product->price); ?></label>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-samuraimart\resources\views/products/index.blade.php ENDPATH**/ ?>