<?php
include_once '../Includes/connector.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "INSERT INTO reserveringen (naam, email, phone,  volwassenen, kinderen, checkin) 
            VALUES (:naam,:email,:phone,:volwassenen,:kinderen,:checkin)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':naam', $_POST['naam']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':phone', $_POST['phonenumber']);
    $stmt->bindParam(':volwassenen', $_POST['adults']);
    $stmt->bindParam(':kinderen', $_POST['children']);
    $stmt->bindParam(':checkin', $_POST['checkin']);
    $stmt->execute();

    header('Location:../reservation.php');
} else {
    header('Location:../reservation.php');
}

?>
