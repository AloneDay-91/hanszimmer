<?php

session_start();
$_SESSION['information'] = '';

// Vérification de sélection d'un fichier
// Récupération des attributs du fichier (nom,type,taille)
if (!empty($_FILES)) {
    $image_nom = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_taille = $_FILES['image']['size'];
    $image_temporaire = $_FILES['image']['tmp_name'];
    $image_error = $_FILES['image']['error'];

} else {
    echo 'Vous devez sélectionner un fichier';
}

// Début Vérification de la conformité
$affichage_erreurs = '';
$erreurs = 0;

// Test si pas d'erreur de sélection
if ($image_error == 0) {
    // Test format du fichier en fonction de l'extension
    if (($image_type != 'image/jpeg')) {
        $affichage_erreurs .= 'Le fichier n\'est pas au format jpeg ou extension invalide<br>';
        $erreurs++;
    }

    // Test format du fichier avec la fonction exif_imagetype
    if ((exif_imagetype($image_temporaire) != IMAGETYPE_JPEG)) {
        $affichage_erreurs .= 'Ce fichier n\'est pas une image jpeg<br>';
        $erreurs++;
    }

    // Test taille du fichier
    if ($image_taille > (500 * 1024)) {
        $affichage_erreurs .= "Taille de l'image supérieur à 500Ko";
        $erreurs++;
    }

} else {
    $affichage_erreurs = 'Impossible de télécharger le fichier, erreur de sélection<br>';
}

if ($erreurs == 0) {                                    // Si fichier conforme
    // On récupére le nombre de fichiers dans images/galerie
    $nbFichiers = -2;                                        // Le dossier contient deux fichier cachés . et ..
    $dossier = opendir("../images/galerie");
    while ($fichier = readdir($dossier)) {
        $nbFichiers++;
    }

// On renomme le fichier - imageN.jpg
    $image_num = $nbFichiers + 1;
    $image_nom = 'image' . $image_num . '.jpg';

// On fixe le nom complet de la destination (chemin relatif/imageN.jpg)
    $destination = "../images/galerie/" . $image_nom;

// On déplace le fichier dans son emplacement définitif
    if (move_uploaded_file($image_temporaire, $destination)) {
        $erreurs = 0;
    } else {
        $affichage_erreurs = 'Erreur de téléchargement<br>';
        $erreurs++;
    }
}

// Détermination du message à affichée après les tentatives d'envoi
$affichage_retour = 'Téléchargement terminé avec succès';

// On affiche les erreurs
if ($erreurs != 0) {
    $affichage_retour = "Echec de l'ajout du fichier | $affichage_erreurs";
}

$_SESSION['information'] = $affichage_retour;
header('location: ../galerie.php');
?>