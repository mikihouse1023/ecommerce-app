<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterconfirmController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }
    public function confirm(Request $request)
    {
        // 入力データを確認画面に渡す
        $data = $request->all();
        $request->session()->put('register_data', $data);
        return view('registrationconfirm', compact('data'));
    }
}
