<?php
require 'functions.php';
$connection = dbConnect();

$slider1 = $connection->query('SELECT * FROM `movies` WHERE `slider` = 1 ');
$slider2 = $connection->query('SELECT * FROM `movies` WHERE `slider` = 2 ');
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
  <link rel="stylesheet" href="../css/home.css">
  <script src="../java/java.js" defer></script>
  <script src="../java/filter.js" defer></script>
  <script src="../java/Speech.js" defer></script>
</head>
<header class="good">
  <nav>
    <ul>
      <li>
        <img class="logo1" src="../img/SlyStream.webp" alt="This is the logo of one website">
      </li>
      <li> <a href="contact.php">contact page</a></li>
      <li> <a href="login.php">login</a></li>
      <li> <a href="betaling.php">betaling</a></li>
    </ul>
  </nav>
</header>

<body>

    <!-- filter -->
    <section class="inputs">
      <div>
        <label for="checkbox-action" class="label">action</label>
        <input id="checkbox-action" type="checkbox" checked class="filter">
      </div>

      <div>
        <label for="checkbox-comedie" class="label">comedy</label>
        <input id="checkbox-comedie" type="checkbox" checked class="filter">
      </div>

      <div>
        <label for="checkbox-marvel" class="label">marvel</label>
        <input id="checkbox-marvel" type="checkbox" checked class="filter">
      </div>

      <div>
        <label for="checkbox-horror" class="label">horror</label>
        <input id="checkbox-horror" type="checkbox" checked class="filter">

      </div>
    </section>

    <!--  -->

    <div class="row">
      <div class="header">
        <h3 class="title"></h3>
        <div class="progress-bar"></div>
      </div>
      <div class="container">
        <button class="handle left-handle">
          <div class="text">&#8249;</div>
        </button>
        <ul class="slider">
          <?php foreach ($slider1 as $row) : ?>
            <li class="fil" data-category="<?php echo $row['categorie'] ?>">
              <a href="video.php?id=<?php echo $row['id'] ?>">
                <img class="imgOP" src="../img/<?php echo $row['img'] ?>" alt="This is a movie on our streaming site">
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
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
        <ul class="slider">
          <?php foreach ($slider2 as $row) : ?>
            <li class="fil" data-category="<?php echo $row['categorie'] ?>">
              <a href="video.php?id=<?php echo $row['id'] ?>">
                <img class="imgOP" src="../img/<?php echo $row['img'] ?>" alt="This is a movie on our streaming site">
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
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
        <ul class="slider">
          <?php foreach ($slider3 as $row) : ?>
            <li class="fil" data-category="<?php echo $row['categorie'] ?>">
              <a href="video.php?id=<?php echo $row['id'] ?>">
                <img class="imgOP" src="../img/<?php echo $row['img'] ?>" alt="This is a movie on our streaming site">
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
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
        <ul class="slider">
          <?php foreach ($slider4 as $row) : ?>
            <li class="fil" data-category="<?php echo $row['categorie'] ?>">
              <a href="video.php?id=<?php echo $row['id'] ?>">
                <img class="imgOP" src="../img/<?php echo $row['img'] ?>" alt="This is a movie on our streaming site">
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
        <button class="handle right-handle">
          <div class="text">&#8250;</div>
        </button>
      </div>
    </div>


    <footer class="footer">
      <p>slystream speach to text </p>
      <button class="fo" onclick="startRecognition()">Speech to text</button>
      <div class="result" id="result" class="hide"></div>
    </footer>


</body>

</html>