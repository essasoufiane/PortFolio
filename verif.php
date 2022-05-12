<?php

// var_dump($_POST);

$mdp = $_POST['mdp'];
$bdd = new PDO('mysql:host=localhost;dbname=gta_rp','root',''); // connexion à la BDD

$email = $_POST["email"]; 

$req  = $bdd->prepare("SELECT * FROM utilisateurs WHERE email='".$email."'"); // la requete de comparaison

$req->execute(); // envoi et execution en BDD 


$result = $req->fetchAll(PDO::FETCH_ASSOC); // recupere les datas de la req on met dans un tableau

$req->closeCursor(); // coupe la connection avec la bdd 


$hash = $result[0]['mdp'];
// var_dump($hash);
echo password_verify($mdp, $hash);

if (password_verify($mdp, $hash)) {
    var_dump($result);
    # code...
}else {
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php require_once "./partials/header.php" ?>
    <div class="container d-flex flex-column text-center">
        <div class="pt-5">

            <p class="badge badge-danger">verifie ton adresse mail ou ton mots de passe</p>
        </div>

        <a class="pt-3" href="connexion.php"><button class="btn btn-primary">réessayer</button></a>
        
    </div>

    </body>
    </html>
    <?php
    
}

// // crypter le mdp

// echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

// // verifier le mdp

// $hash = '$2y$10$vPoOM64jhGLyOq9.qJhA9edM3a9ONTZsnKION0Z8aXkYmrbqFwppS';

// if(password_verify('rasmuslerdorf', $hash)) {
//     echo 'Le mot de passe est valide !';
// } else {
//     echo 'Le mot de passe est invalide.';
// }