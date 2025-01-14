<!DOCTYPE html>
<html data-wf-page="65d2c335101edf5ff7bbf990" data-wf-site="65d2c335101edf5ff7bbf98a">

<head>
  <meta charset="utf-8">
  <title>educure_eCommerce</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">

  <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/webflow.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/educure-ecommerce.webflow.css')); ?>">
  <script type="text/javascript">
    ! function(o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
  </script>
</head>

<body class="body">
  <!-- ヘッダー画面のコンポーネント -->
  <?php if (isset($component)) { $__componentOriginal910735ad30aa07115d379e0b51edfeed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal910735ad30aa07115d379e0b51edfeed = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header_menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header_menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal910735ad30aa07115d379e0b51edfeed)): ?>
<?php $attributes = $__attributesOriginal910735ad30aa07115d379e0b51edfeed; ?>
<?php unset($__attributesOriginal910735ad30aa07115d379e0b51edfeed); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal910735ad30aa07115d379e0b51edfeed)): ?>
<?php $component = $__componentOriginal910735ad30aa07115d379e0b51edfeed; ?>
<?php unset($__componentOriginal910735ad30aa07115d379e0b51edfeed); ?>
<?php endif; ?>

  <!-- 要求された子ビューを挿入する -->
  <?php echo $__env->yieldContent('content'); ?>

  <!-- ヘッダー画面のコンポーネント -->
  <?php if (isset($component)) { $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa = $attributes; } ?>
<?php $component = App\View\Components\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa)): ?>
<?php $attributes = $__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa; ?>
<?php unset($__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa)): ?>
<?php $component = $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa; ?>
<?php unset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa); ?>
<?php endif; ?>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65d2c335101edf5ff7bbf98a" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>

</html><?php /**PATH C:\7_PHP応用\ecommerce-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>