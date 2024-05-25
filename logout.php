<?php
session_start();
session_unset();
session_destroy();
header("Location: RegLogin/login.php");
exit();
?>