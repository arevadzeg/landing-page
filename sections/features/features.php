<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page</title>

  <link rel="stylesheet" href="features.css" />
</head>
<body>


<div class="join-flow">
  <!-- Step 1: Join -->
  <div class="join-flow__step join-flow__step--join">
    <img src="./assets/join-us-icon.png" alt="Join Us Icon" class="join-flow__icon" />
    <div class="join-flow__text">
      <span class="join-flow__title">JOIN US</span>
      <span class="join-flow__subtitle">It’s quick and easy</span>
    </div>
  </div>

  <!-- Arrow -->
  <?php include 'sections/header/arrow.php'; ?>

  <!-- Step 2: Deposit -->
  <div class="join-flow__step join-flow__step--deposit">
    <img src="./assets/deposit-icon.png" alt="Deposit Icon" class="join-flow__icon" />
    <div class="join-flow__text">
      <span class="join-flow__title">Deposit</span>
      <span class="join-flow__subtitle">Secure with 2–5min deposit time!</span>
    </div>
  </div>

  <!-- Arrow -->
  <?php include 'sections/header/arrow.php'; ?>

  <!-- Step 3: Play -->
  <div class="join-flow__step join-flow__step--play">
    <img src="./assets/play-icon.png" alt="Play Icon" class="join-flow__icon" />
    <div class="join-flow__text">
      <span class="join-flow__title">Play</span>
      <span class="join-flow__subtitle">Start your winning journey!</span>
    </div>
  </div>
</div>


</body>
</html>
