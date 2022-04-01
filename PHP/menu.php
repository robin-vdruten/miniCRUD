<?php
include_once 'Includes/connector.php';

$sql = 'SELECT * FROM menu';
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>

<?php foreach ($result as $menuitem) { ?>
<div class="box">
  <div class="image">
    <img src="Images/<?php echo $menuitem['foto']; ?>" />
  </div>
  <div class="content">
    <h3><?php echo $menuitem['titel']; ?></h3>
    <p>
      <?php echo $menuitem['beschrijving']; ?>
    </p>
    <span class="price">$<?php echo $menuitem['prijs']; ?></span>
  </div>
</div>

<?php }
?>
