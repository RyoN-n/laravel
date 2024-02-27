+<div>
+    <h2> Show Product</h2>
+</div>
+<div>
+    <a href="<?php echo e(route('products.index')); ?>"> Back</a>
+</div>
+
+<div>
+    <strong>Name:</strong>
+    <?php echo e($product->name); ?>

+</div>
+
+<div>
+    <strong>Description:</strong>
+    <?php echo e($product->description); ?>

+</div>
+
+<div>
+    <strong>Price:</strong>
+    <?php echo e($product->price); ?> 
+</div>
<?php /**PATH C:\xampp\htdocs\laravel-samuraimart\resources\views/products/show.blade.php ENDPATH**/ ?>