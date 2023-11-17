<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Ajout de région</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
        require_once('../conf/serre.php');

        $nom = $_POST['numero'];
        $prenom = $_POST['region'];

        $stmt = $connexion->prepare("INSERT INTO region (noregion, nomregion) VALUES (:noregion, :nomregion)");
        $stmt->bindParam(':noregion', $nom);
        $stmt->bindParam(':nomregion', $prenom);

        // Insertion d'une ligne
        $stmt->execute();

        // Vérification du nombre de lignes affectées
        $nb_ligne_affectees = $stmt->rowCount();
        echo $nb_ligne_affectees . " ligne(s) insérée(s).<BR>";
        ?>
    </body>
</html>