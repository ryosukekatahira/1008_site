<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="{{ asset('css/usr/layouts/header.css') }}" media="screen and (min-width:1024px)"> <!-- 画面サイズ1024px以上はこのスタイルが適用される -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vollkorn+SC:wght@400;600;700;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class = "header">
            <ul class="left-category">
                <a href="login.php" class="black-link"><li class="Category vollkorn-sc-regular">JEWERLY</li></a>
                <a href="login.php" class="black-link"><li class="Category vollkorn-sc-regular">NOTICE</li></a>
                <a href="login.php" class="black-link"><li class="Category vollkorn-sc-regular">ABOUT</li></a>
                <a href="login.php" class="black-link"><li class="Category vollkorn-sc-regular">CONTACT</li></a>   
            </ul>
            <a href="index.php" class="black-link main-logo"><h1 class="vollkorn-sc-bold">1008</h1></a>
            <ul class="right-category">
                <a href="{{ Route('usr.login.') }}" class="black-link"><li class="login vollkorn-sc-regular">ログイン</li></a>
                <a href="login.php" class="black-link"><li class="login vollkorn-sc-regular">カート</li></a>
            </ul>
        </header>
    </body>
</html>
