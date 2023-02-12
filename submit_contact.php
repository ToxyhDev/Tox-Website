<?php

if (!isset($_POST['email']) || !isset($_POST['texts'])) {

    echo('<p>Il faut un email et un message valides pour soumettre le formulaire.</p>');
    return;
}
if (isset($_POST['texts'])) {
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    // $entete .= 'From: toxyhgaming@gmail.com' . "\r\n";
    $entete .= 'Reply-to: ' . $_POST['email'];
}

$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['texts'];

$sendMail = mail('toxyhgaming@gmail.com', $title, $message, $entete);
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
    <!-- <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@700;900&display=swap" rel="stylesheet">
    <title>Tox Dev-Web</title>
</head>
<body>
    <h1>Message bien reçu !</h1>
            
        <div class="card">
                
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Email</b> : <?php echo($email); ?></p>
                <p class="card-text"><b>Titre</b> : <?php echo($title); ?></p>
                <p class="card-text"><b>Messages</b> : <?php echo strip_tags($message); ?></p>
                <?php if ($sendMail) { echo('<h2>Votre message est envoyé</h2>');
                } else {
                    echo('<h2>Votre message est refusé</h2>');
                } ?>
            </div>
        </div>
</body>
</html>