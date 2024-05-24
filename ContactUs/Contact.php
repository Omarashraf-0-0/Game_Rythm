<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
     <!-- Nav Bar -->
     <header class="header">
        <div class="img_div">
            <a href="/index.php">
                <img src="/assets/Logo.jpeg" alt="Cant Open" class="pagelogo">
            </a>
                </div>
        <nav class="nav">
            <div class="nav_div">
                <a href="/index.php" class="navHome">Home</a>
                <a href="/Games/Game.php" class="navGames">Games</a>
                <a href="/ContactUs/Contact.php" class="navContact">Contact</a>
                <a href="/about us/about.php" class="navAbout_us">About us</a>
                <span class="signup">
                    <a href="/RegLogin/RegisterPage.php" class="Sign_up"> Sign up</a> 
                </span>
            </div>
        </nav>
    </header>
    <!-- End of the nav _----------------------------- -->
    
    <main class="ContactMain">
        <h1 class="contact">
            Keep in Touch
        </h1>
        </div>
        <div class="form">
            <form action="">
                <div class="Name">
                    <div class="firstname">
                        <label for="">First Name</label> 
                        <br>
                        <input type="text" name="First name">
                    </div>
                    <div class="lastname">
                        <label for="">Last Name</label> 
                        <br>
                        <input type="text" name="Last name" >
                    </div>
                </div>
                <div class="email">
                    <label for="">Email</label>
                    <br>
                    <input type="email">
                </div>
                <div class="subject">
                    <label for="">Subject</label>
                    <br>
                    <input type="text">
                </div>
                <div class="message">
                    <label for="">Message</label>
                    <br>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="submit">
                    <button>Submit</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>