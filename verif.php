<?php

// var_dump($_POST);


$bdd = new PDO('mysql:host=localhost;dbname=gta_rp','root',''); // connexion à la BDD

$email = $_POST["email"]; 
$mdp = $_POST["mdp"]; 

// --object verification d'email-----
class verification{
    public $email;
    public $emailV;
    
    function verifEmail($email)
    {
        $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
        $this->emailV = preg_match($regex, $email) ;
        
    }

}

// instensification de l'object 
$x = new verification();

$x->verifEmail($email);



// var_dump($x->emailV);


if ($x->emailV) {
    // echo 'youhou';
    $req  = $bdd->prepare("SELECT * FROM utilisateurs WHERE email='".$email."'"); // la requete de comparaison

    $req->execute(); // envoi et execution en BDD 
    
    $result = $req->fetchAll(PDO::FETCH_ASSOC); // recupere les datas de la req on met dans un tableau
    
    $req->closeCursor(); // coupe la connection avec la bdd 
    
    $hash = $result[0]['mdp'];
// var_dump($hash);
// echo password_verify($mdp, $hash);

if (password_verify($mdp, $hash)) {
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

            <p class="badge badge-success">Bien jouer t'es connecter !</p>
        </div>

        
    </div>

    </body>
    </html>
    <?php

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

            <p class="badge badge-danger">verifie ton mots de passe</p>
        </div>

        <a class="pt-3" href="connexion.php"><button class="btn btn-primary">réessayer</button></a>
        
    </div>

    </body>
    </html>
    <?php
    
}
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

            <p class="badge badge-danger">verifie ton adresse email</p>
        </div>

        <a class="pt-3" href="connexion.php"><button class="btn btn-primary">réessayer</button></a>
        
    </div>

    </body>
    </html>
    <?php
    
}

