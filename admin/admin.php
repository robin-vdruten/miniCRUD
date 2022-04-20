<?php
include 'session.php';
include_once '../Includes/connector.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <link rel="stylesheet" href="CSS/admin.css" />
  </head>
  <body>
    <a href="logout.php">Logout</a>
    <a href="../login.php">Home page</a>
    <a href="addmenu.php">Add Menu</a>
    <section class="admin-user">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <span>Admin user</span>
              </div>
              <div class="panel-body">
                <div class="list-group">
                  <div class="checkbox">
                    <label for="checkbox2">
                      logged in as admin:
                      <?php echo $_SESSION['adminname']; ?>
                    </label>
                    <p>
                      with ID:
                      <?php echo $_SESSION['adminid']; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="menu-read">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <span>Menu</span>
              </div>
              <div class="panel-body">
                <ul class="list-group">
                  <?php include 'PHP/readmenu.PHP'; ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <span>reserveringen</span>
              </div>
              <div class="panel-body">
                <ul class="list-group">
                  <?php include 'PHP/readreserveringen.PHP'; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
