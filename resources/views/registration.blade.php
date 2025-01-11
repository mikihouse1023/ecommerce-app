@extends('layouts.app')
@section('content')
  <div class="w-layout-blockcontainer container-32 w-container">
    <h1 class="heading-20">■登録内容</h1>
    <div class="w-form">
    <form action="{{ route('registration.confirm') }}" method="post">
    @csrf <!-- CSRF保護 -->
    <label>ユーザー名</label>
    <input class="w-input" maxlength="256" name="name" value="{{ old('name') }}">
    @error('name') <p>{{ $message }}</p> @enderror

    <label>メールアドレス</label>
    <input class="w-input" maxlength="256" name="email" value="{{ old('email') }}">
    @error('email') <p>{{ $message }}</p> @enderror

    <label>電話番号</label>
    <input class="w-input" maxlength="256" name="tel" value="{{ old('tel') }}">
    @error('tel') <p>{{ $message }}</p> @enderror

    <label>郵便番号</label>
    <input class="w-input" maxlength="256" name="post" value="{{ old('post') }}">
    @error('post') <p>{{ $message }}</p> @enderror

    <label>住所</label>
    <input class="w-input" maxlength="256" name="address" value="{{ old('address') }}">
    @error('address') <p>{{ $message }}</p> @enderror

    <label>パスワード</label>
    <input class="w-input" maxlength="256" name="password" type="password">
    @error('password') <p>{{ $message }}</p> @enderror

    <label>パスワード確認</label>
    <input class="w-input" maxlength="256" name="password_confirmation" type="password">
    <div class="div-block-4">
    <a href="/" class="button-8 w-button">戻る</a>
    <input type="submit" class="submit-button-3 w-button" value="登録">
    </div>
</form>

    </div>
  </div>
  @endsection