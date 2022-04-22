<?php
$page = basename($_SERVER['PHP_SELF']);
session_start();
?>
<div class="header">
  <div class="logo">
    <a href="#" class="logo"
      ><img height="50" src="images/pizzalogotest3.png"
    /></a>
  </div>
  <div class="nav-bar">
    <nav class="navbar">
      <a
        href="index.php"
        class="<?php if ($page == 'index.php') {
            echo ' active';
        } ?>"
        >home</a
      >
      <a
        href="about.php"
        class="<?php if ($page == 'about.php') {
            echo ' active';
        } ?>"
        >about</a
      >
      <a
        href="menu.php"
        class="<?php if ($page == 'menu.php') {
            echo ' active';
        } ?>"
        >menu</a
      >
      <a
        href="reservation.php"
        class="<?php if ($page == 'reservation.php') {
            echo ' active';
        } ?>"
        >reserveren</a
      >
      <a
        href="admin/admin.php"
        class="<?php if (
            !isset($_SESSION['adminrestaurant']) ||
            !$_SESSION['adminrestaurant']
        ) {
            echo 'notactive';
        } else {
            echo 'active';
        } ?>"
      >admin</a>
      <a
        href="admin/logout.php"
        class="<?php if (
            !isset($_SESSION['adminrestaurant']) ||
            !$_SESSION['adminrestaurant']
        ) {
            echo 'notactive';
        } else {
            echo 'active';
        } ?>"
        >logout</a
      >
    </nav>
  </div>
  <div class="icons">
    <i class="fas fa-bars" id="menu-bars"></i>
    <i class="fas fa-search" id="search-icon"></i>
    <a
      href="login.php"
      class="fa fa-user<?php if ($page == 'login.php') {
          echo ' active';
      } ?>"
    ></a>
  </div>
</div>
