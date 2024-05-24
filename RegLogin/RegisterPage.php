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
        <div id="Logoimg"><a href="/index.php">
            <img src="/assets/Logo.jpeg" alt="Cant Open" class="pagelogo">
        </a></div>
        <div id="Registrationform">
            <form onsubmit="return processForm()">
                <h1>Registration</h1>
                
                <div class="FullName">
                    <input type="text" id="FirstName" placeholder="First name" required>
                    <input type="text" id="LastName" placeholder="Last name" required>
                </div>

                <div class="Email">
                    <input id="Email" type="email" placeholder="Email">
                </div>

                <div class="username">
                    <input id="username" type="text" placeholder="username">
                </div>

                <div class="password">
                    <input id="password" type="password" placeholder="password" required>
                </div>

                <div class="FormRegisterbutton">
                    <button type="submit" id="Registerbutton">
                        <a href="#">Register</a>
                    </button>
                    <a href="/RegLogin/Login.php" id="sign">Already have an account?</a>
                </div>
            </form>
        </div>
</body>
</html>