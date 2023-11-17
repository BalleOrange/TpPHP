<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Lister serre</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    require_once('../conf/serres.php');

    if (!isset($_POST["btnEnvoyer"])) {
        echo '<form action="listerserre.php" method="post">
        Numéro serre : <input type="text" name="numero"><br>
        Nom serre : <input type="text" name="nom"><br>
        <input type="submit" name="btnEnvoyer">
        </form>';
    } else {
        try {
            $numero = $_POST["numero"];
            $nom = $_POST["nom"];

            $stmt = $connexion->prepare("INSERT INTO SERRE(noserre, nomserre) VALUES(:numero, :nom)");
            $stmt->bindParam(':numero', $numero);
            $stmt->bindParam(':nom', $nom);

            $stmt->execute();
            
            echo $stmt->rowCount(), " ligne(s) a(ont) été insérée(s).";
        } catch (Exception $e) {
            echo "Une erreur est survenue lors de l'insertion : " . $e->getMessage();
        }

        $stmt = $connexion->prepare("SELECT * FROM SERRE");
        $stmt->execute();

        echo "<table border='1'>";
        echo "<tr><th>Numéro serre</th><th>Nom serre</th></tr>";

        while($enregistrement = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo "<tr>";
            echo "<td>" . $enregistrement -> noserre. "</td>";
            echo "<td> <a href='http://localhost/TPPHP/php/listercontenu.php?noserre=" . $enregistrement -> noserre. "'>" . $enregistrement -> nomserre . "</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
