

<?PHP
// $bdd = new PDO('mysql:host=localhost;dbname=gta_rp', "root", ""); // connexion à la BDD


// // mysql_select_db ("maBase", $con) ;
// //en stocke la date du jour dans la variable $date_inscri
// $date_inscri=date('d-m-y h:i:s');

// $nom = $_POST["nom"];
// $idee = $_POST["idee"];


//         //On insère les données reçues
// $sth = $bdd->prepare("
//     INSERT INTO idee(user, idee, date)
//     VALUES(:user, :idee, :date)");
// $sth->bindParam(':user',$prenom, PDO::PARAM_STR);
// $sth->bindParam(':idee',$mail, PDO::PARAM_STR);
// $sth->bindParam(':date',$date_inscri, PDO::PARAM_STR_CHAR);
// $sth->execute( $params = null);
 

// var_dump($_GET);
if (!empty($_GET)) {
    $nom = $_GET['nom'];
    $idee = $_GET['idee'];
    echo "Bonjour, " . $nom . " <br> meric pour votre idée , je la trouve genial" . $idee;
}else{
    header("Location: index.php");
}

