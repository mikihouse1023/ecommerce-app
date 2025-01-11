<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User; // Userモデルを使用
use Illuminate\Support\Facades\Auth; // 認証を使用

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('registration');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'tel' => 'required|string|max:12',
            'post' => 'required|string|max:7',
            'address' => 'required|string|max:300',
            'password' => 'required|string|min:8|confirmed', // パスワード確認
        ]);
        
        //ユーザー作成
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'post' => $request->post,
            'address' => $request->address,
            'password' => $request->password,
        ]);

        Auth::login($user);
        
      // 入力データをビューに渡す
    return view('registration.confirm', ['data' => $validatedData]);
    }


    public function confirm(Request $request)
    {
        // 入力内容をバリデーション
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'tel' => 'required|string|max:12',
            'post' => 'required|string|max:7',
            'address' => 'required|string|max:300',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        // 入力データを確認画面に渡す
        $data = $request->except(['_token', 'password_confirmation']);
    
        return view('registrationconfirm', compact('data'));
    }
    
}