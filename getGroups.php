<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'gamerythm');

if (isset($_POST['device_type'])) {
    $deviceTypeId = $_POST['device_type'];
}

if (isset($_POST['game_type'])) {
    $gameType = $_POST['game_type'];
}

if (isset($deviceTypeId) && isset($gameType)) {
    $query = mysqli_query($con, "SELECT groups.*, COUNT(users_groups.user_id) as participants 
                                 FROM groups 
                                 LEFT JOIN users_groups ON groups.group_id = users_groups.group_id 
                                 WHERE groups.device_type = '$deviceTypeId' AND groups.game_type = '$gameType' 
                                 GROUP BY groups.group_id");
    $groups = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $groups[] = $row;
    }
    echo json_encode($groups);
}
?>