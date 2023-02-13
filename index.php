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
    <!-- <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@700;900&display=swap" rel="stylesheet">
    <title>Tox Dev-Web</title>
</head>
<body>
    <!-- NOM + MENU -->
    <header id="header">
        <div id="nameHeader">
            <h1>TOX</h1>
        </div>
        <nav>
            <div id="navMobile">
                <section id="socialNetworks">
                    <a id="instagram" class="socialNetwork" href="http://" target="_blank">
                        <img src="images/icons-instagram.svg" alt="">
                    </a>
                    <a id="twitter" class="socialNetwork" href="http://" target="_blank">
                        <img src="images/icons-twitter.svg" alt="">
                    </a>
                    <a id="github" class="socialNetwork" href="http://" target="_blank">
                        <img src="images/icons-github.svg" alt="">
                    </a>
                </section>
                <span class="material-symbols-outlined">
                    menu
                </span>
            </div>
            <div id="navComputer">
                <ul>
                    <li><a href="#">MA BIO</a></li>
                    <li><a href="#">MES PROJETS</a></li>
                    <li><a href="#">ME CONTACTER</a></li>
                </ul>
                <section id="socialNetworks">
                    <a id="instagram" class="socialNetwork" href="http://" target="_blank">
                        <img src="images/icons-instagram.svg" alt="">
                    </a>
                    <a id="linkedin" class="socialNetwork" href="http://" target="_blank">
                        <img src="images/icons-linkedin.svg" alt="">
                    </a>
                    <a id="github" class="socialNetwork" href="http://" target="_blank">
                        <img src="images/icons-github.svg" alt="">
                    </a>
                </section>
            </div>

        </nav>

    </header>
    <main>
        <!-- FIRST PAGE -->
        <header id="firstPage">
            <div id="titleFirstPage">
                <h2>TOX</h2>
                <p>Dev WEB Junior</p>
            </div>
            <div id="imgFirstPage">
                <img src="images/img-firstPage.svg" alt="Image d'un developpeur">
            </div>


        </header>

        <!-- MA BIO -->
        <section id="maBio">
            <h2 class="titleSection">MA BIO</h2>

            <div id="blobPc" class="blobSection">
                <img class="imgBlob" src="images/illustration-blob-pc.svg" alt="">
                <p>Je me suis formé en autodidacte sur le site d'OpenClassrooms sur les langages HTML, CSS et JavaScript.</p>
            </div>

            <div id="blobCible" class="blobSection">
                <img class="imgBlob" src="images/illustration-blob-cible.svg" alt="">
                <p>Avec les bases enseignées je fais en sorte de réaliser le plus possible de nouveau projet afin de chercher à approfondir mes connaissances.</p>
            </div>
        </section>

        <!-- MES PROJETS -->
        <section id="mesProjets">
            <h2 class="titleSection">MES PROJETS</h2>

            <section id="carousselProjet">

                <div id="projet1" class="projets">
                    <h3>Jeu le Petit BAC</h3>
                    <div class="descProjet">
                        <img src="images/illustration-interface.svg" alt="" class="imgDescProjet">
                        <p>C'est un site WEB qui permet de générer une lettre aléatoirement pour jouer au jeu du petit BAC.</p>
                    </div>
                    <a href="../jeuLePetitBac/index.html" target="_blank" rel="noopener noreferrer">Lien</a>
                </div>

                <div id="projet2" class="projets">
                    <h3>Max Portfolio</h3>
                    <div class="descProjet">
                        <img src="images/illustration-portable.svg" alt="" class="imgDescProjet">
                        <p>Création d'un site web sous le format d'un portfolio d'images, avec la création d'une gallerie d'image qui met en valeur chaques images.</p>
                    </div>
                    <a href="../MaxPortfolio/index.html" target="_blank" rel="noopener noreferrer">Lien</a>
                </div>

            </section>


        </section>

        <section id="meContacter">
            <h2 class="titleSection">ME CONTACTER</h2>

            <form action="submit_contact.php" method="post">
                <!-- EMAIL -->
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="Votre @mail*" required>

                <!-- TITLES -->
                <label for="tile"></label>
                <input type="text" name="title" id="title" minlength="5" placeholder="Votre titre*" required>
                <!-- <select name="chooseTitle" id="chooseTitle">
                    <option value="information">Demande de renseignement</option>
                    <option value="bug">J'ai rencontré un bug sur le site</option>
                </select> -->

                <!-- MESSAGE -->
                <label for="texts"></label>
                <textarea name="texts" id="texts" minlength="20" maxlength="2000" placeholder="Votre texte*" required></textarea>
                <p>* Champs obligatoires</p>
                <!-- SEND -->
                <button type="submit" id="formSend">Envoyer</button>

            </form>
        </section>



    </main>

</body>
</html>