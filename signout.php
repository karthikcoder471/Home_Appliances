<?php
include 'Session.php';
unset($_SESSION['user']);
session_destroy();

header("Location:index.php?Succesfully Loggedout");
exit;
?>
