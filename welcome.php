<html>
<body>
<?php  // REGION d'origine d'une PLANTE
try {
    $dns = 'mysql:host=localhost;dbname=serres'; // dbname : nom de la base
    $utilisateur = 'root'; // root sur vos postes
    $motDePasse = ''; // pas de mot de passe sur vos postes
    $connection = new PDO( $dns, $utilisateur, $motDePasse );
  } catch (Exception $e) {
      echo "Connexion à MySQL impossible : ", $e->getMessage();
      die();
  }
 
echo "<h1>Cliquez sur le lien pour afficher le n° de la region d'origine de la plante</h1>";
$select = $connection->query("SELECT * FROM plante");
$select->setFetchMode(PDO::FETCH_OBJ);
while($enregistrement = $select->fetch())
{
 echo "<a href='http://127.0.0.1/TPPHP/detailRegion.php?noregion=".$enregistrement->noregion."'>".$enregistrement->nomplante.'</a><BR>';
}
?>

<?php
if(!file_exists("welcome.txt")) { // Si le fichier n'existe pas
  die("File not found"); // l'exécution du script est stoppée
} else {
  $file=fopen("welcome.txt","r"); // Le fichier existe, on peut l'ouvrir, l’exécution du script se poursuit.
}
?>
</body>
</html>