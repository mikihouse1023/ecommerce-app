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

    //管理ユーザーログイン
    public function admin_index()
    {
        //
        return view('adminlogin');
    }


    public function admin_login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::guard('admin')->user();
            if ($user->is_admin) {
                return redirect()->route('admin');
            } else {
                Auth::guard('admin')->logout();
                return back()->withErrors(['login' => '許可されていないユーザーです']);
            }
        } else {
            return back()->withErrors(['login' => 'メールアドレスまたはパスワードが間違っています']);
        }
    }

}
