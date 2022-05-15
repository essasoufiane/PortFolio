<?php require_once "partials/header.php" ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>header</title>
</head>


<div class="container">
        <h1 class="p-4 my-5 bg-info text-white text-center">Calculateur de charge</h1>

        <p class="alert text-info text-center alert-info">Ce calculateur est basé sur les taux pour une microentreprise (22% URSSAF et 1,7% impots sur revenus), on retiendra aussi 10% de caruburant pour un taxi par exemple ou les charges annexes pour une autre entreprise</p>

        <form class=" d-flex flex-column"  method="get">
            <div class="form-group">
                <label for="CA">inserez votre chiffre d'affaire :</label>
                <input type="number" class="form-control" id="CA" name="CA" placeholder="35000€">
            </div>
            <div class="form-group">
                <label for="prenom">Votre prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="François">
            </div>
            <div class="form-group">
                <label for="assurance">Le montant de vos charge fixe mentuelle:</label>
                <input type="number" name="assurance" class="form-control" id="assurance" placeholder="275€">
                <small id="emailHelp" class="form-text text-muted">Ici vous pouvez mettre par exemple l'assurance automobile de votre taxi.</small>
            </div>
            <!-- <label for="avatar">Mettez Ton photo de traitre:</label>
            <input type="file" id="avatar" name="photo" accept="image/png, image/jpeg"> -->
            <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="justify-content-center mt-3 btn btn-primary">Calculer tout de suite</button>
        </form>

    </div>

</html>


<?php
// var_dump($_GET);
// ---calcul d'impot
class tauxDimposition
{

    public $client = null;
    public $CA;
    public $tauxUrssaf = 0.22;
    public $tauxImpot = 0.017;
    public $assurance = null;


    function calcule($CA)
    {
        $u = $CA * $this->tauxUrssaf;
        $i = $CA * $this->tauxImpot;
        $e = $CA / 10;
        $a = 10 * $this->assurance;
        $r = ($CA - ($u + $i)) - ($e + $a);
        echo "Bonjour $this->client , <br> Pour un chiffre d'affaire de $CA € vous devais payer $u € d'urssaf et $i € d'impots.<br>On estimera une depense en carburant de 10% ce qui fait un total de $e € pour $CA € de CA <br>
        Vous payer $this->assurance par mois ce qui nous donne une total de $a par an <br> Il vous restera $r €";
    }
}

if (!empty($_GET)) {

    if (!empty($_GET["prenom"] && $_GET["CA"] && $_GET["assurance"])) {
    
        $soufiane = new tauxDimposition();
        $soufiane->client = $_GET["prenom"];
        $soufiane->assurance = $_GET["assurance"];
        $soufiane->calcule($_GET["CA"]);
    }
}else{
    echo 'Inserer vos données';
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<?php require_once "partials/footer.php" ?>