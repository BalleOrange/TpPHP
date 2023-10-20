<html>
<body> 
 
<?php
$un = $_GET["txtDepart"];

echo "Valeur pour le rang 0 : $un<br>";

for ($i = 0; $i != $_GET["txtRang"] + 1; $i++)
{
    $calc = $un / 4 + 2;
    $un = $calc;
    echo "Valeur pour le $i", "eme rang : $un<br>"; 
}

?>

</body>
</html>