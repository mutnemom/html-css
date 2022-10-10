<?php
session_start();
require_once "connect_dziennik.php";
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

// if (isset($_GET['aktywnosc']) && isset($_GET['czas']) && isset($_GET['dystans'])) {
// $aktywnosc = $_GET['aktywnosc'];

// $czas = $_GET['czas'];
// $dystans = $_GET['dystans'];


// }
$id = $_REQUEST['id'];
$aktywnosc2 = $_REQUEST['aktywnosc'];
$czas2 = $_REQUEST['czas'];
$dystans2 = $_REQUEST['dystans'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="edytujAktywnosc.css">
  <title>Document</title>
</head>
<body>
  <form action="" method="GET">
    <section>
      <div style="display: none"> 
        <p>id</p>
        <input type="text" name="id" value='<?php echo "$id" ?>'>
      </div>
      <div> 
        <p>Aktywność:</p>
        <p>Czas:</p>
        <p>Dystans (km):</p>
      </div>
      <div>
        <input type="text" name="aktywnosc" value='<?php echo "$aktywnosc2" ?>' required>
        <input type="time" name="czas" step="2" value="<?php echo "$czas2" ?>" min="00:00:01">
        <input type="number" name="dystans" step="0.01" value="<?php echo "$dystans2" ?>" required>
      </div>
    </section>
    <div> 
      <input type="submit" value="Zapisz!" name="submit">
    </div>
  </form>
</body>
</html>
<?php
if (isset($_GET['submit']) && ($_GET['submit']))
{
  $aktywnosc = $_GET['aktywnosc'];
  $czas = $_GET['czas'];
  $dystans = $_GET['dystans'];
$id = $_GET['id'];



  $query = "UPDATE aktywnosci SET aktywnosc='$aktywnosc', czas='$czas', dystans='$dystans' WHERE id='$id'";
  $data = mysqli_query($polaczenie,$query);
  if ($data) {
    echo "It works";
    header('Location: dziennik.php');
  } else {
    echo "Error";
  }
}

?>
