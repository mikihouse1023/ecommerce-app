<div class="w-layout-blockcontainer w-container">
  <!--$titleにはコンポーネントクラスから受け取った値がレンダリングされる-->
  <h1 class="heading-5">■{{ $title }}</h1>
</div>
<div class="w-layout-blockcontainer container-3 w-container">
  <div class="w-layout-blockcontainer container-9 w-container">
    <img src="{{ asset($product->picture) }}" sizes="(max-width: 767px) 37vw, 200px" class="image">
    <div class="w-layout-vflex">
      <a href="{{ route('item.show', ['id' => $product->id]) }}">
        <h2 class="heading-2">{{ $product->name }}<br></h2>
      </a>
      <h2 class="heading-2">￥{{ number_format($product->val) }}(税込み)</h2>
    </div>
  </div>
</div>