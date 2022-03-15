<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/styles.css" />
    <title>Document</title>
</head>

<body>
    <form action="PHP/uitkomst.php" method="post">
        <input type="text" name="naam" id="naam" placeholder="username">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="text" name="leeftijd" id="leeftijd" placeholder="leeftijd">
        <input type="submit" value="Send" name="send">
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/mousewheel.js"></script>
    <script src="js/main.js"></script>
</body>

</html>