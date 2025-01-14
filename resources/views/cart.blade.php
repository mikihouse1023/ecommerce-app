@extends('layouts.app')
@section('content')
<div class="w-layout-blockcontainer container-25 w-container">
    <div class="w-layout-blockcontainer w-container">
        <h1 class="heading-16">■カート内容</h1>
    </div>
    <ul role="list" class="w-list-unstyled">
        @foreach(session('cart', []) as $item)
        <li class="list-item">
            <x-cart_item :item="$item" :delete="true" />
        </li>
        @endforeach
    </ul>
</div>
<div class="w-layout-blockcontainer container-27 w-container">
    <a href="/" class="button-4 w-button">戻る</a>
    <a href="payment" class="button-3 w-button">決済に進む</a>
</div>
@endsection





{{-- 
cafe.blade.php単体での実装

@extends('layouts.app')
@section('content')
<div class="w-layout-blockcontainer container-25 w-container">
      <div class="w-layout-blockcontainer w-container">
            <h1 class="heading-16">■カート内容</h1>
      </div>
      <ul role="list" class="w-list-unstyled">
      
            @foreach(session('cart', []) as $item)
            
            <li class="list-item">
            <img src="images/jacket.png" sizes="80px" class="image-5">
                  <div>
                        <p>{{ $item['name'] }} - {{ $item['size'] }}</p>
                        <p>￥{{ number_format($item['price']) }} (税込み)</p>
                  </div>

                  <div class="w-layout-blockcontainer container-24 w-container" >
                        <a href="#">
                              <img src="{{ asset('images/dust_bin.png') }}"  class="image-7" style=margin-left:auto;>
                        </a>
                  </div>
            </li>
            @endforeach
      </ul>

</div>
<div class="w-layout-blockcontainer container-27 w-container">
      <a href="/" class="button-4 w-button">戻る</a>
      <a href="payment" class="button-3 w-button">決済に進む</a>
</div>
@endsection --}} 