<!--layoutsフォルダのapp.blade.phpを継承しており、基本的なレイアウトがこのテンプレートの土台となる-->
@extends('layouts.app')
<!--layouts.appで指定された場所にこのコンテンツが挿入される-->
@section('content')
<h1 class="heading">Welcome to Educure apparel shop</h1>

<div class="w-layout-blockcontainer w-container">
  <h1 class="heading-5">■新規商品</h1>
</div>
<div class="w-layout-blockcontainer container-3 w-container">
@foreach ($products as $product)
<div class="w-layout-blockcontainer container-9 w-container">

<x-item_component title="{{ $product->name }}" :product="$product"/>
  </div>
  @endforeach
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
@endsection