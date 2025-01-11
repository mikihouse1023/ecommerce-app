<!--layoutsフォルダのapp.blade.phpを継承しており、基本的なレイアウトがこのテンプレートの土台となる-->

<!--layouts.appで指定された場所にこのコンテンツが挿入される-->
<?php $__env->startSection('content'); ?>
<h1 class="heading">Welcome to Educure apparel shop</h1>

<div class="w-layout-blockcontainer w-container">
  <h1 class="heading-5">■新規商品</h1>
</div>
<div class="w-layout-blockcontainer container-3 w-container">
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="w-layout-blockcontainer container-9 w-container">

<?php if (isset($component)) { $__componentOriginal407a95362fd17e9c1672c1e00557dac2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal407a95362fd17e9c1672c1e00557dac2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.item_component','data' => ['title' => ''.e($product->name).'','product' => $product]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('item_component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e($product->name).'','product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal407a95362fd17e9c1672c1e00557dac2)): ?>
<?php $attributes = $__attributesOriginal407a95362fd17e9c1672c1e00557dac2; ?>
<?php unset($__attributesOriginal407a95362fd17e9c1672c1e00557dac2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal407a95362fd17e9c1672c1e00557dac2)): ?>
<?php $component = $__componentOriginal407a95362fd17e9c1672c1e00557dac2; ?>
<?php unset($__componentOriginal407a95362fd17e9c1672c1e00557dac2); ?>
<?php endif; ?>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="w-layout-blockcontainer w-container">
  <a href="itemlist" class="link">&lt;他の商品を見る</a>
</div>
</section>
<section class="section-4">
  <div class="w-layout-blockcontainer container-4 w-container">
    <h1 class="heading-6">■ジャンル</h1>
  </div>
  <div class="w-layout-blockcontainer container-3 w-container">
    <div class="w-layout-blockcontainer container1 w-container">
      <div class="div-block">
        <img src="images/t-shirt.png" class="image-2">
        <a href="itemlist" class="link-2">Tシャツ</a>
      </div>
    </div>
    <div class="w-layout-blockcontainer container1 w-container">
      <div class="div-block">
        <img src="images/y-shirt.png" class="image-2">
        <a href="itemlist" class="link-2">Yシャツ</a>
      </div>
    </div>
    <div class="w-layout-blockcontainer container1 w-container">
      <div class="div-block">
        <img src="images/sweater.png" class="image-2">
        <a href="itemlist" class="link-2">セーター</a>
      </div>
    </div>
  </div>
  <div class="w-layout-blockcontainer container-3 w-container">
    <div class="w-layout-blockcontainer container1 w-container">
      <div class="div-block">
        <img src="images/long.png" class="image-2">
        <a href="itemlist" class="link-2">ロング</a>
      </div>
    </div>
    <div class="w-layout-blockcontainer container1 w-container">
      <div class="div-block">
        <img src="images/coat.png" class="image-2">
        <a href="itemlist" class="link-2">コート</a>
      </div>
    </div>
    <div class="w-layout-blockcontainer container1 w-container">
      <div class="div-block">
        <img src="images/jacket.png" class="image-2">
        <a href="itemlist" class="link-2">ジャケット</a>
      </div>
    </div>
  </div>
  <div class="w-layout-blockcontainer container-3 w-container">
    <div class="w-layout-blockcontainer container1 w-container">
      <div class="div-block">
        <img src="images/pants.png" class="image-2">
        <a href="itemlist" class="link-2">パンツ</a>
      </div>
    </div>
    <div class="w-layout-blockcontainer container1 w-container">
      <div class="div-block">
        <img src="images/shoes.png" class="image-2">
        <a href="itemlist" class="link-2">シューズ</a>
      </div>
    </div>
    <div class="w-layout-blockcontainer container1 w-container">
      <div class="div-block">
        <img src="images/accessory.png" class="image-2">
        <a href="itemlist" class="link-2">アクセサリー</a>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\7_PHP応用\ecommerce-app\resources\views/index.blade.php ENDPATH**/ ?>