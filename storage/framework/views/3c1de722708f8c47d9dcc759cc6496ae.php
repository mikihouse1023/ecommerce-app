
<?php $__env->startSection('content'); ?>

  <div class="w-layout-blockcontainer w-container">
    <h1>■登録情報確認</h1>
    <div class="w-layout-blockcontainer w-container">
      <h2 class="heading-22">●ユーザー名</h2>
      <div class="text-block-9"><?php echo e($data['name']); ?></div>
    </div>
    <div class="w-layout-blockcontainer w-container">
      <h2 class="heading-22">●メールアドレス</h2>
      <div class="text-block-9"><?php echo e($data['email']); ?></div>
    </div>
    <div class="w-layout-blockcontainer w-container">
      <h2 class="heading-22">●電話番号</h2>
      <div class="text-block-9"><?php echo e($data['tel']); ?></div>
    </div>
    <div class="w-layout-blockcontainer w-container">
      <h2 class="heading-22">●郵便番号</h2>
      <div class="text-block-9"><?php echo e($data['post']); ?></div>
    </div>
    <div class="w-layout-blockcontainer w-container">
      <h2 class="heading-22">●住所</h2>
      <div class="text-block-9"><?php echo e($data['address']); ?></div>
    </div>
    <div class="w-layout-blockcontainer w-container">
      <h2 class="heading-22">●パスワード</h2>
      <div class="text-block-9">********</div>
    </div>
  </div>
  
  <div class="w-layout-blockcontainer container-29 w-container">
  <a href="<?php echo e(route('registration')); ?>" class="button-7 w-button">戻る</a>
    <form action="<?php echo e(route('registration')); ?>" method="post" style="display: inline;">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="name" value="<?php echo e($data['name']); ?>">
      <input type="hidden" name="email" value="<?php echo e($data['email']); ?>">
      <input type="hidden" name="tel" value="<?php echo e($data['tel']); ?>">
      <input type="hidden" name="post" value="<?php echo e($data['post']); ?>">
      <input type="hidden" name="address" value="<?php echo e($data['address']); ?>">
      <input type="hidden" name="password" value="<?php echo e($data['password']); ?>">
      <input type="submit" class="button-6 w-button" value="登録を行う">
    </form>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\7_PHP応用\ecommerce-app\resources\views/registrationconfirm.blade.php ENDPATH**/ ?>