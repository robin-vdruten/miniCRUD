<?php
include_once '../Includes/connector.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <section class="form">
      <div class="container">
        <div class="form">
          <form action="PHP/createmenu.php" method="post" enctype="multipart/form-data">
            <div class="forminput">
              <label>titel product</label>
              <input type="text" name="titel" required />
            </div>
            <div class="forminput">
              <label>beschrijving product</label>
              <textarea name="beschrijving" required></textarea>
            </div>
            <div class="forminput">
              <label>foto product</label>
              <input type="file" name="foto" required />
            </div>
            <div class="forminput">
              <label>prijs product</label>
              <input type="text" name="prijs" required />
            </div>
            <button type="submit" name="toevoegen">toevoegen</button>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
