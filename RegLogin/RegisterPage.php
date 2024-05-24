<?php
session_start();
    @include '../config.php';
    if(isset($_POST['Registerbutton'])){
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Email = $_POST['Email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users (firstName, lastName, Email, username, Password) VALUES ('".$FirstName."', '".$LastName."', '".$Email."', '".$username."', '".$password."')";
        
        if(mysqli_query($conn, $sql)){
            echo "<script>alert('Registration Successful'); window.location.href='registerPage.php</script>";
            header("Location: login.php");
        }else{
            echo "<script>alert('Registration Failed')</script>";
        }
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="RegCss.css">
</head>
<body>
    <div id="main">
        <div id="Logoimg"><a href="../index.php">
            <img src="../assets/Logo.jpeg" alt="Cant Open" class="pagelogo">
        </a></div>
        <div id="Registrationform">
            <form action="registerPage.php" method="post">
                <h1>Registration</h1>
                
                <div class="FullName">
                    <input type="text" id="FirstName" name="FirstName" placeholder="First name" required>
                    <input type="text" id="LastName" name="LastName" placeholder="Last name" required>
                </div>

                <div class="Email">
                    <input id="Email" type="email" name="Email" placeholder="Email">
                </div>

                <div class="username">
                    <input id="username" type="text" name="username" placeholder="username">
                </div>

                <div class="password">
                    <input id="password" type="password" name="password" placeholder="password" required>
                </div>

                <div class="FormRegisterbutton">
                    <button type="submit" id="Registerbutton" name="Registerbutton">
                        <a href="login.php">Register</a>
                    </button>
                    <a href="/RegLogin/Login.php" id="sign">Already have an account?</a>
                </div>
            </form>
        </div>
</body>
</html>