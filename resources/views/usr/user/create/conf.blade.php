<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/usr/user/create/conf.css') }}" media="screen and (min-width:1024px)"> <!-- 画面サイズ1024px以上はこのスタイルが適用される -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vollkorn+SC:wght@400;600;700;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- ヘッダー表示 -->
        @include('usr.layouts.header')

        <h2 class="login-logo vollkorn-sc-regular">{{ $title }}</h2>
        <form action="{{ $submitUrl }}" method="POST">
        @csrf
            <table class="conf-table">
                <tr class="table-row">
                    <td class="params-name vollkorn-sc-regular">氏名(性) :</td>
                    <td class="params-data">{{ $params['last_name'] }}</td>
                </tr>
                <tr class="table-row">
                    <td class="params-name vollkorn-sc-regular">氏名(名) :</td>
                    <td class="params-data">{{ $params['first_name'] }}</td>
                </tr>
                <tr class="table-row">
                    <td class="params-name vollkorn-sc-regular">メールアドレス :</td>
                    <td class="params-data">{{ $params['mail'] }}</td>
                </tr>
                <tr class="table-row">
                    <td class="params-name vollkorn-sc-regular">パスワード :</td>
                    <td class="params-data">{{ $params['pass'] }}</td>
                </tr>
            </table>
            <div class="btn-container">
                <input type="submit" value="新規登録" class="signin-btn vollkorn-sc-regular">
                <input type="button" onclick="location.href='{{ route('usr.user.create.') }}'" value="入力画面へ戻る" class="signup-btn vollkorn-sc-regular">
            </div>
        </form>
        <!-- フッター表示 -->
        @include('usr.layouts.footer')
    </body>
</html>