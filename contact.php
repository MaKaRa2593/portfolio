<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $message = $_POST['message'];


    $destinataire = 'vandevillegaetane@gmail.com'; 

  e
    $sujet = 'Nouveau message depuis votre site web';


    $contenu = "Email: $email\n\nMessage:\n$message";


    $envoi = mail($destinataire, $sujet, $contenu);

    if ($envoi) {
        echo 'Votre message a bien été envoyé. Nous vous répondrons dès que possible.';
    } else {
        echo 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.';
    }
}
?>
