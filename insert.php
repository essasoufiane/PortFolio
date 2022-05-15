
<?PHP

$regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";

// var_dump($_POST);
// -----------controle du forumaire------------
if ((!empty($_POST["email"] && $_POST["mdp"] && $_POST["nom"] && $_POST["prenom"] && $_POST["code_postal"] && $niveau = $_POST["age"])) && (preg_match("#^[0-9]{5}$#",$_POST['code_postal'])) && (preg_match($regex, $email)))  {
// je stock les données dans des variables
$email = htmlspecialchars($_POST["email"]);
$mdp = $_POST["mdp"];
$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$code_postal = intval($_POST["code_postal"]);
$age = $_POST["age"];
$genre  = $_POST["inlineRadioOptions"];
// crypter le mdp
$mdpCrypte = password_hash($mdp, PASSWORD_ARGON2ID);
}





// //on stocke la date du jour dans la variable $date_creation
$date_creation=date('d-m-y h:i:s');

$objetPDO = new PDO('mysql:host=localhost;dbname=gta_rp', "root", ""); // connexion à la BDD

// Préparer la requete d'insertion 

$pdoStat = $objetPDO->prepare('INSERT INTO utilisateurs VALUES (NULL, :email, :mdp, :nom, :prenom, :code_postal, :age, :genre, :date_creation)');


// je lie chaque marqueur à une valeur

if (isset($email)) {
    # code...
    $pdoStat->bindValue(':email', $email, PDO::PARAM_STR_CHAR);
    $pdoStat->bindValue(':mdp', $mdpCrypte, PDO::PARAM_STR_CHAR);
    $pdoStat->bindValue(':nom', $nom, PDO::PARAM_STR);
    $pdoStat->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $pdoStat->bindValue(':code_postal', $code_postal, PDO::PARAM_INT);
    $pdoStat->bindValue(':age', $age, PDO::PARAM_INT);
    $pdoStat->bindValue(':genre', $genre, PDO::PARAM_STR);
    $pdoStat->bindValue(':date_creation', $date_creation);
}

// var_dump($_GET);

// execution de la requete préparée

$insertIsOk = $pdoStat->execute();

if($insertIsOk){
    $message = 'le contact a ete ajouter a la BDD';
}else{
    $message = "echec de l'insertion";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once "partials/header.php" ?>

<div class="container text-center">

    
        <p><?=$message?></p>
</div>
</body>
</html>