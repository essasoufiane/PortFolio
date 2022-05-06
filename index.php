<?php require_once "partials/header.php" ?>

<?php require_once "partials/listeDesjoueurs.php" ?>



<html>
<body>

<!-- <form action="insert.php" method="post">

Nom d'utilisateur: <input type="text" name="nom" />
Votre idée: <input type="text" name="idee" />


<input type="submit" />
</form> -->
<div class="container">


    <form class="text-center form-groupe" action="insert.php" method="get">
    
    <label for="nom">Nom d'utilisateur:</label>
    <input class="form-control  my-2" type="text" name="nom" id="nom"/>
    <label for="nom">Votre idée:</label>
    <input class="form-control  my-2" type="text" name="idee" id="idee"/>
    <!-- Votre idée: <input type="text" name="idee" /> -->
    
    <button class="btn btn-info my-2" type="submit">Envoyer</button>
    
    </form>
</div>

</body>
</html>
<?php require_once "partials/listeDesjoueurs.php" ?>

