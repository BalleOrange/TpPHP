<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Serre</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
        require_once('../conf/serre.php');
        $t = $_GET["noregion"];
        $stmt = $connexion->prepare("SELECT * FROM PLANTE INNER JOIN REGION ON PLANTE.noregion = REGION.noregion WHERE REGION.noregion = $t");

        $stmt->execute();

        echo "<table border='1'>";

        while($enregistrement = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo "<tr>";
            echo "<td>" . $enregistrement -> noplante. "</td>";
            echo "<td>" . $enregistrement -> nomplante . "</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>
    </body>
</html>
