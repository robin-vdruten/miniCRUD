<?php include_once 'Includes/connector.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'Includes/head.php'; ?>
  </head>
  <body>
    <header>
      <?php include 'Includes/header.php'; ?>
    </header>
    <main>
      <?php include 'Includes/searchBar.php'; ?>
      <section class="menu">
        <div class="menu-wrapper">
          <div class="container">
            <?php
            include 'PHP/menu.php';
            if (!isset($_GET['search']) || !$_GET['search']) {
                menu();
            } else {
                searchmenu();
            }
            ?>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <?php include 'Includes/footer.php'; ?>
    </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
