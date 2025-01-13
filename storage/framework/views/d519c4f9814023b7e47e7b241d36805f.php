<?php $__env->startSection('content'); ?>
<div class="w-layout-blockcontainer container-25 w-container">
      <div class="w-layout-blockcontainer w-container">
            <h1 class="heading-16">■カート内容</h1>
      </div>
      <ul role="list" class="w-list-unstyled">
            <?php $__currentLoopData = session('cart', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-item">
                  <div>
                        <img src="<?php echo e(asset($item['picture'])); ?>" alt="<?php echo e($item['name']); ?>">
                        <p><?php echo e($item['name']); ?> - <?php echo e($item['size']); ?></p>
                        <p>￥<?php echo e(number_format($item['price'])); ?> (税込み)</p>
                  </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
</div>
<div class="w-layout-blockcontainer container-27 w-container">
      <a href="/" class="button-4 w-button">戻る</a>
      <a href="payment" class="button-3 w-button">決済に進む</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\7_PHP応用\ecommerce-app\resources\views/cart.blade.php ENDPATH**/ ?>