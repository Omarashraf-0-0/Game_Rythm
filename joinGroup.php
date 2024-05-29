<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'gamerythm');

if (isset($_POST['group_id']) && isset($_POST['user_id'])) {
    $groupId = $_POST['group_id'];
    $userId = $_POST['user_id'];

    // Check if the user is already a member of the group
    $query = mysqli_query($con, "SELECT * FROM users_groups WHERE group_id = '$groupId' AND user_id = '$userId'");
    if (mysqli_num_rows($query) == 0) {
        // If the user is not a member of the group, add them to the group
        mysqli_query($con, "INSERT INTO users_groups (group_id, user_id) VALUES ('$groupId', '$userId')");
    }
}
?>