<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        //
        return view('login');
    }


    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // 認証処理
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // 認証成功
            return redirect()->route('index');
        } else {
            // 認証失敗
            return back()->withErrors(['login' => 'メールアドレスまたはパスワードが間違っています']);
        }
    }
}
