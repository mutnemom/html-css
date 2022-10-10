<?php

session_start();
if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
{
  header('Location: dziennik.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Logowanie</title>
</head>
<body>
  <form action="zaloguj.php" method="POST" enctype="multipart/form-data">
    <div>Login: <input type="text" name="login" maxlength="8"></div>
    <div>Hasło: <input type="password" name="haslo" maxlength="15"></div>
    <input type="submit" value="Zaloguj się!">
  </form>
  <?php
  if (isset($_SESSION['blad'])) 
  {
  echo $_SESSION['blad'];
  }
  ?>
</body>
</html>
