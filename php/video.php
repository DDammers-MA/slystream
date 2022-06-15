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
<body>
<?php foreach ($video as $row) : ?>
<header class="header">
    <p><?php echo $row['title']?></p>
</header>
 

    <section class="videos">
    <video class="video" src="../video/<?php echo $row['video'] ?>" autoplay controls></video>
    </section>
    <section class="samenvatting">
    <p> <?php echo $row['discription'] ?></p>
    </section>
<?php endforeach; ?>

    



</body>
</html>