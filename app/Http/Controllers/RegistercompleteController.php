<?php

namespace App\Http\Controllers;
use App\Models\User; // Userモデルを使用
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistercompleteController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function complete(Request $request)
    {
        // セッションからデータを取得
        $data = $request->session()->get('register_data');

        // データベースに保存
        if ($data) {
            User::create($data);
            // セッションからデータを削除(次回のリクエスト時に古いデータが残らないようにする)
            $request->session()->forget('register_data');
        }

        // 完了画面を表示
        return view('registrationcomplete', ['data' => $data]);
    }
}
