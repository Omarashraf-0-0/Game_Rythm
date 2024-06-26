<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="about.css" rel="stylesheet">
</head>

<body>

    <!-- Nav Bar -->
    <header class="header">
        <div class="img_div">
            <a href="../index.php">
                <img src="../assets/GR (13).png" alt="Cant Open" class="pagelogo">
            </a>
           
        </div>
        <nav class="nav">
            <div class="nav_div">
                <a href="../index.php" class="navHome">Home</a>
                <a href="../Lobby.php" class="navGames">Games</a>
                <a href="../ContactUs/Contact.php" class="navContact">Contact</a>
                <a href="../about us/about.php" class="navAbout_us">About us</a>
                <?php if (isset($_SESSION['username'])): ?>
                    <span class="user-info">
                        <a href="logout.php" class="logout">Logout</a>
                        <<span class="texts"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
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

    <!-- About us Card -->
    <div class="outerCard">
        <div class="cardTeam">
            <p>Meet</p>
            <h1>Our Team</h1>
        </div>

        <div class="card">

            <div class="innerCard">
                <img src="../assets/My Pic2.jpg" alt="">
                <div class="cardText">
                    <h1>Omar Shawky</h1>
                    <p>Developer</p>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/omar.shawky2014">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-google"></i>
                            </a>

                        </li>
                        <li>
                            <a href="https://codeforces.com/profile/iOmar">
                                <i class="fa-solid fa-code"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="innerCard">
                <img src="../assets/Salah.jpg" alt="">
                <div class="cardText">
                    <h1>Salah Gamal</h1>
                    <p>Developer</p>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100009385064454">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-google"></i>
                            </a>

                        </li>
                        <li>
                            <a href="https://codeforces.com/profile/Salah_G">
                                <i class="fa-solid fa-code"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="innerCard">
                <img src="../assets/Ashraf.jpg" alt="">
                <div class="cardText">
                    <h1>Omar Ashraf</h1>
                    <p>Developer</p>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100007274355174">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-google"></i>
                            </a>

                        </li>
                        <li>
                            <a href="https://codeforces.com/profile/Omarashraf0_0">
                                <i class="fa-solid fa-code"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- End of About us card -->

    <!-- Our Services -->
    <div class="service">
        <div class="serviceLeft">
            <div class="serviceLeftTop">
                <p>Our Powerfull Service</p>
                <h1><span>Our</span> Powerfull Service Done On Time</h1>
            </div>
            <div class="serviceLeftBot">
                <div class="serviceLeftBot1">
                    <i class="fa-solid fa-globe"></i>
                    <h2>Chatting Globally</h2>
                    <p>Chatting is Everywhere</p>
                </div>
                <div class="serviceLeftBot1">
                    <i class="fa-solid fa-gear"></i>
                    <h2>Client Support</h2>
                    <p>Making sure our client is satisfied</p>
                </div>
                <div class="serviceLeftBot1">
                    <i class="fa-solid fa-people-group"></i>
                    <h2>Expertise Group</h2>
                    <p>Ask as anytime</p>
                </div>
                <div class="serviceLeftBot1">
                    <i class="fa-regular fa-gem"></i>
                    <h2>Years of Experience</h2>
                    <p>With the Experience, dont ever worry</p>
                </div>
            </div>

        </div>
        <div class="serviceRight">
            <img src="../assets/GameProject pic 9.png" alt="">
        </div>
    </div>
    <!-- End of Our Services -->

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
            <!-- <h2>Follow us</h2>
            <hr>
            <div class="Footericons">
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-code"></i></a></li>
                </ul>
            </div> -->
        </div>
        <p style="color: white; text-align: center;">© GameRythm all rights reserved. MADE with experienced people</p>
    </div>

</body>
<script src="https://kit.fontawesome.com/2a4cee4e4d.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2a4cee4e4d.js" crossorigin="anonymous"></script>

</html>