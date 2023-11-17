<!DOCTYPE html>
<html>
<head>
<title>Résultat authentification</title>
</head>
<body>
<?php
// On se connecte
require_once('../conf/connexion.php');

    $mel = $_POST['mel'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Requête préparée
    $stmt = $connexion->prepare("SELECT numero FROM utilisateur WHERE mel=:mel AND mot_de_passe=:mot_de_passe");


    // Liaison des paramètres
    $stmt->bindParam(':mel', $mel);
    $stmt->bindParam(':mot_de_passe', $mot_de_passe);

    // Exécution de la requête
    $stmt->execute();

    // Traitement du résultat
    $enregistrement = $stmt->fetch(PDO::FETCH_OBJ);

    if ($enregistrement) {
        // si $enregistrement n'est pas vide = on a trouvé quelque chose -> on est connecté
        echo '<h1>Connexion réussie !</h1>';
    } else {
        // La requête n'a pas retourné de résultat, on n'a pas trouvé de ligne correspondant au mel et mot de passe
        echo "Échec de la connexion.";
    }
?>
</body>
</html>
