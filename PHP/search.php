<?php
include_once '../Includes/connector.php';

function search($text)
{
    global $conn;
    $text = htmlspecialchars($text);

    $stmt = $conn->prepare(
        "SELECT titel FROM menu WHERE titel LIKE concat('%', :titel, '%')"
    );

    $stmt->execute(['titel' => $text]);

    while ($names = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<a href="menu.php?search=' . $names['titel'] . '"';
        echo '>' . $names['titel'] . '';
        echo '</a>';
    }
}

search($_GET['txt']);
?>

