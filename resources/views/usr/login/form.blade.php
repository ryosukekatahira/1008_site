<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
	@vite(['resources/css/app.css'])
    <title>ログインページ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn+SC:wght@400;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <ul class="left-category">
            <li class="Category vollkorn-sc-regular">JEWERLY</li>
            <li class="Category vollkorn-sc-regular">NOTICE</li>
            <li class="Category vollkorn-sc-regular">ABOUT</li>
            <li class="Category vollkorn-sc-regular">CONTACT</li>
        </ul>
        <a href="index.php" class="black-link"><h1 class="main-logo vollkorn-sc-bold">1008</h1></a>
        <ul class="right-category">
            <a href="login.php" class="black-link"><li class="login vollkorn-sc-regular">ログイン</li></a>
            <li class="login vollkorn-sc-regular">カート</li>
            <li class="login vollkorn-sc-regular">&#9776;</li>
        </ul>
    </header>

    <h2 class="login-logo vollkorn-sc-regular">ログイン</h2>
    
    <div class="form-Container">
        <!-- formのactionをlogin.phpに設定 -->
        <form action="login.php" method="post">
            <div class="mail-container">
                <p class="mail-text vollkorn-sc-regular">メールアドレス</p>
                <input type="text" class="mail-form" name="mail">
            </div>
            <div class="pass-container">
                <p class="pass-text vollkorn-sc-regular">パスワード</p>
                <input type="password" class="pass-form" name="pass">
            </div>
            <!-- エラーメッセージの表示位置を変更 -->
            <?php if ($error_msg ?? ''): ?>
                <p style="color: red;" class="err-text"><?php echo htmlspecialchars($error_msg, ENT_QUOTES, 'UTF-8'); ?></p>
            <?php endif; ?>
            <div class="btn-container">
                <input type="submit" value="サインイン" class="signin-btn vollkorn-sc-regular">
                <input type="button" onclick="location.href='./signup.php'" value="新規登録はこちら" class="signup-btn vollkorn-sc-regular">
            </div>
        </form>
    </div>
    <footer class="footer">
        <ul class="footer-list">
            <li class="footer-text vollkorn-sc-regular">HOME</li>
            <li class="footer-text vollkorn-sc-regular">NOTICE</li>
            <li class="footer-text vollkorn-sc-regular">JEWERLY</li>
            <li class="footer-text vollkorn-sc-regular">ABOUT</li>
            <li class="footer-text vollkorn-sc-regular">CONTACT</li>
        </ul>
        <p class="Copyright vollkorn-sc-regular">©10082024INC</p>
    </footer>
</body>
</html>
