<?php $__env->startSection('content'); ?>
<!--
<div id="w-node-_70fc2f60-eebe-06fa-5f10-7db86abd4630-862eed34" class="w-layout-layout wf-layout-layout container-item">
    <div id="w-node-f77c6ce3-7280-b5af-e927-fd62fe027efb-862eed34" class="w-layout-cell">
      <img src="images/jacket.png" loading="lazy" sizes="100vw" class="image-3">
    </div>
    <div id="w-node-_0effb395-4563-c85e-c5da-528ac83e50ce-862eed34" class="w-layout-cell">
      <div class="w-layout-vflex flex-block">
        <h1 class="heading-13">fffffffffffffffffffffffffffffffffffffff</h1>
        <div class="text-block">￥XXXXXXXXXXXXXXXXX (税込み)</div>
        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      </div>
    </div>-->
    <div id="w-node-_70fc2f60-eebe-06fa-5f10-7db86abd4630-862eed34" class="w-layout-layout wf-layout-layout container-item">
    <div id="w-node-f77c6ce3-7280-b5af-e927-fd62fe027efb-862eed34" class="w-layout-cell">
        <img src="<?php echo e(asset($product->picture)); ?>" alt="<?php echo e($product->name); ?>" class="image-3" loading="lazy" sizes="100vw">
    </div>
    <div id="w-node-_0effb395-4563-c85e-c5da-528ac83e50ce-862eed34" class="w-layout-cell">
        <div class="w-layout-vflex flex-block">
            <h1 class="heading-13"><?php echo e($product->name); ?></h1>
            <div class="text-block">￥<?php echo e(number_format($product->val)); ?> (税込み)</div>
            <p class="paragraph"><?php echo e($product->explanation); ?></p>
        </div>
    </div>
    <div id="w-node-_661bc7f5-d78e-ac14-d24f-cf1bde5ce7da-862eed34" class="w-layout-cell">
      <h1 class="heading-12">■サイズ選択</h1>
      <form action="<?php echo e(route('cart.add')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
    <div class="w-layout-hflex">
        <h1 class="heading-11">S</h1>
        <button type="submit" name="size" value="S" class="button w-button">カートに追加する</button>
    </div>
    <div class="w-layout-hflex">
        <h1 class="heading-10">M</h1>
        <button type="submit" name="size" value="M" class="button w-button">カートに追加する</button>
    </div>
    <div class="w-layout-hflex">
        <h1 class="heading-9">L</h1>
        <button type="submit" name="size" value="L" class="button w-button">カートに追加する</button>
    </div>
    <div class="w-layout-hflex">
        <h1 class="heading-14">XL</h1>
        <button type="submit" name="size" value="XL" class="button w-button">カートに追加する</button>
    </div>
</form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\7_PHP応用\ecommerce-app\resources\views/item.blade.php ENDPATH**/ ?>