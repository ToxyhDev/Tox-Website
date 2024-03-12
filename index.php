<?php
if (isset($_POST['texts'])) {
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: contact@tox-dev.fr' . "\r\n";
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
    <!-- <link rel="stylesheet" href="css/style.prefix.css"> -->
    <!-- <link rel="stylesheet" href="css/sass.css"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon-16x16.png" type="image/x-icon">
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
                <p class="maBio-blob__p">Je me suis formé en autodidacte sur le site d'OpenClassrooms, sur les langages HTML, CSS, PHP, JavaScript et récemment React.<br>
                J'ai également appris à utiliser le préprocesseur Sass, afin d'avoir du code CSS plus facile à maintenir.</p>
            </div>

            <div class="maBio-blob">
                <img class="maBio-blob__img" src="images/illustration-blob-cible.svg" alt="">
                <p class="maBio-blob__p">Mon objectif ! Réaliser le plus possible de nouveau projet, en cherchant toujours à intégrer des fonctionnalités qui me pousseront à apprendre des nouvelles choses.</p>
            </div>
        </section>

        <!-- MES PROJETS -->
        <section id="mesProjets" class="sections sections--paire mesProjets">
            <h2 class="sections__title">MES PROJETS</h2>

            <section class="mesProjets-carousel">
                <!-- caroussel -->

                <div class="mesProjets-carousel__slide">
                    <h3 class="mesProjets-carousel__slide--title">Tooly</h3>
                    <div class="mesProjets-carousel__slide-desc">
                        <img  class="mesProjets-carousel__slide-desc__img" src="images/illustration-interface.svg" alt="">
                        <p class="mesProjets-carousel__slide-desc__p">Mon dernier projet, c'est application web développer avec React et Sass.<br> Elle permet aux utilisateurs d'avoir accès à des accessoires virtuels comme un générateur de lettre ou des dés, dans l'objectif d'aider lors de parties de jeux de société par exemple.</p>
                    </div>
                    <a class="btn" href="https://toxyhdev.github.io/Tooly-Games/" target="_blank" rel="noopener noreferrer">Lien</a>
                </div>

                <div class="mesProjets-carousel__slide">
                    <h3 class="mesProjets-carousel__slide--title">Max Portfolio</h3>
                    <div class="mesProjets-carousel__slide-desc">
                        <img  class="mesProjets-carousel__slide-desc__img" src="images/illustration-portable.svg" alt="">
                        <p class="mesProjets-carousel__slide-desc__p">Création d'un site WEB portfolio, le site était destiné à un graphiste qui avait besoin d'afficher ses designs, dans le format d'une gallerie d'images. 
                        Il avait également besoin d'un caroussel, pour pouvoir faire défiler plusieurs designs sur le même thème.</p>
                    </div>
                    <a class="btn" href="/projets/maxportfolio/index.html" target="_blank" rel="noopener noreferrer">Lien</a>
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