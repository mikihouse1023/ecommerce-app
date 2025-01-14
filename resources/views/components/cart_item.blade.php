<!--編集前
<img src="images/jacket.png" sizes="80px" class="image-5">
<div class="w-layout-vflex flex-block-3">
    <a href="item" class="link-11">fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff</a>
    <div class="text-block-5">￥XXXXXXXXXXX(税込み)</div>
    @if(isset($delete) && $delete)
    <a href="#" class="link-12">削除</a>
    @endif
</div>
@if(isset($delete) && $delete)
<div class="w-layout-blockcontainer container-24 w-container">
    <a href="#">
        <img src="dust_bin.png" class="image-7">
    </a>
</div>
@endif-->

<img src="images/jacket.png" sizes="80px" class="image-5">
<div class="w-layout-vflex flex-block-3">
    <p>{{ $item['name'] }} - {{ $item['size'] }}</p>
    <div class="text-block-5">￥{{ number_format($item['price']) }} (税込み)</div>
    @if(isset($delete) && $delete)
    <a href="#" class="link-12">削除</a>
    @endif
</div>
@if(isset($delete) && $delete)
<div class="w-layout-blockcontainer container-24 w-container">
    <a href="#">
        <img src="{{ asset('images/dust_bin.png') }}" class="image-7">
    </a>
</div>
@endif