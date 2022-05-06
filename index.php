<?php require_once "partials/header.php" ?>
<?php require_once "partials/listeDesjoueurs.php" ?>



<html>
<body>

<!-- <form action="insert.php" method="post">

Nom d'utilisateur: <input type="text" name="nom" />
Votre idée: <input type="text" name="idee" />


<input type="submit" />
</form> -->
<form class="text-center" action="insert.php" method="get">

Nom d'utilisateur: <input type="text" name="nom" />
<!-- Votre idée: <input type="text" name="idee" /> -->

<button class="btn btn-info" type="submit">Envoyer</button>

</form>

</body>
</html>
