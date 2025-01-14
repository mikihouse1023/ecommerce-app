<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        
        $data = $request->all();
        $request->session()->put('register_data', $data);
        return view('registerconfirm', compact('data'));
    }


   

}