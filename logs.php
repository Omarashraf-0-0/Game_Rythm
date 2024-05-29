<?php

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'gamerythm');

$group = $_GET['group'];
$user = isset($_GET['user']) ? $_GET['user'] : null;

$query = mysqli_query($con, "SELECT chats.*, user.user_name FROM chats INNER JOIN user ON chats.user_id = user.user_id WHERE group_id = '$group' ORDER BY chat_id ASC");

while($row = mysqli_fetch_array($query))
{
    $alignment = ($row['user_id'] == $user) ? 'right' : 'left';
    echo "<div class='message $alignment'>" . $row['user_name'] . ":  " . $row['message'] . "</div>";
}

?>