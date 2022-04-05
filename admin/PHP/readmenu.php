<?php
include_once '../Includes/connector.php'; ?>

<?php
$sql = 'SELECT * FROM menu';
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
foreach ($result as $key => $value) { ?>

<li class="list-group-item">
  <div class="checkbox">
    <label for="checkbox2"> naam product: <?php echo $value[
        'titel'
    ]; ?> </label>
    <p> beschrijving: <?php echo $value['beschrijving']; ?></p>
    <p>Prijs: <?php echo $value['prijs']; ?></p>
    <img height="50" width=""src="../Images/<?php echo $value['foto']; ?>">
  </div>
  <div class="pull-right action-buttons">
    <?php
    echo '<a href="updatemenu.php?id=' . $value['id'] . '"';
    echo '><span class="glyphicon glyphicon-pencil"></span';
    echo '></a>';
    ?> 
    <?php
    echo '<a href="PHP\deletemenu.PHP?id=' . $value['id'] . '" class="trash"';
    echo '><span class="glyphicon glyphicon-trash"></span ';
    echo '></a>';
    ?>
  </div>
</li>

<?php }


?>
