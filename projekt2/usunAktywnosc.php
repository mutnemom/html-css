<?php

session_start();
require_once "connect_dziennik.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
if ($polaczenie->connect_errno != 0) {
    echo "Error: " . $polaczenie->connect_errno;
} else {
  
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM aktywnosci WHERE id='".$id."'";
    $polaczenie->query($sql);

    header('Location: dziennik.php');
}
