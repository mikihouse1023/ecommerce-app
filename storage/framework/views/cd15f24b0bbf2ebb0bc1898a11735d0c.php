<?php $__env->startSection('content'); ?> 
  <div class="w-layout-blockcontainer container-33 w-container">
    <div class="w-form">
    <form action="<?php echo e(route('login.process')); ?>" method="post">
    <?php echo csrf_field(); ?> <!-- CSRF保護 -->
        <label>メールアドレス</label>
        <input class="w-input" maxlength="256" name="email">
        <label>パスワード</label>
        <input class="w-input" maxlength="256" name="password">
        <div class="div-block-5">
            <input type="submit" class="submit-button-4 w-button" value="login">
        </div>
      </form>
    </div>
    <div class="div-block-6">
      <a href="<?php echo e(route('registration')); ?>" class="link-14">ユーザー登録はこちら</a>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\7_PHP応用\ecommerce-app\resources\views/login.blade.php ENDPATH**/ ?>