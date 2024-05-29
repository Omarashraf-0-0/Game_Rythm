<?php

$con = mysqli_connect('localhost', 'root', '');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$db_selected = mysqli_select_db($con, 'gamerythm');
if (!$db_selected) {
    die("Can't use gamerythm: " . mysqli_error($con));
}

$group = $_GET['group'];
$user = $_GET['user'];

$stmt = mysqli_prepare($con, "SELECT total_chats FROM groups WHERE group_id = ?");
mysqli_stmt_bind_param($stmt, "s", $group);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

while ($row = mysqli_fetch_array($result)) {
    $total = $row['total_chats'];
    $stmt1 = mysqli_prepare($con, "UPDATE users_groups SET read_chats = ? WHERE user_id = ? AND group_id = ?");
    mysqli_stmt_bind_param($stmt1, "sss", $total, $user, $group);
    mysqli_stmt_execute($stmt1);
}

$stmt = mysqli_prepare($con, "SELECT user_name FROM user WHERE user_id = ?");
mysqli_stmt_bind_param($stmt, "s", $user);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user_name = mysqli_fetch_assoc($result)['user_name'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Chats</title>
    <link rel="stylesheet" href="chats.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        var user = <?php echo json_encode($user) ?>;
        var group = <?php echo json_encode($group) ?>;
        var user_name = <?php echo json_encode($user_name) ?>; // Pass the user_name to your JavaScript code

        // This is a simplified example and may not match your actual code structure
        function displayMessage(message, isUserMessage) {
            var messageElement = document.createElement('div');
            messageElement.textContent = user_name + ': ' + message; // Use user_name here

            var chatlogs = document.getElementById('chatlogs');
            chatlogs.prepend(messageElement); // Change this line
            chatlogs.scrollTop = chatlogs.scrollHeight;
        }
    </script>
    <script type="text/javascript" src="chatAjax.js"></script>
</head>

<body>
    <div class="container">
        <div id="chatlogs">
            LOADING CHATS, PLEASE WAIT...
        </div>
        <form action="" method="POST" name="chatForm">
            <label for="message">Enter your message</label>
            <textarea name="message"></textarea>
            <div class="buttons">
                <button id="backButton" type="button">Back</button> <!-- Add type="button" here -->
                <button name="sendMessage" type="submit" onclick="chat()">Send</button>
            </div>
        </form>
    </div>
</body>

<script type="text/javascript">
    window.onload = function() {
        document.getElementById('backButton').addEventListener('click', function() {
            window.location.href = 'Lobby.php'; // Replace 'lobby.php' with the actual path to your lobby page
        });
    }
</script>
<script type="text/javascript">
    window.onload = function() {
        document.getElementById('backButton').addEventListener('click', function() {
            window.location.href = 'Lobby.php'; // Replace 'lobby.php' with the actual path to your lobby page
        });

        document.querySelector('textarea[name="message"]').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault(); // Prevent the default action to avoid a line break in the textarea
                chat(); // Call your chat function here
                chatForm.message.value = ''; // Clear the message from the textarea

            }
        });
    }
</script>


</html>