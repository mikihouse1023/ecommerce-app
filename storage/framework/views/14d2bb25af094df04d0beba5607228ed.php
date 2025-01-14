<?php $__env->startSection('content'); ?>   
  <section class="section-5">
    <h1 class="heading-21">ADMIN画面</h1>
    <div class="div-block-8">
            <a href="adminlogin" class="button-9 w-button" style="margin-right:50px;">ログアウト</a>
    </div>
  </section>
  <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
    <div class="w-tab-menu">
      <a data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link w--current">
        <div>商品管理</div>
      </a>
      <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link">
        <div>売上管理</div>
      </a>
      <a data-w-tab="Tab 3" class="tab-link-tab-3 w-inline-block w-tab-link">
        <div>ユーザー管理</div>
      </a>
    </div>
    <div class="w-tab-content">
      <div data-w-tab="Tab 1" class="w-tab-pane">
        <div class="w-layout-blockcontainer w-container">
          <div class="w-layout-blockcontainer w-container">
            <h1>■商品管理</h1>
          </div>
          <div class="div-block-8">
            <a href="adminitemedit" class="button-9 w-button">新規追加</a>
          </div>
        </div>
        <section>
          <?php if (isset($component)) { $__componentOriginal14ce179d8be37bc6b18b432b2e0e520e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14ce179d8be37bc6b18b432b2e0e520e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.itemlist_admin','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('itemlist_admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14ce179d8be37bc6b18b432b2e0e520e)): ?>
<?php $attributes = $__attributesOriginal14ce179d8be37bc6b18b432b2e0e520e; ?>
<?php unset($__attributesOriginal14ce179d8be37bc6b18b432b2e0e520e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14ce179d8be37bc6b18b432b2e0e520e)): ?>
<?php $component = $__componentOriginal14ce179d8be37bc6b18b432b2e0e520e; ?>
<?php unset($__componentOriginal14ce179d8be37bc6b18b432b2e0e520e); ?>
<?php endif; ?>
        </section>
      </div>
      <div data-w-tab="Tab 2" class="w-tab-pane">
        <div class="w-layout-blockcontainer w-container">
          <div class="w-layout-blockcontainer w-container">
            <h1>■売上管理</h1>
          </div>
        </div>
        <section>
          <?php if (isset($component)) { $__componentOriginalf20bf570991ad6bec8d369c6e397674f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf20bf570991ad6bec8d369c6e397674f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.saleslist_admin','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('saleslist_admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf20bf570991ad6bec8d369c6e397674f)): ?>
<?php $attributes = $__attributesOriginalf20bf570991ad6bec8d369c6e397674f; ?>
<?php unset($__attributesOriginalf20bf570991ad6bec8d369c6e397674f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf20bf570991ad6bec8d369c6e397674f)): ?>
<?php $component = $__componentOriginalf20bf570991ad6bec8d369c6e397674f; ?>
<?php unset($__componentOriginalf20bf570991ad6bec8d369c6e397674f); ?>
<?php endif; ?>
        </section>
      </div>
      <div data-w-tab="Tab 3" class="w-tab-pane w--tab-active">
        <div class="w-layout-blockcontainer w-container">
          <div class="w-layout-blockcontainer w-container">
            <h1>■ユーザー管理</h1>
          </div>
          <div class="div-block-8">
            <a href="adminuseredit" class="button-9 w-button">新規追加</a>
          </div>
        </div>
        <section>
          <?php if (isset($component)) { $__componentOriginal8409614fdce1ad3245ad0a7a10fc1abd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8409614fdce1ad3245ad0a7a10fc1abd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.userlist_admin','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('userlist_admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8409614fdce1ad3245ad0a7a10fc1abd)): ?>
<?php $attributes = $__attributesOriginal8409614fdce1ad3245ad0a7a10fc1abd; ?>
<?php unset($__attributesOriginal8409614fdce1ad3245ad0a7a10fc1abd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8409614fdce1ad3245ad0a7a10fc1abd)): ?>
<?php $component = $__componentOriginal8409614fdce1ad3245ad0a7a10fc1abd; ?>
<?php unset($__componentOriginal8409614fdce1ad3245ad0a7a10fc1abd); ?>
<?php endif; ?>
        </section>
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\7_PHP応用\ecommerce-app\resources\views/admin.blade.php ENDPATH**/ ?>