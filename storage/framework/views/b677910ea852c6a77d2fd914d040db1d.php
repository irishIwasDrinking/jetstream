

<?php $__currentLoopData = $items['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div><h1><?php echo e($item['title']); ?></h1></div></br>
    <div><?php echo $item['description']; ?></div>
    <div><img src="<?php echo e($item['images']['0']['imageUrl']); ?>" ></div></br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php /**PATH /Users/irishiwasdrinking/PhpstormProjects/laravel_jet/resources/views/store.blade.php ENDPATH**/ ?>