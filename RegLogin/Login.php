<?php
session_start();
    @include '../config.php';
    if(isset($_POST['LoginButton'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username = '".$username."' AND PASSWORD = '".$password."'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['Username'];
            $_SESSION['password'] = $row['Password'];
            echo "<script>alert('Login Successful')</script>";
            header("Location: ../index.html");
            
        }else{
            echo "<script>alert('Login Failed')</script>";
        }
        mysqli_close($conn);

 }

?>
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
        <div id="Logoimg"><a href="./index.html">
            <img src="../assets/Logo.jpeg" alt="Cant Open" class="pagelogo">
        </a></div>
        <div id="form">
            <form method="post" action="login.php">
                <h1>Login</h1>
                <div><input type="text" id="username" name ="username"placeholder="username" required></div>
                <div><input type="password" id="password" name="password" placeholder="password" required></div>
                <div id="RememberMebtn"><label for="Rememberme"><input type="checkbox">Remember me <a href="">Forgot password?</a></label></div>
                <div id="FormLoginbutton"><button type="submit" id="LoginButton" name = "LoginButton"><a href="#">Login</a></button></div>
                <a href="RegisterPage.php" id="account">Don't have account?</a>
            </form>
        </div>
    <script src="javascript.js"></script>
    </div>
</body>
</html>