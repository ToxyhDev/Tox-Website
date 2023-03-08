<?php if(!isset($_POST['email']) || !isset($_POST['title'])): ?>

    <!-- Afficher formulaire -->
    <form class="forms" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
        <!-- EMAIL -->
        <div class="forms-email">
            <label for="email"></label>
            <input class="forms-email__case forms--input" type="email" name="email" id="email" placeholder="Votre @mail*" required>
            <img class="forms-email--img" src="images/illustration-forms.svg" alt="">
        </div>
        <!-- TITLES -->
        <label for="title"></label>
        <input class="forms-title__case forms--input" type="text" name="title" id="title" minlength="5" maxlength="120" placeholder="Votre titre*" required>
        <!-- MESSAGE -->
        <label for="texts"></label>
        <textarea class="forms-texts__case forms--input" name="texts" id="texts" minlength="20" maxlength="4000" placeholder="Votre texte*" required></textarea>
        <p class="forms__attention">* Champs obligatoires</p>
        <!-- SEND -->
        <button type="submit" class="btn">Envoyer</button>
    </form>




<?php elseif(isset($_POST['email']) || isset($_POST['title'])): ?>
    <!-- Reponse reception formulaire -->
    <?php
        echo("<script type='text/javascript'>document.location.replace('index.php#meContacter');</script>");
        $email = $_POST['email'];
        $title = $_POST['title'];
        $message = $_POST['texts'];

        $sendMail = mail('toxyhgaming@gmail.com', $title, $message, $entete); 
    ?>

<section class="forms-response">

    <?php if($sendMail): ?>
        <span class="forms-response__valid material-symbols-outlined">check_circle</span>
        <?php echo('<h3 class="forms-response--title">Votre message est envoyé.</h3>'); ?>

        <div class="forms-response__infoValid">
        <h4 class="forms-response__infoValid--title">Rappel de vos informations:</h4>
        <p class="forms-response__infoValid--body">
            <?php echo '<span class="forms-response__infoValid--span">
            Email: </span>' . $email; ?></p>
        <p class="forms-response__infoValid--body">
            <?php echo '<span class="forms-response__infoValid--span">
            Objet: </span>' . $title; ?></p>
        <p class="forms-response__infoValid--body">
            <?php echo '<span class="forms-response__infoValid--span">
            Message: </span>' . $message; ?></p>
    </div>

    <?php else: ?>
        <span class="forms-response__invalid material-symbols-outlined">cancel</span>

        <?php echo('<h3 class="forms-response--title">L\'envoi de votre message n\'a pas fonctionné.</h3>'); ?>
    
    <?php endif; ?>
</section>

<?php else: echo "<h3>Erreur affichage formulaire</h3>"?> 

<?php endif; ?>