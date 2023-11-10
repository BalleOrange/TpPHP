<html>
<body> 
 

<?php

$txtChamp = $_GET["txtChamp"];
$txtInstant = $_GET["txtInstant"];

$y =  $txtChamp * $txtInstant * $txtInstant / 2;
$v = $txtChamp * $txtInstant;

echo "<table border='1'>";
echo "<tr>";
echo "<td>Distance parcourue après $txtInstant secondes  =  $y mètres.</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Vitesse acquise après $txtInstant secondes  = $v mètres/secondes.</td>";
echo "</tr>";
echo "</table>";



    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>Temps écoulé (s)</td>";
    echo "<td>Vitesse acquise (m/s)</td>";
    echo "</tr>";
    for ($i = 0; $i < $_GET["txtInstant"] + 1; $i++) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>", $i*$txtChamp, "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>

</body>
</html>