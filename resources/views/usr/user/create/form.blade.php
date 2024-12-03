<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/usr/user/create/form.css') }}" media="screen and (min-width:1024px)"> <!-- 画面サイズ1024px以上はこのスタイルが適用される -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vollkorn+SC:wght@400;600;700;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- ヘッダー表示 -->
        @include('usr.layouts.header')

        <h2 class="login-logo vollkorn-sc-regular">{{ $title }}</h2>

        <!-- 入力欄（フォーム） -->
        <form action="{{ $submitUrl }}" method="POST">
            @csrf
        @include('usr.layouts.message')
            <div class="input-row">
                <label for="last_name" class="form_data vollkorn-sc-regular">氏名(性)</label>
                <input type="text" class="form_box" name="last_name" value="{{ $params['last_name'] ?? "" }}">
                @if ($errors->has('last_name'))
                    <div class="error">{!! $errors->first('last_name') !!}</div>
                @endif
            </div>
            <div class="input-row">
                <label for="first_name" class="form_data vollkorn-sc-regular">氏名(名)</label>
                <input type="text" class="form_box" name="first_name" value="{{ $params['first_name'] ?? "" }}">
                @if ($errors->has('first_name'))
                    <div class="error">{!! $errors->first('first_name') !!}</div>
                @endif
            </div>
            <div class="input-row">
                <label for="mail" class="form_data vollkorn-sc-regular">メールアドレス</label>
                <input type="text" class="form_box" name="mail" value="{{ $params['mail'] ?? "" }}">
                @if ($errors->has('mail'))
                    <div class="error">{!! $errors->first('mail') !!}</div>
                @endif
            </div>
            <div class="input-row">
                <label for="pass" class="form_data vollkorn-sc-regular">パスワード</label>
                <input type="password" class="form_box" name="pass" value="{{ $params['pass'] ?? "" }}">
                @if ($errors->has('pass'))
                    <div class="error">{!! $errors->first('pass') !!}</div>
                @endif
            </div>
            <div class="btn-container">
                <input type="submit" value="入力内容確認" class="signin-btn vollkorn-sc-regular">
                <input type="button" onclick="location.href='{{ route('usr.user.login.') }}'" value="ログイン済みの方" class="signup-btn vollkorn-sc-regular">
            </div>
        </form>

        <!-- フッター表示 -->
        @include('usr.layouts.footer')
    </body>
</html>