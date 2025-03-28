<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        <img src="./img/shape.png" alt="" class="shape" />

        <header>
          <div class="container">
              <h1>Art Gallery</h1>

            <div class="links">
              <ul>
                <li><a href="book.php">Books</a></li>
                <li><a href="painting.php">Paintings</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="user-registration.php" class="btn">Register</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>For Unique Art,</h1>
                <h1>Start Exploring now.</h1>
              </div>
              <p class="text">
                The Virtual Art Gallery is an innovative platform 
                designed to bring the world of Art to everyone.
              </p>
              <div class="cta">
                <a href="user-registration.php" class="btn">Get started</a>
              </div>
            </div>

            <div class="right">
              <img src="./img/person.png" alt="Person Image" class="person" />
            </div>
          </div>
        </div>

        <div class="bottom-area">
          <div class="container">
            <button class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
          </div>
        </div>
      </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="./app.js"></script>
  </body>
</html>
