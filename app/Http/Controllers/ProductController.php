<?php

namespace App\Http\Controllers;
use App\Models\Product; // Productモデルがある場合
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // 新規商品を取得
        $products = Product::latest()->take(8)->get();
        return view('index', compact('products'));
    }

    public function itemlist(Request $request){
    /*・query:クエリビルダー。条件の数や種類が動的に変化する場合に有効(特定のデータベースエンジンに依存しない。) 
       例:ユーザーがフィルタを選択するWEBサイト*/
        $query = Product::query();

        if ($request->has('field')) {
            $query->where('genre', $request->input('field'));
        }
    
        $products = $query->latest()->take(8)->get();
        return view('itemlist', compact('products'));
    }

    public function show($id)
{
    $product = Product::findOrFail($id);
    return view('item', compact('product'));
}

public function addToCart(Request $request)
{
    $product = Product::findOrFail($request->id);
    $size = $request->input('size');

    // セッションに商品の情報を保存
    $cart = session()->get('cart', []);
    $cart[] = [
        'name' => $product->name,
        'size' => $size,
        'price' => $product->val,
    ];
    session()->put('cart', $cart);
   
    // 商品一覧ページにリダイレクト
    return redirect()->route('itemlist');
}



public function viewCart()
{
    $cart = session()->get('cart', []);
    return view('cart', compact('cart'));
}



}
