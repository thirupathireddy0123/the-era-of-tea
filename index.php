<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">


    <title>the era of tea</title>
  </head>
  <body>
    <div class="navbar">
      <a href="#">Signin</a>
      <a href="#">Catalog</a>
      <a href="#">Products</a>
      <a class="active" href="#">Home</a>
    </div>

    <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="pictures/img_nature_wide.jpg" style="width:100%">
          <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
          <img src="pictures/img_snow_wide.jpg" style="width:100%">
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          <img src="pictures/img_mountains_wide.jpg" style="width:100%">
          <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>

    <div class="banner">
      <div class="banner-col-1">
        <a href="#">Recently Added</a> <br>
      </div>
      <div class="banner-col-2">
        <a href="#">Products you might like</a> <br>
      </div>

    </div>


    <div class="cards-home">
      <div class="card-home">
        <img src="pictures/vanillaImperial.jpg" alt="vanillaImperial" width="361" height="303">
        <div class="text-home">
          <p> vanillaImperial</p>
          <span>$3.04</span> <br>
          <a href="#">details</a>
        </div>
      </div>
    </div>
      <?php
      include("footer.php");
      ?>
    <script type="text/javascript" src="scripts/script.js"></script>
  </body>

  </html>
