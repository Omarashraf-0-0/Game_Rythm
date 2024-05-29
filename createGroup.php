<?php
session_start();
echo "<script>alert('Login Successful')</script>";
// Database
$con = mysqli_connect('localhost', 'root', '');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($con, 'gamerythm') or die("Could not select database");

if (isset($_POST['user_id'], $_POST['group_name'], $_POST['device_type'], $_POST['game_type'])) {
    $user_id = $_POST['user_id'];
    $group_name = $_POST['group_name'];
    $device_type = $_POST['device_type'];
    $game_type = $_POST['game_type'];
} else {
    die("POST variables are not set");
}

$query = "INSERT INTO groups (creator_id, group_name, device_type, game_type, total_chats) VALUES (?, ?, ?, ?, 0)";

$stmt = mysqli_prepare($con, $query);
if (!$stmt) {
    die("Prepare failed: " . mysqli_error($con));
}

$bind = mysqli_stmt_bind_param($stmt, 'ssss', $user_id, $group_name, $device_type, $game_type);
if (!$bind) {
    die("Bind failed: " . mysqli_stmt_error($stmt));
}

$exec = mysqli_stmt_execute($stmt);
if (!$exec) {
    die("Execute failed: " . mysqli_stmt_error($stmt));
} else {
    echo "Data inserted successfully";
}
?>