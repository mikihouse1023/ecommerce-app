<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class item_component extends Component
{
    public $title; // ← これを追加
    /**
     * Create a new component instance.
     */
    public function __construct($title)
    {
        //属性$this->titleに入力された値はコンポーネントビューファイルにレンダリングする
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        //該当のコンポーネントビューファイルを呼び出す。
        //属性が設定されている場合はコンポーネントビューファイルにレンダリングされる。
        return view('components.item_component');
    }
}
