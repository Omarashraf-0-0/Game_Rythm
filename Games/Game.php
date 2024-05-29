<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Game.css">
    <style>body::before{
        content: "";
        background: url("../assets/back.jpg") no-repeat center center fixed;
        position: absolute;
        background-size: cover;
        top: 0;
        left: 0;
        width: 100%;
        height: 1450px;
        opacity: 0.3;
        z-index: -1;
    }</style>
</head>

<body>
    <!-- Navigation -->

    <!-- Nav Bar -->
    <header class="header">
        <div class="img_div">
<a href="../index.php">
            <img src="../assets/Logo.jpeg" alt="Cant Open" class="pagelogo" usemap="LOGO">
            <map name="LOGO">
                    <area shape="rect" coords="34,44,270,350" alt="Computer" href="../index.php">
             </map>      
 </a>


        </div>
        <nav class="nav">
            <div class="nav_div">
                <a href="../index.php" class="navHome">Home</a>
                <a href="../Games/Game.php" class="navGames">Games</a>
                <a href="../Contactus/Contact.php" class="navContact">Contact</a>
                <a href="../about us/about.php" class="navAbout_us">About us</a>
                <?php if (isset($_SESSION['username'])): ?>
                    <span class="user-info">
                        <a href="logout.php" class="logout">Logout</a>
                        <span>Welcome, <?php echo  htmlspecialchars($_SESSION['username']); ?></span>
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

    <!-- END of Navigation ------------------------------->
    <!-- Main Content ------------------------------------>
    <div class="MainContent">
        <div class="Statement">
            <h1>Join or Create your favorite matchups, and chat with your friends!!</h1>
        </div>
        <div class="filterContainer">
            <div class="filters">
                <div class="deviceType" tabindex="1">
                    <input class="selectopt" name="test" type="radio" id="opt1">
                    <label for="opt1" class="option">PC</label>
                    <input class="selectopt" name="test" type="radio" id="opt2">
                    <label for="opt2" class="option">Laptop</label>
                    <input class="selectopt" name="test" type="radio" id="opt3">
                    <label for="opt3" class="option">Mobile</label>
                </div>
                <div class="gameType" tabindex="1">
                    <input class="selectopt" name="test" type="radio" id="opt1">
                    <label for="opt1" class="option">Fortnight</label>
                    <input class="selectopt" name="test" type="radio" id="opt2">
                    <label for="opt2" class="option">Call of duty</label>
                    <input class="selectopt" name="test" type="radio" id="opt3">
                    <label for="opt3" class="option">Fifa</label>
                </div>
            </div>
            <div class="buttonsContainer">
                <div class="Join"><button>Join</button></div>
                <div class="Create"><button>Create</button></div>
            </div>
        </div>
    </div>
    <!-- End of the main -->
    <!-- footer ------------------------------------------>
    <div class="Footer">
        <div class="leftFooter">
            <h2>Take a Look</h2>
            <hr>
            <p><span style="color: #fdff00;">Visit our Office</span></p>
            <p><a href="../about us/about.php">Meet the team</a></p>
            <hr>
            <p><span style="color: #fdff00;">Visit our Feed</span></p>
            <p>Explore our latest News</p>
        </div>
        <div class="rightFooter">
            <h2>Check us out</h2>
            <hr>
            <p>Have any question?</p>
            <p>Please don't hesitate to call us <br>at +201557786305</p>
            <p>Got any suggestions?</p>
            <p>Contact us at salahgamal20016@gmail.com</p>
            <h2>Follow us</h2>
            <hr>
            <div class="Footericons">
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-code"></i></a></li>
                </ul>
            </div>
        </div>
        <p style="color: white; text-align: center; ">© GameRythm all rights reserved. MADE with experienced people </p>
    </div>

    <!-- footer -->
    <div class="Footer">
        <div class="leftFooter">
            <h2>Take a Look</h2>
            <hr>
            <p><span style="color: #fdff00;">Visit our Office</span></p>
            <p><a href="about us/about.php">Meet the team</a></p>
            <hr>
            <p><span style="color: #fdff00;">Visit our Feed</span></p>
            <p>Explore our latest News</p>
        </div>
        <div class="rightFooter">
            <h2>Check us out</h2>
            <hr>
            <p>Have any question?</p>
            <p>Please don't hesitate to call us <br>at +201557786305</p>
            <p>Got any suggestions?</p>
            <p>Contact us at salahgamal20016@gmail.com</p>
            <h2>Follow us</h2>
            <hr>
            <div class="Footericons">
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-code"></i></a></li>
                </ul>
            </div>
        </div>
        <p style="color: white; text-align: center;">© GameRythm all rights reserved. MADE with experienced people</p>
    </div>
</body>

</html>