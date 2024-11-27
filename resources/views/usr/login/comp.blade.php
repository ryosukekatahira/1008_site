<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/usr/login/comp.css') }}" media="screen and (min-width:1024px)"> <!-- 画面サイズ1024px以上はこのスタイルが適用される -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vollkorn+SC:wght@400;600;700;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- ヘッダー表示 -->
        @include('usr.layouts.header')

        <h2 class="login-logo vollkorn-sc-regular">ログインが完了しました</h2>

		<div class="my-page-link">
			<a href="" class="vollkorn-sc-regular">マイページはこちら</a>
		</div>

        <!-- フッター表示 -->
        @include('usr.layouts.footer')
    </body>
</html>
