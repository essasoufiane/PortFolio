<?php

var_dump($_POST);

$bdd = new PDO('mysql:host=localhost;dbname=gta_rp','root',''); // connexion à la BDD

$mdpcript = $_POST["mdp"]; 

$req  = $bdd->prepare("SELECT * FROM utilisateurs WHERE mdp='".$mdpcript."'"); // la requete 

$req->execute(); // envoi et execution en BDD 


$result = $req->fetchAll(PDO::FETCH_ASSOC); // recupere les datas de la req on met dans un tableau

$req->closeCursor(); // coupe la connection avec la bdd 

var_dump($result);