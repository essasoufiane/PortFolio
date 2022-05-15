<?php require_once "partials/header.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essaouari Soufiane</title>
</head>

<body>
    <!-- ---------------section pricincpal------------------ -->
    <main>
        <div style=" background-attachment: fixed, scroll; background-image: url('assets/images/network-4894813_1920.jpg');
        min-height: 350px;
        text-decoration: none;">
            <section class="banniere d-flex flex-column">
                <h1 class="pt-5 pb-2 text-center text-white">
                    Développeur Web et Web mobile
                </h1>
                <h2 class="p-5 text-center text-white">
                    Soufiane Essaouari
                </h2>
                <div class="d-flex justify-content-center pb-3">

                    <button type="button" class=" btn btn-outline-light"><a class="text-white" href="#">Mon porifl GitHub</a></button>
                </div>
            </section>
            <!------------------- Le texte urgence stage --------------->
            <section class="pb-5">
                <div class="wrapper">
                    <marquee behavior="alternate"><span class="font-weight-bolder text-danger">Urgent ! Je cherche un stage !</span></marquee>
                </div>
                <!----------------- section Présentation ----------- -->
                <div class="mx-auto card text-white bg-info" style="max-width: 18rem;">
                    <div class="card-header font-weight-bold text-center">Présentation</div>
                    <div class="card-body">
                        <!-- <h5 class="card-title">Info card title</h5> -->
                        <p class="card-text"> Je suis étudiant Développeur Web et Web mobile chez webforce3 à Mérignac, je termine la formation le 20 juin et je cherche un stage pour 2 mois ou plus à partir du 20 juin sur bordeaux et ses alentours.</p>
                    </div>
                </div>

            </section>
        </div>
        <!-- ----------------section compétences------------ -->

        <section>
            <h2 class="text-center list-group-item-info list-group-item list-group-item-action">Compétences</h2>
            <div class="d-flex justify-content-around flex-wrap font-weight-bold">
                <ul>
                    <li>Angular 2+</li>
                    <li>Symfony</li>
                    <li>POO(orienté object)</li>
                    <li>PHP</li>
                    <li>SQL/MySQL/NoSQL</li>
                    <li>JavaScript</li>
                    <li>jQuery</li>
                </ul>
                <ul>
                    <li>HTML5/CSS3</li>
                    <li>Ux/Ui Design</li>
                    <li>Bootstrap</li>
                    <li>WordPress</li>
                    <li>FIGMA/Adobe XD</li>
                    <li>Adobe Ps,Ae,Pr,Ai</li>
                    <li>Shopify</li>
                </ul>
            </div>
        </section>
        <!-- ------------------------articles 1 ------------------ -->
        <section class="d-flex flex-wrap justify-content-around">
        <article class="py-4 ">
            <div class="card shadow" style="width: 18rem;">
                <img class="card-img-top" src="assets/images/screen-alpha-series.jpg" alt="image blog apha series">
                <div class="card-body">
                    <h5 class="card-title">Alpha Séries</h5>
                    <p class="card-text">J'ai coder ce site avec HTML/CSS en from scratch, vous pouvez le voir sur GitHub.</p>
                    <a href="https://essasoufiane.github.io/alpha-series/" class="btn btn-primary">Voir le site</a>
                </div>
            </div>

        </article>
        <article class="py-4 ">
            <div class="card shadow" style="width: 18rem;">
                <img class="card-img-top" src="assets/images/cryptocurrency-6601591.jpg" alt="image blog cryptomonnaie">
                <div class="card-body">
                    <h5 class="card-title">CryptoManiax</h5>
                    <p class="card-text">J'ai créé ce blog qui traite les sujets cryptomonnaies et blockchain avec WordPress.</p>
                    <a href="https://cryptomaniax.fr/" class="btn btn-primary">Voir le site</a>
                </div>
            </div>

        </article>
        <article class="py-4 ">
            <div class="card shadow" style="width: 18rem;">
                <img class="card-img-top" src="assets/images/enregistrementImage.png" alt="image formulaire">
                <div class="card-body">
                    <h5 class="card-title">formulaire login</h5>
                    <p class="card-text">J'ai créé un système de login vous pouvez vous enregistrer et vous connecter et vous  serais enregister dans la base de données de ce site vous serais afficher dans le tableau ci-dessous.</p>
                    <a href="enregistrement.php" class="btn btn-primary">S'enregistrer</a>
                </div>
            </div>

        </article>
        <article class="py-4 ">
            <div class="card shadow" style="width: 18rem;">
                <img class="card-img-top" src="assets/images/PortfolioCapture.png" alt="Portfolio">
                <div class="card-body">
                    <h5 class="card-title">Portfolio</h5>
                    <p class="card-text">J'ai coder ce site from scratch avec PHP , vous pouvez voir le code sur GitHub.</p>
                    <a href="https://github.com/essasoufiane/PortFolio" class="btn btn-primary">Voir le code</a>
                </div>
            </div>

        </article>
    </section>
    </main>

</body>

</html>