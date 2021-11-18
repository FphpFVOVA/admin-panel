<?php
  session_start();
  $pass = $_SESSION['programs_language'];
  if ($pass !== "admin") {
    header("Location: /Go-to.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-panel</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style.css.css">
  <link rel="shortcut icon" href="img/admin-logo.png" type="image/png">
</head>
<body style="background-color: #A7A7A7">
  <div class="header">
      <header>

      </header>
  </div>
  <div class="settings">
      <img src="img/settings.png" alt="settings" class="settings" id="1233" onclick="hides()">
      <img src="img/settings.png" alt="settings" class="settings style" id="123" onclick="hidesss()">
      <div class="menu" id="5555">
        <div class="exit">
          <a style="color: black" href="includes/.exit.php" class="admin-exit">Выход</a>
          <a href="includes/.exit.php"><img src="img/avatar.png" alt="user-exit" class="user-exit"></a>
        </div>
        <div class="home-page">
          <a style="color: black" href="/Go-to.php" class="admin-exit home-page">Home</a>
          <a href="/Go-to.php"><img src="img/home.png" alt="user-home" class="ggg"></a>
        </div>
        <button style="color: black;" class="admin-exit console1" onclick="con()">Консоль</button>
      </div>
  </div>
  <script type="text/javascript" src="js/js-menu.js"></script>
  <script type="text/javascript">
    function con(){
      var con = prompt('Ввидите команду:');
      switch (con) {
        case "test":
          console.log('Проверка пройдена!');
          break;
        default:
          console.warn("Команда ненайдена");
          break;
      }
    }
  </script>
</body>
</html>
