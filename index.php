<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sportsbook Landing Page</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include 'sections/header/header.php';
    ?>

  <main>

        <?php
    include 'sections/features/features.php';
    ?>

            <?php
    include 'sections/gameDestination/gameDestination.php';
    ?>

           <?php
    include 'sections/whyUs/whyUs.php';
    ?>

            <?php
    include 'sections/motivation/motivation.php';
    ?>


  </main>


  <script src="js/main.js"></script>
</body>
</html>
