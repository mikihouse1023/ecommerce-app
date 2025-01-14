<!--編集前
<img src="images/jacket.png" sizes="80px" class="image-5">
<div class="w-layout-vflex flex-block-3">
    <a href="item" class="link-11">fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff</a>
    <div class="text-block-5">￥XXXXXXXXXXX(税込み)</div>
    <?php if(isset($delete) && $delete): ?>
    <a href="#" class="link-12">削除</a>
    <?php endif; ?>
</div>
<?php if(isset($delete) && $delete): ?>
<div class="w-layout-blockcontainer container-24 w-container">
    <a href="#">
        <img src="dust_bin.png" class="image-7">
    </a>
</div>
<?php endif; ?>-->

<img src="images/jacket.png" sizes="80px" class="image-5">
<div class="w-layout-vflex flex-block-3">
    <p><?php echo e($item['name']); ?> - <?php echo e($item['size']); ?></p>
    <div class="text-block-5">￥<?php echo e(number_format($item['price'])); ?> (税込み)</div>
    <?php if(isset($delete) && $delete): ?>
    <a href="#" class="link-12">削除</a>
    <?php endif; ?>
</div>
<?php if(isset($delete) && $delete): ?>
<div class="w-layout-blockcontainer container-24 w-container">
    <a href="#">
        <img src="<?php echo e(asset('images/dust_bin.png')); ?>" class="image-7">
    </a>
</div>
<?php endif; ?><?php /**PATH C:\7_PHP応用\ecommerce-app\resources\views/components/cart_item.blade.php ENDPATH**/ ?>