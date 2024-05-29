<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Lobby.css">
    <style>
        body::before {
            content: "";
            background: url("assets/back.jpg") no-repeat center center fixed;
            position: absolute;
            background-size: cover;
            top: 0;
            left: 0;
            width: 100%;
            height: 1450px;
            opacity: 0.3;
            z-index: -1;
        }
    </style>
</head>

<body>

    <header class="header">
        <div class="img_div">
            <img src="assets/GR (13).png" alt="Cant Open" class="pagelogo">
        </div>
        <nav class="nav">
            <div class="nav_div">
                <a href="index.php" class="navHome">Home</a>
                <!-- <a href="Games/Game.php" class="navGames">Games</a> -->
                <a href="Lobby.php" class="navGames">Games</a>
                <a href="Contactus/Contact.php" class="navContact">Contact</a>
                <a href="about us/about.php" class="navAbout_us">About us</a>
                <?php if (isset($_SESSION['username'])) : ?>
                    <span class="user-info">
                        <a href="logout.php" class="logout">Logout</a>
                        <span class="texts"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    </span>
                <?php else : ?>
                    <span class="signup">
                        <a href="RegLogin/RegisterPage.php" class="Sign_up">Sign up</a>
                    </span>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <div class="MainContent">
        <!-- Other parts of your page -->

        <form method="post" action="Lobby.php">
            <div class="filterContainer">
                <div class="filters">
                    <div class="deviceType" tabindex="1">
                        <input class="selectopt" name="device_type" value="pc" type="radio" id="pc" onclick="identifyClickedElement(this)">
                        <label for="pc" class="option">PC</label>
                        <input class="selectopt" name="device_type" value="laptop" type="radio" id="laptop" onclick="identifyClickedElement(this)">
                        <label for="laptop" class="option">Laptop</label>
                        <input class="selectopt" name="device_type" value="mobile " type="radio" id="mobile" onclick="identifyClickedElement(this)">
                        <label for="mobile" class="option">Mobile</label>
                    </div>
                    <div class="gameType" tabindex="1">
                        <input class="selectopt" name="game_type" value="fortnite" type="radio" id="fortnite" onclick="identifyClickedElement(this)">
                        <label for="fortnite" class="option">Fortnite</label>
                        <input class="selectopt" name="game_type" value="cod" type="radio" id="cod" onclick="identifyClickedElement(this)">
                        <label for="cod" class="option">Call of duty</label>
                        <input class="selectopt" name="game_type" value="minecraft" type="radio" id="minecraft" onclick="identifyClickedElement(this)">
                        <label for="minecraft" class="option">Minecraft</label>
                    </div>
                </div>
                <input type="hidden" name="hidden_device_type">
                <input type="hidden" name="hidden_game_type">
                <input type="hidden" id="hidden_user_id" name="hidden_user_id" value="<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">
                <div class="buttonsContainer">
                    <div class="Search"><button type="button" onclick="searchGroups()" class="normalButton">Search</button></div>
                    <div class="Create"><button class="normalButton">Create</button></div>
                </div>
            </div>
        </form>

        <!-- Other parts of your page -->
    </div>

    <div class="serverLobby">
        <div class="list">
            <div class="topList">
                <h2>Lobby List</h2>
                <!-- <div class="topBotList">
                    <span>Group Name</span>
                    <span>Device Type</span>
                    <span>Game Type</span>
                    <span>Participants</span>
                </div> -->
            </div>
            <div class="botList">
            </div>
        </div>
    </div>




    <script>
        function searchGroups() {
            var deviceType = document.querySelector('input[name="device_type"]:checked').value;
            var gameType = document.querySelector('input[name="game_type"]:checked').value;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'getGroups.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                // alert(this.responseText);
                console.log(this.responseText); // Check the response from the PHP script
                if (this.status == 200) {
                    var groups = JSON.parse(this.responseText);
                    updateGroups(groups);
                }
            };
            xhr.send('device_type=' + deviceType + '&game_type=' + gameType);
        }

        function updateGroups(groups) {
            console.log(groups); // Check the parsed JSON object
            var botList = document.querySelector('.botList');
            botList.innerHTML = '';

            groups.forEach(function(group) {
                var room = document.createElement('div');
                room.className = 'room';

                var groupName = document.createElement('h3');
                groupName.className = 'groupName';
                groupName.textContent = group.group_name;
                room.appendChild(groupName);

                var deviceType = document.createElement('p');
                deviceType.className = 'deviceType';
                deviceType.textContent = group.device_type;
                deviceType.style.border = 'none'; // Add this line
                room.appendChild(deviceType);

                var gameType = document.createElement('p');
                gameType.className = 'gameType';
                gameType.textContent = group.game_type;
                gameType.style.border = 'none'; // Add this line
                room.appendChild(gameType);

                var participants = document.createElement('p');
                participants.className = 'participants';
                participants.textContent = group.participants + '/5'; // Adjust the maximum number of participants as needed
                room.appendChild(participants);

                var joinButton = document.createElement('button');
                joinButton.className = 'normalButton';
                joinButton.textContent = 'Join';
                joinButton.dataset.groupId = group.group_id; // Add this line
                joinButton.addEventListener('click', function() {
                    var groupId = this.dataset.groupId;
                    var userId = document.getElementById('hidden_user_id').value;

                    // Send a POST request to joinGroup.php
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'joinGroup.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.send('group_id=' + encodeURIComponent(groupId) + '&user_id=' + encodeURIComponent(userId));

                    // Redirect to chats.php
                    window.location.href = 'chats.php?user=' + encodeURIComponent(userId) + '&group=' + encodeURIComponent(groupId);
                });
                room.appendChild(joinButton);

                botList.appendChild(room);
            });
            console.log(botList.innerHTML);
        }

        document.querySelector('.Search').addEventListener('click', function(event) {
            event.preventDefault();
            searchGroups();
        });

        function identifyClickedElement(element) {
            if (element.name === 'device_type') {
                document.getElementById('hidden_device_type').value = element.id;
            } else if (element.name === 'game_type') {
                document.getElementById('hidden_game_type').value = element.id;
            }
        }
        var createButton = document.querySelector('.Create .normalButton');
        createButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent form submission
            var groupName = window.prompt("Please enter the name of the group");
            if (groupName) {
                var deviceType = document.querySelector('input[name="device_type"]:checked').id;
                var gameType = document.querySelector('input[name="game_type"]:checked').id;
                var userId = document.getElementById('hidden_user_id').value;

                console.log('userId:', userId);
                console.log('deviceType:', deviceType);
                console.log('gameType:', gameType);

                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'createGroup.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (this.status == 200 && this.responseText == 'success') {
                        searchGroups(); // Update the group list
                    }
                };
                xhr.send('user_id=' + encodeURIComponent(userId) +
                    '&group_name=' + encodeURIComponent(groupName) +
                    '&device_type=' + encodeURIComponent(deviceType) +
                    '&game_type=' + encodeURIComponent(gameType));
            } else {
                console.log("No group name entered");
            }
        });
    </script>
</body>

</html>