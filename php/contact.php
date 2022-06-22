<?php
require 'functions.php';
$connection = dbConnect();

$voornaam = "";
$achternaam = "";
$email = "";
$bericht = "";

$errors = [];

// Checken of er gegevens zijn opgestuurd
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Gegevens tonenl
  $voornaam = $_POST['voornaam'];
  $achternaam = $_POST['achternaam'];
  $email = $_POST['email'];
  $bericht = $_POST['bericht'];

  if (isEmpty($voornaam)) {
    $errors['voornaam'] = 'vul uw voornaam in a.u.b.';
  }
  if (isEmpty($achternaam)) {
    $errors['achternaam'] = 'vul uw achternaam in a.u.b.';
  }
  if (!isInvalidEmail($email)) {
    $errors['email'] = 'dit is geen geldig e-mail';
  }
  if (!hasMinLength($bericht, 5)) {
    $errors['bericht'] = 'vul minimaal 5 tekens in';
  }

// print_r($errors);

  if (count($errors) == 0) {
    $sql = "INSERT INTO `contact` (`voornaam`, `achternaam`, `email`, `text`) 
    VALUES (:voornaam, :achternaam, :email, :bericht);";
    $statement = $connection->prepare($sql);
    $params = [
      'voornaam' => $voornaam,
      'achternaam' => $achternaam,
      'email' => $email,
      'bericht' => $bericht,
    ];
    $statement->execute($params);
    header('Location: bedankt.html');
    exit;
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="../css/contact.css">
</head>

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
</header>


  <div class="container">

    <form action="contact.php" method="POST">
      <label for="fname">First name</label>
      <input name="voornaam" type="text" value="<?php echo $voornaam?>" id="fname" name="firstname" placeholder="Your name.." require>

    <?php if(!empty($errors['voornaam'])):?>
      <p class="form-error"><?php echo $errors['voornaam']?></p>
      <?php endif; ?>

      <label for="lname">Last name</label>
      <input name="achternaam" type="text" value="<?php echo $achternaam?>" id="lname" name="lastname" placeholder="Your last name.." require>

      <?php if(!empty($errors['achternaam'])):?>
      <p class="form-error"><?php echo $errors['achternaam']?></p>
      <?php endif; ?>

      <label for="lname">E-mail</label>
      <input name="email" type="text" id="email" name="e-mail" placeholder="Your e-mail" require>

      <?php if(!empty($errors['email'])):?>
      <p class="form-error"><?php echo $errors['email']?></p>
      <?php endif; ?>

      <label for="subject">Subject</label>
      <textarea name="bericht" id="subject" name="subject" placeholder="Write something.." style="height:200px" require></textarea>

      <?php if(!empty($errors['bericht'])):?>
      <p class="form-error"><?php echo $errors['bericht']?></p>
      <?php endif; ?>

      <button class="send" id="send" value="submit" enctype="text/plain" type="submit">Submit</button>

    </form>
  </div>

</body>

</html>