<?php
include 'session.php';
include_once '../Includes/connector.php';

if (isset($_GET['id'])) {
    $sql =
        'SELECT id, titel ,beschrijving, foto , prijs FROM menu WHERE id = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $result = $stmt->fetch();

    $id = $result['id'];
    $name = $result['titel'];
    $description = $result['beschrijving'];
    $picture = $result['foto'];
    $price = $result['prijs'];
} else {
    header('Location: admin.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/admin.css"/>
</head>
<body>
        <section class="form">
      <div class="container">
        <div class="form">
          <form action="PHP/updatemenu.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id"  value="<?php echo $id; ?>" required>
            <div class="forminput">
              <label>titel product</label>
              <input type="text" name="titel" value="<?php echo $name; ?>" required />
            </div>
            <div class="forminput">
              <label>beschrijving product</label>
              <textarea name="beschrijving" required><?php echo $description; ?></textarea>
            </div>
            <div class="forminput">
              <label>foto product</label>
              <input type="file" name="foto" />
              <img height="50" src="../Images/<?php echo $picture; ?>">
              <input type="hidden" name="picture"  value="<?php echo $picture; ?>" />
            </div>
            <div class="forminput">
              <label>prijs product</label>
              <input type="text" name="prijs"value="<?php echo $price; ?>" required />
            </div>
            <button type="submit" name="toevoegen">toevoegen</button>
          </form>
        </div>
      </div>
    </section>
</body>
</html>