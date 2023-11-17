<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Lister serre</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
        require_once('../conf/serre.php');
        $stmt = $connexion->prepare("SELECT * FROM REGION");

        $stmt->execute();

        echo "<table border='1'>";

        while($enregistrement = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo "<tr>";
            echo "<td>" . $enregistrement -> noregion. "</td>";
            echo "<td><a href='http://localhost/TPPHP/php/plantepouruneregion.php?noregion=" . $enregistrement->noregion . "'>" . $enregistrement->nomregion . "</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>
    </body>
</html>
