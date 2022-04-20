<?php
include_once 'Includes/connector.php'; ?>
<?php function menu()
{
    global $conn;
    $sql = 'SELECT * FROM menu';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    try {
        foreach ($result as $key => $value) { ?>

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
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} ?>

<?php function searchMenu()
{
    global $conn;
    $stmt = $conn->prepare(
        "SELECT * FROM menu WHERE titel LIKE concat('%', :titel, '%')"
    );
    $stmt->bindParam(':titel', $_GET['search']);
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>

<?php try {
    foreach ($result as $key => $value) { ?>
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
} catch (PDOException $e) {
    echo $e->getMessage();
}
} ?>


