<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location:logout.php");
    //exit();
}
?>
