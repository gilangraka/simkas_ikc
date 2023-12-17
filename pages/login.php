<?php
  require("config.php");
  $db = new Database();

  session_start();
  $db->validasi_login();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>SimKas Login</title>
</head>

<body>
  <div class="logo-container">
    <img src="../assets/img/Artboard1.png" alt="Todolist Logo" class="logo" />
  </div>

  <div class="login-container">
    <h2>Login</h2>
    <form method="post">
      <div class="form-group">
        <input type="email" id="email" name="email" placeholder="Email" required />
        <i class='bx bxs-user'></i>
      </div>

      <div class="form-group">
        <input type="password" id="password" name="password" placeholder="Password" required />
        <i class='bx bxs-lock-alt'></i>
      </div>

      <button type="submit" name="login" class="btn">Login</button>
    </form>
  </div>
</body>

</html>