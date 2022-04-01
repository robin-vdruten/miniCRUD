<?php
include_once '../Includes/connector.php'; ?>

<?php
$sql = 'SELECT * FROM menu';
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
foreach ($result as $item) { ?>

<li class="list-group-item">
  <div class="checkbox">
    <label for="checkbox2"> naam product: <?php echo $item['titel']; ?> </label>
    <p> beschrijving: <?php echo $item['beschrijving']; ?>;</p>
    <p>Prijs: <?php echo $item['prijs']; ?></p>
    <img height="50" width=""src="../Images/<?php echo $item['foto']; ?>">
  </div>
  <div class="pull-right action-buttons">
    <?php
    echo '<a href="updatemenu.php?id=' . $item['id'] . '"';
    echo '><span class="glyphicon glyphicon-pencil"></span';
    echo '></a>';
    ?> 
    <?php
    echo '<a href="PHP\deletemenu.PHP?id=' . $item['id'] . '" class="trash"';
    echo '><span class="glyphicon glyphicon-trash"></span ';
    echo '></a>';
    ?>
  </div>
</li>

<?php }


?>
