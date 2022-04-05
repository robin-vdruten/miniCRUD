<?php
include_once 'Includes/connector.php';

$sql = 'SELECT * FROM menu';
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>

<?php foreach ($result as $key => $value) { ?>
<div class="box">
  <div class="image">
    <img src="Images/<?php echo $value['foto']; ?>" />
  </div>
  <div class="content">
    <h3><?php echo $value['titel']; ?></h3>
    <p>
      <?php echo $value['beschrijving']; ?>
    </p>
    <span class="price">$<?php echo $value['prijs']; ?></span>
  </div>
</div>

<?php }
?>
