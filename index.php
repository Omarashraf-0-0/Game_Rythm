<?php
session_start();
@include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Game Rythm</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <!-- Nav Bar -->
    <header class="header">
        <div class="img_div">
            <!-- <img src="assets/Logo.jpeg" alt="Cant Open" class="pagelogo"> -->
            <img src="assets/GR (13).png" alt="Cant Open" class="pagelogo">
        </div>
        <nav class="nav">
            <div class="nav_div">
                <a href="index.php" class="navHome">Home</a>
                <!-- <a href="Games/Game.php" class="navGames">Games</a> -->
                <a href="Lobby.php" class="navGames">Games</a>
                <a href="Contactus/Contact.php" class="navContact">Contact</a>
                <a href="about us/about.php" class="navAbout_us">About us</a>
                <?php if (isset($_SESSION['username'])): ?>
                    <span class="user-info">
                        <a href="logout.php" class="logout">Logout</a>
                        <span class="texts"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    </span>
                <?php else: ?>
                    <span class="signup">
                        <a href="RegLogin/RegisterPage.php" class="Sign_up">Sign up</a>
                        <!-- <a href="logout.php" class="logout">Logout</a> -->

                    </span>
                <?php endif; ?>
            </div>

        </nav>
    </header>
    <!-- End of the nav _----------------------------- -->

    <!-- Main -->
    <div class="main" style="background: url('assets/GameProject pic 15.png'); display: grid;
    grid-template-columns: 1fr 2fr;
    background-position: right;
    height: 60vh;">
        <div class="mainLeft">
            <h1>Game Rythm</h1>
        </div>
    </div>
    <!-- END of Main -->

    <!-- Main Continue -->
    <div class="home">
        <div class="homeTopLeft">
            <h1>Join Rooms</h1>
            <p>Choose your perfect match-up and meet up with your new friends</p>
            <a href="Lobby.php"><button>Join Now!</button></a>
        </div>
        <div class="homeTopRight">
            <img src="assets/GameProject pic 16.png" alt="">
        </div>

        <div class="homeBotLeft">
            <img src="assets/GameProject pic 11.jpg" alt="">
        </div>
        <div class="homeBotRight">
            <h1>Shop Your Favorite Game</h1>
            <p>With wide range of games, Pick your preferred one and play</p>
            <a href="Lobby.php"><button>Buy Now!</button></a>
        </div>
    </div>
    <!-- END of Main Continue -->

    <!-- Ranked 3 videos -->
    <div class="ranked">
        <div class="rankedHeader">
            <h1>Top Ranked Rooms</h1>
            <p>Pick Your favorite ranked room and Enjoy the excitement and thrill of the game</p>
        </div>
        <div class="rankedGames">
            <div class="rankedGames1">
                <video class="hover-play" src="assets/GameProject vid1.mp4" width="400px"
                    disablePictureInPicture></video>
                <div class="rankedText">
                    <h1>Call of Duty</h1>
                    <p>Multiplayer First person view Shooting game.</p>
                    <a href="Lobby.php"><button>Play Now!</button></a>
                </div>
            </div>
            <div class="rankedGames2">
                <video class="hover-play" src="assets/GameProject vid3.mp4" width="400px"
                    disablePictureInPicture></video>
                <div class="rankedText">
                    <h1>Fortnite</h1>
                    <p>Unique shooting games with different match-ups</p>
                    <a href="Lobby.php"><button>Play Now!</button></a>
                </div>
            </div>
            <div class="rankedGames3">
                <video class="hover-play" src="assets/GameProject vid2.mp4" width="400px"
                    disablePictureInPicture></video>
                <div class="rankedText">
                    <h1>MineCraft</h1>
                    <p>Explore the open world and build and survive with your friends</p>
                    <a href="Lobby.php"><button>Play Now!</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Ranked 3 videos -->

    <!-- Testimonials -->
    <div class="test">
        <div class="testHeader">
            <h1>Happy Gamers</h1>
            <h2>Listen to what they're saying</h2>
        </div>
        <div class="testimonials">
            <div class="testimonials1">
                <img src="assets/ancelottijpg.jpg" class="testPic" alt="">
                <p>Initially, I joined Game Rythm out of curiosity, but it quickly became my favorite gaming hub. The
                    community is welcoming, and finding teammates for co-op sessions is a breeze. It’s the perfect blend
                    of social networking and gaming.</p>
                <h1>Ancelotti Totti</h1>
            </div>
            <div class="testimonials2">
                <img src="assets/Lemby .jpg" class="testPic" alt="">
                <p>Game Rythm isn’t just a website; it’s my gaming sanctuary. The chat features are incredibly
                    intuitive, making it easy to coordinate with my team and dominate the leaderboards. It’s more than a
                    platform; it’s where I’ve forged bonds with gamers worldwide.</p>
                <h1>Mohammad Saad</h1>
            </div>
            <div class="testimonials3">
                <img src="assets/mark .jpg" class="testPic" alt="">
                <p>For a competitive player like me, Game Rythm is a treasure trove. The low-latency voice chat is
                    perfect for real-time strategy, and the social features add a fun layer to sharing our gaming
                    triumphs. It’s the pulse of my gaming life!</p>
                <h1>Cool Zuckerberg
                </h1>
            </div>
        </div>
    </div>
    <!-- End of Testimonials -->

    <!-- Yellow Shadow BOX -->
    <div class="OuterBox">
        <div class="boxContent">
            <h1>Join Now!</h1>
            <p>Join our community and enjoy the best gaming experience</p>
            <button>Join Now!</button>
        </div>
    </div>
    <!-- END of Yellow Shadow BOX -->

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
<script src="script.js"></script>
<script src="https://kit.fontawesome.com/2a4cee4e4d.js" crossorigin="anonymous"></script>

</html>
