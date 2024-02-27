+<div>
+    <h2>Edit Product</h2>
+</div>
+<div>
+    <a href="<?php echo e(route('products.index')); ?>"> Back</a>
+</div>
+
+<form action="<?php echo e(route('products.update',$product->id)); ?>" method="POST">
+    <?php echo csrf_field(); ?>
+    <?php echo method_field('PUT'); ?>
+
+    <div>
+        <strong>Name:</strong>
+        <input type="text" name="name" value="<?php echo e($product->name); ?>" placeholder="Name">
+    </div>
+    <div>
+        <strong>Description:</strong>
+        <textarea style="height:150px" name="description" placeholder="description"><?php echo e($product->description); ?></textarea>
+    </div>
+    <div>
+        <strong>Price:</strong>
+        <input type="number" name="price"  value="<?php echo e($product->price); ?>">
+    </div>
     <div>
         <strong>Category:</strong>
         <select name="category_id">
         <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php if($category->id == $product->category_id): ?>
                 <option value="<?php echo e($category->id); ?>" selected><?php echo e($category->name); ?></option>
             <?php else: ?>
                 <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
             <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>
     </div>
+    <div>
+        <button type="submit">Submit</button>
+    </div>
+
+</form>
<?php /**PATH C:\xampp\htdocs\laravel-samuraimart\resources\views/products/edit.blade.php ENDPATH**/ ?>