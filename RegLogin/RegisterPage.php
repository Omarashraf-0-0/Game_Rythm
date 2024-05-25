<?php
session_start();
@include '../config.php';

if (isset($_POST['Registerbutton'])) {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic validation
    if ($FirstName && $LastName && $Email && $username && $password) {
        // Escaping special characters for use in SQL statement
        $FirstName = mysqli_real_escape_string($conn, $FirstName);
        $LastName = mysqli_real_escape_string($conn, $LastName);
        $Email = mysqli_real_escape_string($conn, $Email);
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        // Check if username already exists
        $check_username_query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $check_username_query);
        if (mysqli_num_rows($result) > 0) {
            // Username already exists
            echo "<script>alert('Username already exists. Please choose a different one.');</script>";
        } else {
            // Inserting data into database
            $sql = "INSERT INTO users (firstName, lastName, Email, username, Password) VALUES ('$FirstName', '$LastName', '$Email', '$username', '$password')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>
                        alert('Registration Successful');
                        window.location.href = 'login.php';
                      </script>";
            } else {
                // Debugging error
                echo "<script>alert('Registration Failed: " . mysqli_error($conn) . "');</script>";
            }
        }

        mysqli_close($conn);
    } else {
        echo "<script>alert('Please fill all the fields.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="RegCss.css">
</head>
<body>
    <div id="main">
        <div id="Logoimg"><a href="../index.php">
            <img src="../assets/Logo.jpeg" alt="Cant Open" class="pagelogo">
        </a></div>
        <div id="Registrationform">
            <form id="registrationForm" action="registerPage.php" method="post">
                <h1>Registration</h1>
                
                <div class="FullName">
                    <input type="text" id="FirstName" name="FirstName" placeholder="First name" required>
                    <input type="text" id="LastName" name="LastName" placeholder="Last name" required>
                </div>

                <div class="Email">
                    <input id="Email" type="email" name="Email" placeholder="Email" required>
                </div>

                <div class="username">
                    <input id="username" type="text" name="username" placeholder="username" required>
                </div>

                <div class="password">
                    <input id="password" type="password" name="password" placeholder="password" required>
                </div>

                <div class="FormRegisterbutton">
                    <button type="submit" id="Registerbutton" name="Registerbutton">Register</button>
                    <a href="/RegLogin/Login.php" id="sign">Already have an account?</a>
                </div>
            </form>
        </div>
        <section>
            <span class="overlay"></span>
            <div class="modalBox">
                <i class="fa-regular fa-circle-check"></i>
                <h2>Completed</h2>
                <h3>You have successfully registered</h3>
                <div class="buttons">
                    <button class="close-btn">Ok, Close</button>
                </div>
            </div>
        </section>
    </div>
    <script>
        function validateForm(event) {
            const firstName = document.getElementById('FirstName').value;
            const lastName = document.getElementById('LastName').value;
            const email = document.getElementById('Email').value;
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (!firstName || !lastName || !email || !username || !password) {
                window.alert('Please fill all the fields.');
                event.preventDefault();  // Prevent form from submitting
                return false;
            }
            return true;
        }
        
        document.addEventListener('DOMContentLoaded', (event) => {
    // Get the modal
    const popup = document.getElementById('popup');

    // Get the button that opens the modal
    const btn = document.getElementById('openPopupBtn');

    // Get the <span> element that closes the modal
    const span = document.getElementById('closePopupBtn');

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        popup.style.display = 'block';
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        popup.style.display = 'none';
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = 'none';
        }
    }
});

        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            if (!validateForm(event)) {
                event.preventDefault(); // Prevent form submission if validation fails
            }else{
                console.log('Form submitted');
            }
        });
    </script>
</body>
</html>
