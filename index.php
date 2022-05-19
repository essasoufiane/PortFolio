<?php require_once "partials/header.php" ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <html prefix="og: http://ogp.me/ns#">
    <meta property="og:title" content="Développeur Web/Mobile & Soufiane Essaouari" />
    <meta property="og:description" content="PortFolio Développeur Soufiane Essaouari & Web/Mobile" />
    <meta property="og:image" content="https://soufiane-essaouari.fr/assets/images/bannière-portfolio.jpg" />
    <meta property="og:url" content="https://soufiane-essaouari.fr/" />
    <meta property="og:type" content="website">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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
                    <span class="hvr-grow-rotate">
                        Développeur Web et Web mobile
                    </span>
                </h1>
                <h2 class="p-5 text-center text-white">
                    <span class="hvr-grow-rotate">
                        Soufiane Essaouari
                    </span>
                </h2>
                <div class="d-flex justify-content-center pb-3">

                    <button type="button" class=" btn btn-outline-light"><a class="text-white" href="#">Mon porifl GitHub</a></button>
                </div>
            </section>
            <!------------------- Le texte urgence stage --------------->

            <section class="pb-5">
                <div class="wrapper">
                    <marquee behavior="alternate"><span class="font-weight-bolder text-danger hvr-pulse">Urgent ! Je cherche un stage !</span></marquee>
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
            <article data-aos-duration="3000" data-aos="fade-up" class="py-4">
                <div class="card shadow" style="width: 18rem;">
                    <img class="card-img-top" src="assets/images/poo_mvc_fromscratchCapture.png" alt="image site php">
                    <div class="card-body">
                        <h5 class="card-title">POO MVC fromScratch</h5>
                        <p class="card-text">J'ai coder ce site avec une approche conceptuelle orienté objet et une architecture MVC totalement fromscratch (à la main). Cliquez <a href="https://github.com/essasoufiane/siteWeb_PourVTC_en_POO_MVC">ici</a> pour voir le code sur GitHub, et sur le bouton ci dessous pour voir le site et le tester.</p>
                        <a href="MVC-POO-PHP-FromScratch-main/index.php" class="btn btn-primary hvr-grow">Voir le site</a>
                    </div>
                </div>

            </article>
            <article data-aos-duration="3000" data-aos="fade-up" class="py-4">
                <div class="card shadow" style="width: 18rem;">
                    <img class="card-img-top" src="assets/images/screen-alpha-series.jpg" alt="image blog apha series">
                    <div class="card-body">
                        <h5 class="card-title">Alpha Séries</h5>
                        <p class="card-text">J'ai coder ce site avec HTML/CSS en from scratch, vous pouvez le voir sur GitHub.</p>
                        <a href="https://essasoufiane.github.io/alpha-series/" class="btn btn-primary hvr-grow">Voir le site</a>
                    </div>
                </div>

            </article>
            <article data-aos-duration="3000" data-aos="fade-up" class="py-4">
                <div class="card shadow" style="width: 18rem;">
                    <img class="card-img-top" src="assets/images/cvCapture.png" alt="image blog cryptomonnaie">
                    <div class="card-body">
                        <h5 class="card-title">CV</h5>
                        <p class="card-text">Vous pouvez telecharger mon CV en pdf ici.</p>
                        <a href="assets/ESSAOUARI_Soufiane.pdf" download="ESSAOUARI_Soufiane.pdf" class="btn btn-primary hvr-grow">Telecharger le CV</a>

                    </div>
                </div>

            </article>

            <article data-aos-duration="3000" data-aos="fade-up" class="py-4">
                <div class="card shadow" style="width: 18rem;">
                    <img class="card-img-top" src="assets/images/cryptocurrency-6601591.jpg" alt="image blog cryptomonnaie">
                    <div class="card-body">
                        <h5 class="card-title">CryptoManiax</h5>
                        <p class="card-text">J'ai créé ce blog qui traite les sujets cryptomonnaies et blockchain avec WordPress.</p>
                        <a href="https://cryptomaniax.fr/" class="btn btn-primary hvr-grow">Voir le site</a>
                    </div>
                </div>

            </article>
            <article data-aos-duration="3000" data-aos="fade-up" class="py-4">
                <div class="card shadow" style="width: 18rem;">
                    <img class="card-img-top" src="assets/images/enregistrementImage.png" alt="image formulaire">
                    <div class="card-body">
                        <h5 class="card-title">formulaire login</h5>
                        <p class="card-text">J'ai créé un système de login vous pouvez vous enregistrer et vous connecter et vous serais enregister dans la base de données de ce site vous serais afficher dans la page <a href="utilisateurs.php">utilisateurs</a> .</p>
                        <a href="enregistrement.php" class="btn btn-primary hvr-grow">S'enregistrer</a>
                    </div>
                </div>

            </article>
            <article data-aos-duration="3000" data-aos="fade-up" class="py-4">
                <div class="card shadow" style="width: 18rem;">
                    <img class="card-img-top" src="assets/images/PortfolioCapture.png" alt="Portfolio">
                    <div class="card-body">
                        <h5 class="card-title">Portfolio</h5>
                        <p class="card-text">J'ai coder ce site from scratch avec PHP , vous pouvez voir le code sur GitHub.</p>
                        <a href="https://github.com/essasoufiane/PortFolio" class="btn btn-primary hvr-grow">Voir le code</a>
                    </div>
                </div>

            </article>
        </section>
    </main>

</body>

</html>
<?php require_once "partials/footer.php" ?>