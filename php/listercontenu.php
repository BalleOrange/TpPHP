<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Serre</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
        require_once('../conf/serres.php');
        $t = $_GET["noserre"];
        $stmt = $connexion->prepare("SELECT * FROM PLANTE INNER JOIN EMPLACEMENT ON PLANTE.noplante = EMPLACEMENT.noplante INNER JOIN SERRE ON EMPLACEMENT.noserre = SERRE.noserre WHERE SERRE.noserre = $t");

        $stmt->execute();

        echo "<table border='1'>";

        while($enregistrement = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo "<tr>";
            echo "<td>" . $enregistrement -> noplante. "</td>";
            echo "<td>" . $enregistrement -> nomplante . "</a></td>";
            echo "<td>" . $enregistrement -> noregion . "</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>
    </body>
</html>
