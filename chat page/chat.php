<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/chat page/chat.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->

    <!-- Nav Bar -->
    <header class="header">
        <div class="img_div">
            <img src="/assets/Logo.jpeg" alt="Cant Open" class="pagelogo">
        </div>
        <nav class="nav">
            <div class="nav_div">
                <a href="" class="navHome">Home</a>
                <a href="" class="navGames">Games</a>
                <a href="/Contactus/Contact.php" class="navContact">Contact</a>
                <a href="/about us/about.php" class="navAbout_us">About us</a>
                <?php if (isset($_SESSION['username'])): ?>
                    <span class="user-info">
                        <a href="logout.php" class="logout">Logout</a>
                        <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    </span>
                <?php else: ?>
                    <span class="signup">
                        <a href="../RegLogin/RegisterPage.php" class="Sign_up">Sign up</a>
                    </span>
                <?php endif; ?>
            </div>
        </nav>
    </header>
    <!-- End of the nav _----------------------------- -->

    <!-- END of Navigation -->
    <div class="SearchAndSelectButtons">
        <div class="deviceType">
            <select name="" id=""></select>
        </div>
        <div class="Game">
            <select name="" id=""></select>
        </div>
        <div class="Search">
            <button>Find</button>
            <button>Create</button>
        </div>
        
    </div>


</body>

</html>