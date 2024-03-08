<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Galerie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Retrouvez différentes images de Hans Zimmer.">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./images/logo_hans_zimmer.webp">
</head>
<body>

<?php
// Appel du bloc Header et du Menu
require('header.php');
?>

<main>
    <div id="container-galerie">
        <h1 id="title-banniere-donnees">Galerie</h1>
        <?php
        if (isset($_SESSION['information'])) {
            echo '<label>
                <input type="checkbox" class="alertCheckbox" autocomplete="off" />
                <div class="alert warning">
                    <span class="alertClose">X</span>
                    <span class="alertText">'.$_SESSION['information'].'</span>
                </div>
            </label>'."\n";
            session_unset();
        }
        ?>
        <div id="container-upload">
            <form action="traitements/upload_image.php" method="post" enctype="multipart/form-data">
                <div class="input-file-container">
                    <input type="file" name="image" class="input-file" accept=".jpeg, .jpg">
                    <label tabindex="0" for="image" class="input-file-trigger">
                        <p id="icone-add">
                            <svg class="svg-icon" viewBox="0 0 20 20">
                                <path fill="currentColor" d="M13.388,9.624h-3.011v-3.01c0-0.208-0.168-0.377-0.376-0.377S9.624,6.405,9.624,6.613v3.01H6.613c-0.208,0-0.376,0.168-0.376,0.376s0.168,0.376,0.376,0.376h3.011v3.01c0,0.208,0.168,0.378,0.376,0.378s0.376-0.17,0.376-0.378v-3.01h3.011c0.207,0,0.377-0.168,0.377-0.376S13.595,9.624,13.388,9.624z M10,1.344c-4.781,0-8.656,3.875-8.656,8.656c0,4.781,3.875,8.656,8.656,8.656c4.781,0,8.656-3.875,8.656-8.656C18.656,5.219,14.781,1.344,10,1.344z M10,17.903c-4.365,0-7.904-3.538-7.904-7.903S5.635,2.096,10,2.096S17.903,5.635,17.903,10S14.365,17.903,10,17.903z"></path>
                            </svg>
                        </p>
                        <span>Glisser et déposez ou cliquez pour choisir une image</span>
                        <p class="file-return"></p>
                    </label>
                </div>
                <input type="submit" value="Télécharger">
                <p id="taille">Taille maximale : 500 ko | Formats acceptés : .jpeg, .jpg</p>
            </form>
        </div>
        <div class="grid-container">
            <?php
            $nbFichiers=-2; // Le dossier contient deux fichier cachés . et ..
            $dossier= opendir("./images/galerie");
            while ($fichier = readdir($dossier)) {
                $nbFichiers++;
            }
            $i=1; // On initialise i à 1
            while($i <= $nbFichiers) {
                echo '<div class="block-img-galerie">';
                echo '<img src="./images/galerie/image'. $i .'.jpg" alt="Image des concert de Hans Zimmer">';
                echo '</div>';
                $i++;
            }
            ?>
        </div>
    </div>
</main>

<?php
// Appel du Pied de Page
require('footer.php');
?>
<script src="./js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>