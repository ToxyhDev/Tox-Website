<?php
if (isset($_POST['texts'])) {
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: toxyhgaming@gmail.com' . "\r\n";
    $entete .= 'Reply-to: ' . $_POST['email'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@700;900&display=swap" rel="stylesheet">
    <title>Tox Dev-Web</title>
</head>
<body>
    <!-- NAVBAR -->
    <header>
        <?php include('includes/header.php'); ?>
    </header>

    <main>
        <!-- HEADER -->
        <header class="header sections sections--paire"> 
            <div class="header-text">
                <h2 class="header-text__title">TOX</h2>
                <p class="header-text__body">Dev WEB Junior</p>
            </div>
            <div class="header-img">
                <img src="images/img-firstPage.svg" alt="Image d'un developpeur">
            </div>
        </header>

        <!-- MA BIO -->
        <section id="maBio" class="sections sections--impaire maBio">
            <h2 class="sections__title">MA BIO</h2>

            <div class="maBio-blob">
                <img class="maBio-blob__img" src="images/illustration-blob-pc.svg" alt="">
                <p class="maBio-blob__p">Je me suis formé en autodidacte sur le site d'OpenClassrooms sur les langages HTML, CSS et JavaScript.</p>
            </div>

            <div class="maBio-blob">
                <img class="maBio-blob__img" src="images/illustration-blob-cible.svg" alt="">
                <p class="maBio-blob__p">Avec les bases enseignées je fais en sorte de réaliser le plus possible de nouveau projet afin de chercher à approfondir mes connaissances.</p>
            </div>
        </section>

        <!-- MES PROJETS -->
        <section id="mesProjets" class="sections sections--paire mesProjets">
            <h2 class="sections__title">MES PROJETS</h2>

            <section class="mesProjets-carousel">
                <!-- caroussel -->

                <div class="mesProjets-carousel__slide">
                    <h3 class="mesProjets-carousel__slide--title">Jeu le Petit BAC</h3>
                    <div class="mesProjets-carousel__slide-desc">
                        <img  class="mesProjets-carousel__slide-desc__img" src="images/illustration-interface.svg" alt="">
                        <p class="mesProjets-carousel__slide-desc__p">C'est un site WEB qui permet de générer une lettre aléatoirement pour jouer au jeu du petit BAC.</p>
                    </div>
                    <a class="btn" href="../jeuLePetitBac/index.html" target="_blank" rel="noopener noreferrer">Lien</a>
                </div>

                <div class="mesProjets-carousel__slide">
                    <h3 class="mesProjets-carousel__slide--title">Max Portfolio</h3>
                    <div class="mesProjets-carousel__slide-desc">
                        <img  class="mesProjets-carousel__slide-desc__img" src="images/illustration-portable.svg" alt="">
                        <p class="mesProjets-carousel__slide-desc__p">Création d'un site web sous le format d'un portfolio d'images, avec la création d'une gallerie d'image qui met en valeur chaques images.</p>
                    </div>
                    <a class="btn" href="../MaxPortfolio/index.html" target="_blank" rel="noopener noreferrer">Lien</a>
                </div>

            </section>


        </section>

        <section id="meContacter" class="sections sections--impaire meContacter">
            <h2 class="sections__title">ME CONTACTER</h2>

            <?php include('includes/forms.php'); ?>
        </section>

        <footer>
            <?php include('includes/footer.php'); ?>
        </footer>



    </main>

</body>
</html>