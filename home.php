<?php
require 'functions.php';
$connection = dbConnect();

$slider1 = $connection->query('SELECT * FROM `movies` WHERE `slider` = 1 ORDER BY `movies`.`title` ASC');
$slider2 = $connection->query('SELECT * FROM `movies` WHERE `slider` = 2  ORDER BY `movies`.`volgorde` ASC');
$slider3 = $connection->query('SELECT * FROM `movies` WHERE `slider` = 3');
$slider4 = $connection->query('SELECT * FROM `movies` WHERE `slider` = 4');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="css/home.css">
  <script src="java.js" defer></script>
</head>
<header class="good">
  <nav>
    <ul>
      <li>
        <img class="logo1" src="img/SlyStream.webp" alt="Dit is het logo van one website">
      </li>
    </ul>
  </nav>
  <input type="text" placeholder="Search.." name="search">
</header>


  <body>

  <main>

  <section class="slider1">
  
    <div class="row">
      <div class="header">
        <h3 class="title"></h3>
        <div class="progress-bar"></div>
      </div>
      <div class="container">
        <button class="handle left-handle">
          <div class="text">&#8249;</div>
        </button>

            <article class="slider">
            <?php foreach ($slider1 as $row) : ?>
              <img class="imgOP" src="img/<?php echo $row['img']?>" alt="De film poster van Central Intelligence">
              <?php endforeach; ?>
            
            </article>
         
            <button class="handle right-handle">
              <div class="text">&#8250;</div>
            </button>
    
            </div>
    </div>
  
  </section>
 

  <div class="row">
    <div class="header">
      <h3 class="title"></h3>
      <div class="progress-bar"></div>
    </div>
    <div class="container">
      <button class="handle left-handle">
        <div class="text">&#8249;</div>
      </button>
      <div class="slider">
      <?php foreach ($slider2 as $row) : ?>
              <img class="imgOP" src="img/<?php echo $row['img']?>" alt="De film poster van Central Intelligence">
              <?php endforeach; ?>
      </div>
      <button class="handle right-handle">
        <div class="text">&#8250;</div>
      </button>
    </div>
  </div>


  <div class="row">
    <div class="header">
      <h3 class="title"></h3>
      <div class="progress-bar"></div>
    </div>
    <div class="container">
      <button class="handle left-handle">
        <div class="text">&#8249;</div>
      </button>
      <div class="slider">
      <?php foreach ($slider3 as $row) : ?>
              <img class="imgOP" src="img/<?php echo $row['img']?>" alt="De film poster van Central Intelligence">
              <?php endforeach; ?>
      </div>
      <button class="handle right-handle">
        <div class="text">&#8250;</div>
      </button>
    </div>
  </div>


  <div class="row">
    <div class="header">
      <h3 class="title"></h3>
      <div class="progress-bar"></div>
    </div>
    <div class="container">
      <button class="handle left-handle">
        <div class="text">&#8249;</div>
      </button>
      <div class="slider">
      <?php foreach ($slider4 as $row) : ?>
              <img class="imgOP" src="img/<?php echo $row['img']?>" alt="De film poster van Central Intelligence">
              <?php endforeach; ?>
      </div>
      <button class="handle right-handle">
        <div class="text">&#8250;</div>
      </button>
    </div>
  </div>

  
  </section>
  <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Contact</a></li>
            </ul>
            <p class="copyright">SlyStream</p>
        </footer>
    </div>
  </body>
</main>

<footer class="footer">

</footer>
</html>