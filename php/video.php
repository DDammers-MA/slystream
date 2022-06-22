<?php
require 'functions.php';
$connection = dbConnect();
$id = $_GET['id'];
$video = $connection->query('SELECT * FROM `movies` WHERE `id` =' . $id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/video.css">
    <title>Films</title>
</head>
<?php foreach ($video as $row) : ?>
<header class="good">
  <nav>
    <ul>
      <li>
            <a href="home.php">
        <img class="logo1" src="../img/SlyStream.webp" alt="This is the logo of one website">
        </a>
      </li>
      <li> <a href="contact.php">contact page</a></li>
      <li> <a href="login.php">login</a></li>
      <li> <a href="betaling.php">betaling</a></li>
    </ul>
  </nav>
  <p class="title"><?php echo $row['title']?></p>
</header>

<body>
<main class="wrapper">
    <section class="videos">
    <video class="video" src="../video/<?php echo $row['video'] ?>" autoplay controls></video>
    </section>

    <h3 class="dis">discription</h3>

    <section class="samenvatting">
    <p><?php echo $row['discription'] ?> </p>
    </section>
<?php endforeach; ?>

</main>
</body>
</html>