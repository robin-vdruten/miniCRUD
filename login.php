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
      <section class="login">
        <div class="login-wrapper">
          <div class="container">
            <div class="left">
              <div class="login-text">Login</div>
              <div class="eula">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, nihil?
              </div>
            </div>
            <div class="right">
              <svg viewBox="0 0 320 300">
                <defs>
                  <linearGradient
                    inkscape:collect="always"
                    id="linearGradient"
                    x1="13"
                    y1="193.49992"
                    x2="307"
                    y2="193.49992"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop style="stop-color: #027532" offset="0" id="stop876" />
                    <stop style="stop-color: #027532" offset="1" id="stop878" />
                  </linearGradient>
                </defs>
                <path
                  d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143"
                />
              </svg>
              <form action="PHP/adminLogin.php" class="form" id="form" method="POST">
                <label for="email">Adminname</label>
                <input type="tekst" id="email" name="adminname" />
                <label for="password">Password</label>
                <input type="password" id="password" name="password" />
                <input type="submit" id="submit" value="Submit" />
                </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <?php include 'Includes/footer.php'; ?>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
