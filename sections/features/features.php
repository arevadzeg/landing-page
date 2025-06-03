<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page</title>

  <link rel="stylesheet" href="features.css" />
</head>
<body>


    <div class="features">
      <span class="feature feature-join-us">
        <img src="./assets/join-us-icon.png" alt="Join Us Icon" class="feature-icon" />
        <span class="feature-text">
          <span class="feature-title">JOIN US</span>
          <span class="feature-subtitle">It’s quick and easy</span>
        </span>
      </span>

      <?php
        include 'sections/header/arrow.php';
      ?>

      <span class="feature feature-deposit">
        <img src="./assets/deposit-icon.png" alt="Deposit Icon" class="feature-icon" />
        <span class="feature-text">
          <span class="feature-title">Deposit</span>
          <span class="feature-subtitle">Secure with 2-5min deposit time!</span>
        </span>
    
      </span>
          <?php
          include 'sections/header/arrow.php';
        ?>

      <span class="feature feature-play">
        <img src="./assets/play-icon.png" alt="Play Icon" class="feature-icon" />
        <span class="feature-text">
          <span class="feature-title">Play</span>
          <span class="feature-subtitle">Start your winning journey!</span>
        </span>
      </span>
    </div>


</body>
</html>
