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
    <link rel="stylesheet" href="css/style2.css">

    <!-- <link rel="stylesheet" href="css/main.scss"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@700;900&display=swap" rel="stylesheet">
    <title>Tox Dev-Web</title>
</head>
<body>
    <!-- NOM + MENU -->
    <header id="header">
        <?php include('includes/header.php'); ?>
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




            <?php if(!isset($_POST['email']) || !isset($_POST['title'])): ?>
                <!-- Afficher formulaire -->
                <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
                    <!-- EMAIL -->
                    <div id="divEmail">
                        <label for="email"></label>
                        <input type="email" name="email" id="email" placeholder="Votre @mail*" required>
                        <img src="images/illustration-forms.svg" alt="">
                    </div>
                    <!-- TITLES -->
                    <label for="title"></label>
                    <input type="text" name="title" id="title" minlength="5" maxlength="120" placeholder="Votre titre*" required>
                    <!-- MESSAGE -->
                    <label for="texts"></label>
                    <textarea name="texts" id="texts" minlength="20" maxlength="4000" placeholder="Votre texte*" required></textarea>
                    <p>* Champs obligatoires</p>
                    <!-- SEND -->
                    <button type="submit" id="formSend">Envoyer</button>
                </form>

            <?php elseif(isset($_POST['email']) || isset($_POST['title'])): ?>
                <!-- Reponse reception formulaire -->
                <?php
                    echo "<script type='text/javascript'>document.location.replace('index.php#meContacter');</script>";
                    $email = $_POST['email'];
                    $title = $_POST['title'];
                    $message = $_POST['texts'];

                    $sendMail = mail('toxyhgaming@gmail.com', $title, $message, $entete);
                ?>

                <section id="reponseForm">

                    <?php if($sendMail): ?>
                        <span id="checkCircle" class="material-symbols-outlined">check_circle</span>
                        <?php echo('<h3>Votre message est envoyé.</h3>'); ?>

                        <div id="rappelFormInfo">
                        <h4>Rappel de vos informations:</h4>
                        <p><?php echo '<span>Email: </span>' . $email; ?></p>
                        <p><?php echo '<span>Objet: </span>' . $title; ?></p>
                        <p><?php echo '<span>Message: </span>' . $message; ?></p>
                    </div>

                    <?php else: ?>
                        <span id="cancelCircle" class="material-symbols-outlined">cancel</span>

                        <?php echo("<h3>L'envoi de votre message n'a pas fonctionné.</h3>"); ?>
                    
                    <?php endif; ?>
                </section>

            <?php else: echo "<h3>Erreur affichage formulaire</h3>"?> 

            <?php endif; ?>
        </section>

        <footer>
            <?php include('includes/footer.php'); ?>
        </footer>



    </main>

</body>
</html>