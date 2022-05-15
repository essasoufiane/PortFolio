<?php require_once "./partials/header.php" ?>

<html>

<body>
    <div class="container">
        <h1 class="p-4 my-5 bg-info text-white text-center">Connexion</h1>

        <p class="alert text-info text-center alert-info">Connecter vous avec vos informations !</p>

        <form class=" d-flex flex-column"  action="verif.php" method="post">
            <div class="form-group">
                <label for="email">Ton Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="exemple@exemple.fr">
            </div>
            <div class="form-group">
                <label for="mdp">Ton mots de passe</label>
                <input type="password" name="mdp" class="form-control" id="mdp" placeholder="mots de passe">
                <small id="emailHelp" class="form-text text-muted">Si tu te souviens plus de ton mots de passe clique sur le lien ci-dessous.</small>
            </div>
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