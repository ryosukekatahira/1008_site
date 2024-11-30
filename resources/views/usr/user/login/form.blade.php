<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/usr/user/login/form.css') }}" media="screen and (min-width:1024px)"> <!-- 画面サイズ1024px以上はこのスタイルが適用される -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vollkorn+SC:wght@400;600;700;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- ヘッダー表示 -->
        @include('usr.layouts.header')

        <h2 class="login-logo vollkorn-sc-regular">ログイン</h2>

        <!-- 入力欄（フォーム） -->
        <form action="{{ $submitUrl }}" method="POST">
            @csrf
        @include('usr.layouts.message')
            <div class="mail-container">
                <p class="mail-text vollkorn-sc-regular">メールアドレス</p>
                <input type="text" class="mail-form" name="mail" value="{{ $params['mail'] ?? "" }}">
                @if ($errors->has('mail'))
                    <div class="error">{!! $errors->first('mail') !!}</div>
                @endif
            </div>
            <div class="pass-container">
                <p class="pass-text vollkorn-sc-regular">パスワード</p>
                <input type="password" class="pass-form" name="pass" value="{{ $params['pass'] ?? "" }}">
                @if ($errors->has('pass'))
                    <div class="error">{!! $errors->first('pass') !!}</div>
                @endif
            </div>
            <div class="btn-container">
                <input type="submit" value="サインイン" class="signin-btn vollkorn-sc-regular">
                <input type="button" onclick="location.href='{{ route('usr.user.create.') }}'" value="新規登録はこちら" class="signup-btn vollkorn-sc-regular">
            </div>
        </form>

        <!-- フッター表示 -->
        @include('usr.layouts.footer')
    </body>
</html>
