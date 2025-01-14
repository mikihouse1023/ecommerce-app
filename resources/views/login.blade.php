@extends('layouts.app')
@section('content') 
  <div class="w-layout-blockcontainer container-33 w-container">
    <div class="w-form">
    <form action="{{ route('login.process') }}" method="post">
    @csrf <!-- CSRF保護 -->
        <label>メールアドレス</label>
        <input class="w-input" maxlength="256" name="email">
        <label>パスワード</label>
        <input class="w-input" maxlength="256" name="password">
        <div class="div-block-5">
            <input type="submit" class="submit-button-4 w-button" value="login">
        </div>
      </form>
    </div>
    <div class="div-block-6">
      <a href="{{ route('registration')}}" class="link-14">ユーザー登録はこちら</a>
    </div>
  </div>
@endsection