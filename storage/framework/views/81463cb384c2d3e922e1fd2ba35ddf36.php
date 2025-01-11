<?php $__env->startSection('content'); ?>
  <div class="w-layout-blockcontainer container-32 w-container">
    <h1 class="heading-20">■登録内容</h1>
    <div class="w-form">
    <form action="<?php echo e(route('registration.confirm')); ?>" method="post">
    <?php echo csrf_field(); ?> <!-- CSRF保護 -->
    <label>ユーザー名</label>
    <input class="w-input" maxlength="256" name="name" value="<?php echo e(old('name')); ?>">
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label>メールアドレス</label>
    <input class="w-input" maxlength="256" name="email" value="<?php echo e(old('email')); ?>">
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label>電話番号</label>
    <input class="w-input" maxlength="256" name="tel" value="<?php echo e(old('tel')); ?>">
    <?php $__errorArgs = ['tel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label>郵便番号</label>
    <input class="w-input" maxlength="256" name="post" value="<?php echo e(old('post')); ?>">
    <?php $__errorArgs = ['post'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label>住所</label>
    <input class="w-input" maxlength="256" name="address" value="<?php echo e(old('address')); ?>">
    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label>パスワード</label>
    <input class="w-input" maxlength="256" name="password" type="password">
    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label>パスワード確認</label>
    <input class="w-input" maxlength="256" name="password_confirmation" type="password">
    <div class="div-block-4">
    <a href="/" class="button-8 w-button">戻る</a>
    <input type="submit" class="submit-button-3 w-button" value="登録">
    </div>
</form>

    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\7_PHP応用\ecommerce-app\resources\views/registration.blade.php ENDPATH**/ ?>