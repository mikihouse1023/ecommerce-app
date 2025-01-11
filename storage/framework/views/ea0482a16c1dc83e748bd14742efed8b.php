<div class="w-layout-blockcontainer w-container">
  <!--$titleにはコンポーネントクラスから受け取った値がレンダリングされる-->
  <h1 class="heading-5">■<?php echo e($title); ?></h1>
</div>
<div class="w-layout-blockcontainer container-3 w-container">
  <div class="w-layout-blockcontainer container-9 w-container">
    <img src="<?php echo e(asset($product->picture)); ?>" sizes="(max-width: 767px) 37vw, 200px" class="image">
    <div class="w-layout-vflex">
      <a href="item">
        <h2 class="heading-2"><?php echo e($product->name); ?><br></h2>
      </a>
      <h2 class="heading-2">￥<?php echo e(number_format($product->val)); ?>(税込み)</h2>
    </div>
  </div>
</div><?php /**PATH C:\7_PHP応用\ecommerce-app\resources\views/components/item_component.blade.php ENDPATH**/ ?>