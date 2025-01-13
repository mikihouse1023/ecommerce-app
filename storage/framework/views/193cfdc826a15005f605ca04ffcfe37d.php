<?php $__env->startSection('content'); ?>
<div class="w-layout-blockcontainer container-22 w-container">
  <div class="w-form">
    <form id="email-form" name="email-form" data-name="Email Form" method="get" action="<?php echo e(route('itemlist')); ?>" class="form" data-wf-page-id="65de85138eaba875c01e5763" data-wf-element-id="8f53273e-d595-33a3-00d4-0c07fb6242f2"><label for="field">ジャンル</label>
      <div class="w-layout-hflex">
        <select id="field" name="field" class="w-select">
          <option value="Tシャツ" <?php echo e(request('field') == 'Tシャツ' ? 'selected' : ''); ?>>Tシャツ</option>
          <option value="Yシャツ" <?php echo e(request('field') == 'Yシャツ' ? 'selected' : ''); ?>>Yシャツ</option>
          <option value="セーター" <?php echo e(request('field') == 'セーター' ? 'selected' : ''); ?>>セーター</option>
          <option value="ロング" <?php echo e(request('field') == 'ロング' ? 'selected' : ''); ?>>ロング</option>
          <option value="コート" <?php echo e(request('field') == 'コート' ? 'selected' : ''); ?>>コート</option>
          <option value="ジャケット" <?php echo e(request('field') == 'ジャケット' ? 'selected' : ''); ?>>ジャケット</option>
          <option value="パンツ" <?php echo e(request('field') == 'パンツ' ? 'selected' : ''); ?>>パンツ</option>
          <option value="シューズ" <?php echo e(request('field') == 'シューズ' ? 'selected' : ''); ?>>シューズ</option>
          <option value="アクセサリー" <?php echo e(request('field') == 'アクセサリー' ? 'selected' : ''); ?>>アクセサリー</option>
        </select>
        <input type="submit" data-wait="Please wait..." class="submit-button w-button" value="検索">
      </div>
    </form>
  </div>
</div>
<div class="w-layout-blockcontainer container-22 w-container" style=display:flex;justify-content:center;>
<button class="settlement" onclick="location.href='<?php echo e(route('cart.view')); ?>'">決済に進む</button>
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
<div class="w-layout-blockcontainer container-3 w-container paginate">
  <div class="w-layout-hflex flex-block-2">
    <a href="#" class="link-4">&lt;</a>
    <a href="#" class="link-5">1</a>
    <a href="#" class="link-6">2</a>
    <a href="#" class="link-7">3</a>
    <div class="text-block-2">....</div>
    <a href="#" class="link-8">8</a>
    <a href="#" class="link-9">&gt;</a>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\7_PHP応用\ecommerce-app\resources\views/itemlist.blade.php ENDPATH**/ ?>