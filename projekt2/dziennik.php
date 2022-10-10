<?php

session_start();

if (!isset($_SESSION['zalogowany'])) {
    header('Location: index.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style-dziennik.css">
  <title>Dziennik wyników</title>
</head>
<body>
    <?php

echo "<p>Cześć " . $_SESSION['user'] . '! [<a href="logout.php">Wyloguj się</a>]</p>';


?>
  <form action="dodajAktywnosc.php" method="POST">
  <section>
  <div>
      <p>Aktywność:</p>
      <p>Czas:</p>
      <p>Dystans (km):</p>

    </div>
    <div>
      <input type="text" name="aktywnosc" required>
      <input type="time" name="czas" step="1" value="00:00:00" min="00:00:01">
      <input type="number" name="dystans" step="0.01" min="0.01" required>
    </div>
    </section>
    <div>
    <input type="submit" value="Dodaj!">
    </div>
  </form>
  <article>
  <?php
include 'dane_aktywnosc.php';

?>
</article>



</body>
</html>