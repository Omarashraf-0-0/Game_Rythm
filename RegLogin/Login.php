<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="Logincss.css">
</head>
<body>
    <div id="main">
        <div id="Logoimg"><a href="/index.php">
            <img src="/assets/Logo.jpeg" alt="Cant Open" class="pagelogo">
        </a></div>
        <div id="form">
            <form onsubmit="return processForm()">
                <h1>Login</h1>
                <div><input type="text" id="username" placeholder="username" required></div>
                <div><input type="password" id="password" placeholder="password" required></div>
                <div id="RememberMebtn"><label for="Rememberme"><input type="checkbox">Remember me <a href="">Forgot password?</a></label></div>
                <div id="FormLoginbutton"><button type="submit" id="LoginButton"><a href="#">Login</a></button></div>
                <a href="/RegLogin/RegisterPage.php" id="account">Don't have account?</a>
            </form>
        </div>
    <script src="javascript.js"></script>
    </div>
</body>
</html>