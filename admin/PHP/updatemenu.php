<?php
include_once '../../Includes/connector.php';

$msg = '';

if (isset($_POST['toevoegen']) && isset($_POST['id'])) {
    $target = '../../Images/' . basename($_FILES['foto']['name']);
    $image = $_FILES['foto']['name'];

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
        $msg = 'gelukt';
    } else {
        $msg = 'niet gelukt';
    }

    if ($_FILES['foto']['name'] == '') {
        $image = $_POST['picture'];
    }

    $sql =
        'UPDATE menu SET titel = :titel, beschrijving = :beschrijving, foto = :foto,  prijs = :prijs WHERE id = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':titel', $_POST['titel']);
    $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
    $stmt->bindParam(':foto', $image);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->execute();

    header('Location: ../admin.php');

    exit();
} else {
    header('Location: ../admin.php');
    exit();
}
?>
