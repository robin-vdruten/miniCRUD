<?php
include_once '../../Includes/connector.php';
include '../session.php';

$msg = '';

if (isset($_POST['toevoegen'])) {
    $target = '../../Images/' . basename($_FILES['foto']['name']);
    $image = $_FILES['foto']['name'];

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
        $msg = 'Uploaded file succes';
    } else {
        $msg = 'Uploaded file failed';
    }

    $sql =
        'INSERT INTO menu (titel,beschrijving,foto,prijs) VALUES (:titel,:beschrijving,:foto,:prijs)';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':titel', $_POST['titel']);
    $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
    $stmt->bindParam(':foto', $image);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt->execute();

    header('Location: ../admin.php');
    exit();
} else {
    header('Location: ../admin.php');
}

?>
