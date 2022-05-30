<?php
function dbConnect()
{

    //Laad de database gegevens uit het config bestand
    $config = require(__DIR__ . '/config.php');

    try {
        // Hier maken we de database verbinding
        $connection = new PDO("mysql:host=localhost;dbname=makeitrain;port=3306", "root", "");

        // Database verbindings opties instellen
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    } catch (PDOException $error) {
        echo "Verbinding niet gemaakt: " .  $error->getMessage();
        exit;
    }
}
?>