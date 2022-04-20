<?php
include_once '../Includes/connector.php'; ?>

<?php
$sql = 'SELECT * FROM reserveringen';
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
try {
    foreach ($result as $key => $value) { ?>

<li class="list-group-item">
  <div class="checkbox">
    <label for="checkbox2"> naam: <?php echo $value['naam']; ?> </label>
    <p> email: <?php echo $value['email']; ?></p>
    <p>phonenumber: <?php echo $value['phone']; ?></p>
    <p>volwassenen: <?php echo $value['volwassenen']; ?></p>
    <p>kinderen: <?php echo $value['kinderen']; ?></p>
    <p> checkin: <?php echo $value['checkin']; ?> </p>
  </div>
  <div class="pull-right action-buttons">
    <?php
    echo '<a href="PHP\deletereserveringen.PHP?id=' .
        $value['id'] .
        '" class="trash"';
    echo '><span class="glyphicon glyphicon-trash"></span ';
    echo '></a>';
    ?>
  </div>
</li>

<?php }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>


