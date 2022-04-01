<?php
session_start();

if (!isset($_SESSION['adminrestaurant']) || !$_SESSION['adminrestaurant']) {
    header('Location: ../index.php');
    exit();
}
?>
