<?php require_once "./partials/header.php" ?>

<html>

<body>
    <div class="container">
        <h1 class="p-4 my-5 bg-info text-white text-center">Rejoindre le club</h1>

        <p class="alert text-info text-center alert-info">Insriver joue et rejoignez le serveur GTA RP sur fiveM !</p>

        <form class=" d-flex flex-column"  action="insert.php" method="post">
            <div class="form-group">
                <label for="email">Ton Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="exemple@exemple.fr">
                <small id="emailHelp" class="form-text text-muted">Ton adresse mail te servira a te connecter.</small>
            </div>
            <div class="form-group">
                <label for="mdp">Ton mots de passe</label>
                <input type="password" name="mdp" class="form-control" id="mdp" placeholder="mots de passe">
            </div>
            <label for="nom">Ton nom</label>
            <input class="form-control  my-2" type="text" name="nom" id="nom" placeholder="François" />

            <label for="prenom">Ton prénom</label>
            <input class="form-control  my-2" type="text" name="prenom" id="prenom" placeholder="Dupont" />

            <label for="code_postal">Ton code postal</label>
            <input class="form-control  my-2" type="text" name="code_postal" id="code_postal" placeholder="13000" />

            <label for="age">Ton âge</label>
            <input class="form-control  my-2" type="text" name="age" id="age" placeholder="Ton âge" />

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Homme">
                <label class="form-check-label" for="inlineRadio1">Homme</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Femme">
                <label class="form-check-label" for="inlineRadio2">Femme</label>
            </div>

            <br>

            <!-- <label for="avatar">Mettez Ton photo de traitre:</label>
            <input type="file" id="avatar" name="photo" accept="image/png, image/jpeg"> -->
            <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="justify-content-center mt-3 btn btn-primary">S'enregister</button>
        </form>

    </div>
</body>

</html>