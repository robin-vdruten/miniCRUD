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
      <section class="reserveren">
        <div class="reserveren-wrapper">
          <form
            action="PHP/createreservation.php"
            method="post"
            class="container"
          >
            <div class="elem-group">
              <label for="name">Your Name</label>
              <input
                type="text"
                id="name"
                name="naam"
                placeholder="your name.."
                pattern="[A-Z\sa-z]{3,20}"
                required
              />
            </div>
            <div class="elem-group">
              <label for="email">Your E-mail</label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="yourname..@email.com"
                required
              />
            </div>
            <div class="elem-group">
              <label for="phone">Your Phone</label>
              <input
                type="tel"
                id="phone"
                name="phonenumber"
                placeholder="06 xxxxxxx"
                required
              />
            </div>
            <hr />
            <div class="date">
              <div class="elem-group inlined">
                <label for="adult">Adults</label>
                <input
                  type="number"
                  id="adult"
                  name="adults"
                  placeholder="2"
                  min="1"
                  required
                />
              </div>
              <div class="elem-group inlined">
                <label for="child">Children</label>
                <input
                  type="number"
                  id="child"
                  name="children"
                  placeholder="2"
                  min="0"
                  required
                />
              </div>
              <div class="elem-group inlined">
                <label for="checkin-date">Check-in Date</label>
                <input type="date" id="checkin-date" name="checkin" required />
              </div>
            </div>
            <button class="btn" type="submit">Reserveren</button>
          </form>
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
