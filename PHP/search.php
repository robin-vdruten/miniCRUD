<?php
include_once '../Includes/connector.php';

function search($text)
{
    global $conn;
    $text = htmlspecialchars($text);

    $stmt = $conn->prepare(
        "SELECT * FROM menu WHERE titel LIKE concat('%',:titel, '%')"
    );

    $stmt->execute(['titel' => $text]);
    while ($names = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<a href="menu.php?search=' . $names['titel'] . '"';
        echo '<div class="box">';
        echo '<div class="image">';
        echo '<img src="Images/' . $names['foto'] . '"/>';
        echo '</div>';
        echo '<div class="content">';
        echo '<h3>' . $names['titel'] . '</h3>';
        echo '<p>';
        echo '';
        echo '</p>';
        echo '<span class="price">$' . $names['prijs'] . '</span>';
        echo '</div>';
        echo '</div>';
        echo '</a>';
    }
}

search($_GET['search']); ?>
