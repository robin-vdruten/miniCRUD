<?php
include_once '../Includes/connector.php';

function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $adminname = input($_POST['adminname']);
    $password = input($_POST['password']);
    $stmt = $conn->prepare('SELECT * FROM adminlogin');
    $stmt->execute();
    $user = $stmt->fetchall();

    foreach ($user as $user) {
        if (
            $user['adminname'] == $adminname &&
            $user['password'] == $password
        ) {
            session_start();
            $_SESSION['adminrestaurant'] = true;
            header('Location: ../admin/admin.php');
            exit();
        } else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo '</script>';
            die();
        }
    }
}

?>
