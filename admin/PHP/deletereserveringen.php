<?php
include_once '../../Includes/connector.php';

if (isset($_GET['id'])) {
    $ID = $_GET['id'];

    $sql = 'DELETE FROM reserveringen WHERE id = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $ID);
    $stmt->execute();

    header('Location: ../admin.php');
    exit();
} else {
    header('Location: ../admin.php');
    exit();
}
?>
