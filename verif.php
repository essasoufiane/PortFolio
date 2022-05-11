<?php

// var_dump($_POST);

$mdp = $_POST['mdp'];
$bdd = new PDO('mysql:host=localhost;dbname=gta_rp','root',''); // connexion à la BDD

$email = $_POST["email"]; 

$req  = $bdd->prepare("SELECT * FROM utilisateurs WHERE email='".$email."'"); // la requete de comparaison

$req->execute(); // envoi et execution en BDD 


$result = $req->fetchAll(PDO::FETCH_ASSOC); // recupere les datas de la req on met dans un tableau

$req->closeCursor(); // coupe la connection avec la bdd 

var_dump($result);

$hash = $result[0]['mdp'];
// var_dump($hash);
echo password_verify($mdp, $hash);

// // crypter le mdp

// echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

// // verifier le mdp

// $hash = '$2y$10$vPoOM64jhGLyOq9.qJhA9edM3a9ONTZsnKION0Z8aXkYmrbqFwppS';

// if(password_verify('rasmuslerdorf', $hash)) {
//     echo 'Le mot de passe est valide !';
// } else {
//     echo 'Le mot de passe est invalide.';
// }