@extends('layouts.app')
@section('content')
<div class="w-layout-blockcontainer container-22 w-container">
  <div class="w-form">
    <form id="email-form" name="email-form" data-name="Email Form" method="get" action="{{ route('itemlist') }}" class="form" data-wf-page-id="65de85138eaba875c01e5763" data-wf-element-id="8f53273e-d595-33a3-00d4-0c07fb6242f2"><label for="field">ジャンル</label>
      <div class="w-layout-hflex">
        <select id="field" name="field" class="w-select">
          <option value="Tシャツ" {{ request('field') == 'Tシャツ' ? 'selected' : '' }}>Tシャツ</option>
          <option value="Yシャツ" {{ request('field') == 'Yシャツ' ? 'selected' : '' }}>Yシャツ</option>
          <option value="セーター" {{ request('field') == 'セーター' ? 'selected' : '' }}>セーター</option>
          <option value="ロング" {{ request('field') == 'ロング' ? 'selected' : '' }}>ロング</option>
          <option value="コート" {{ request('field') == 'コート' ? 'selected' : '' }}>コート</option>
          <option value="ジャケット" {{ request('field') == 'ジャケット' ? 'selected' : '' }}>ジャケット</option>
          <option value="パンツ" {{ request('field') == 'パンツ' ? 'selected' : '' }}>パンツ</option>
          <option value="シューズ" {{ request('field') == 'シューズ' ? 'selected' : '' }}>シューズ</option>
          <option value="アクセサリー" {{ request('field') == 'アクセサリー' ? 'selected' : '' }}>アクセサリー</option>
        </select>
        <input type="submit" data-wait="Please wait..." class="submit-button w-button" value="検索">
      </div>
    </form>
  </div>
</div>
<div class="w-layout-blockcontainer container-22 w-container" style=display:flex;justify-content:center;>
<button class="settlement" onclick="location.href='{{ route('cart.view') }}'">決済に進む</button>
</div>
<div class="w-layout-blockcontainer container-3 w-container">
@foreach ($products as $product)
<div class="w-layout-blockcontainer container-9 w-container">
    <x-item_component title="{{ $product->name }}" :product="$product" />
</div>
@endforeach
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
@endsection