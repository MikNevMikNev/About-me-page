<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About me page</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <?php
    $name = "Mikhail";
    $surname = "Neverov";
    $age = "15";
    $city = "Moscow";
    $welcometext = "Welcome to page about me!";
    $logo = "img/logo.png";
    $photo = "img/photo.jpg";

    include("includes/header.inc.php");
    include("includes/about.inc.php");
    include("includes/footer.inc.php");
    ?>
  </body>
</html>