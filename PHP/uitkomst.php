<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_POST['send'])) {
        $naam = $_POST['naam'];
        $password = $_POST['password'];
        $leeftijd = $_POST['leeftijd'];

        echo $naam . $password . $leeftijd;
    } ?>

    <?php
    if ($_POST['lengte'] > 2) {
        $lengte = $_POST['lengte'] / 100;
    } else {
        $lengte = $_POST['lengte'];
    }
    $gewicht = $_POST['gewicht'];
    $bmi = round($gewicht / ($lengte * $lengte), 1);
    echo $gewicht . ' ' . $lengte . ' ' . $bmi;
    ?>
    <a href="../index.php">index</a>
</body>

</html>