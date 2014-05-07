<?php

    // Destinataire du mail
    $mail = "[e-mail du destinataire]";
    // Sujet du mail
    $sujet = "[Formulaire de commande]";
    
    // Chaine permettant de différencier les différentes parties du mail
    $limite = '_parties_'.md5(uniqid (rand()));
    $headers.= " boundary=\"----=$limite\"\n\n";

    // Première partie, corps du mail en HTML
    $texte = "------=$limite\n";
    $texte.= "Content-type: text/html; charset=\"iso-8859-1\"\n\n";
    $texte.="<HTML><HEAD></HEAD><BODY>Oh un mail !</BODY></HTML>";

    // Attacher une pièce jointe
    // Lecture du fichier
    $fichier = '[Matrice_surpersonnalisation_finale_2014_04_21.xlsx]';
    $contenu = file_get_contents($fichier);
    $attachement = "\n------=$limite\n";
    // Le content type permet de définir que la PJ est à ouvrir via une appli.
    $attachement .= "Content-Type: application/vnd.ms-excel; name=\"[Matrice_surpersonnalisation_finale_2014_04_21.xlsx]\"\n";
    $attachement .= "Content-Transfer-Encoding: base64\n";
    $attachement .= "Content-Disposition: attachment; filename=\"[Matrice_surpersonnalisation_finale_2014_04_21.xlsx]\"\n\n";
    // On joint le fichier en l'encodant en base 64, compatible avec le sserveurs SMTP
	// Utilisationde chunk_split pour les retours à la ligne automatiques
    $attachement .= chunk_split(base64_encode($contenu));

    // Envoi du mail
    mail($destination, $sujet, $texte.$attachement, $headers);

   

$smarty->display($_SERVER['DOCUMENT_ROOT'].'/webprojet/CCLeclour/ApplicationLeclour/templates/comptable/envoiFormulaire.tpl');
?>