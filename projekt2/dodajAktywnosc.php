<?php

session_start();
require_once "connect_dziennik.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
if ($polaczenie->connect_errno != 0) {
    echo "Error: " . $polaczenie->connect_errno;
} else {

    $id = $_POST['id'];
    $aktywnosc = $_POST['aktywnosc'];
    $czas = $_POST['czas'];
    $dystans = $_POST['dystans'];
    $iduser = $_SESSION['id'];

    $sql = "INSERT INTO aktywnosci (id, aktywnosc, czas, dystans, id_user) VALUES ('$id', '$aktywnosc','$czas','$dystans', '$iduser')";
    $polaczenie->query($sql);

    header('Location: dziennik.php');
}
