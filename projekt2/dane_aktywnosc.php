<?php

require_once "connect_dziennik.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

$query = "SELECT * FROM aktywnosci WHERE id_user= " . $_SESSION['id'];
$data = mysqli_query($polaczenie, $query);
$total = mysqli_num_rows($data);

if ($total > 0) {
    // output data of each row
    $count = 1;
    while ($result = mysqli_fetch_assoc($data)) {
        // echo "<p>Aktywność: " . $row["aktywnosc"] . '</p>';
        // echo "<p>Czas: " . $row["czas"] . "</p>";
        // echo "<p>Dystans: " . $row["dystans"] . " km" . "</p>";
        // echo "<form action='usunAktywnosc.php' method='POST'><p>" . '<button>'. $row["id"] . $row["usun"] . "Usuń" . "</button></p></form>";
        // //echo "<p><button action>" . $row["edytuj"] . "Edytuj" . "</button></p>";
        // echo "--------------------------";

        echo "
        <table>
        <tbody>
        <tr>
        <td align='center'>" . $count . "</td>
        <td align='center'>" . $result['aktywnosc'] . "</td>
        <td align='center'>" . $result['czas'] . "</td>
        <td align='center'>" . $result['dystans'] . "</td>
        <td align='center'><a href='edytujAktywnosc.php?id=$result[id]&aktywnosc=$result[aktywnosc]&czas=$result[czas]&dystans=$result[dystans]'>Edytuj</a></td>
        <td align='center'><a href='usunAktywnosc.php?id=$result[id]'>Usuń</a></td>
        </tr>
        </tbody>
        </table>
        ";
        $count++;
    }
} else {
    echo "0 results";
}
