<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez l'univers musical magique de Hans Zimmer sur notre site dédié. Explorez ses compositions épiques qui ont marqué l'histoire du cinéma, plongez-vous dans sa carrière exceptionnelle avec plus de 150 crédits de films, et restez à jour avec les dernières actualités et événements. Explorez la richesse émotionnelle de la musique de ce maestro contemporain. Bienvenue dans le monde captivant de Hans Zimmer, où chaque note raconte une histoire épique.">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./images/logo_hans_zimmer.webp">
</head>
<body>
<?php
// Appel du bloc Header et du Menu>
require('header.php');
?>

<main>
    <div class="container banniere" data-aos="fade-in"
         data-aos-duration="2000">
        <div id="banniere">
            <div>
                <img src="./images/zimmer_orchestre.webp" alt="Hans Zimmer et son orchestre">
                <h1 id="title-banniere">Hans Zimmer</h1>
            </div>
        </div>
    </div>
    <div class="block-bio" data-aos="fade-up"
         data-aos-duration="2000">
        <div class="images">
            <img src="./images/zimmer_accueil.webp" alt="Hans zimmer en noir & blanc">
        </div>
        <div class="biotext" data-aos="fade-up"
             data-aos-duration="2000">
            <h2>Biographie</h2>
            <p>Hans Zimmer, né en Allemagne en 1957, est un compositeur et producteur de musique de film reconnu
                mondialement. Avec une carrière qui s'étend sur plusieurs décennies, Zimmer a marqué l'histoire du
                cinéma en créant des bandes sonores mémorables qui ont transcendé les écrans et touché le cœur du
                public.</p>
        </div>
    </div>
    <div class="block-rewards" data-aos="fade-up"
         data-aos-duration="2000">
        <div class="images">
            <img src="./images/zimmer_nolan.webp" alt="Hans zimmer et Christopher Nolan">
        </div>
        <div class="rewardtext" data-aos="fade-up"
             data-aos-duration="2000">
            <h2>Les prix</h2>
            <p>Avec plus de 150 musiques de films à son actif, Hans Zimmer a remporté de nombreux prix prestigieux, dont
                l'oscar pour la meilleure musique de film. Sa capacité à capturer l'essence émotionnelle
                d'une histoire à travers sa musique en fait un créateur incontournable dans le monde du cinéma.</p>
        </div>
    </div>
    <div class="block-calltoaction">
        <div id="calltoaction" data-aos="fade-up"
             data-aos-duration="2000">
            <h2>Explorez les détails</h2>
            <p>Plongez dans les détails de chaque album, y compris les titres des pistes, les années de sortie et les informations sur les films associés.</p>
            <a href="./donnees.php">Voir les données</a>
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <a href="./donnees.php">
                            <img src="./images/album_thin_red_line.webp" alt="Album Thin Red Line">
                        </a>
                    </div>
                    <div class="slide">
                        <a href="./donnees.php">
                            <img src="./images/album_mi2.webp" alt="Album Mission Impossible 2">
                        </a>
                    </div>
                    <div class="slide">
                        <a href="./donnees.php">
                            <img src="./images/album_batman_begins.webp" alt="Album Batman Begin">
                        </a>
                    </div>
                    <div class="slide">
                        <a href="./donnees.php">
                            <img src="./images/album_pearl_harbor.webp" alt="Album Pearl Harbor">
                        </a>
                    </div>
                    <div class="slide">
                        <a href="./donnees.php">
                            <img src="./images/album_the_da_vinci_code.webp" alt="Album The Da Vinci Code">
                        </a>
                    </div>
                    <div class="slide">
                        <a href="./donnees.php">
                            <img src="./images/album_pirate_des_caraibes.webp" alt="Album Pirate des Caraibes">
                        </a>
                    </div>
                    <div class="slide">
                        <a href="./donnees.php">
                            <img src="./images/album_kungfu.webp" alt="Album Kung Fu Panda">
                        </a>
                    </div>
                    <div class="slide">
                        <a href="./donnees.php">
                            <img src="./images/album_the_dark_knight.webp" alt="Album Batman The Dark Knight">
                        </a>
                    </div>
                    <div class="slide">
                        <a href="./donnees.php">
                            <img src="./images/album_inception.webp" alt="Album Inception">
                        </a>
                    </div>
                    <div class="slide">
                        <a href="./donnees.php">
                            <img src="./images/album_interstellar.webp" alt="Album Interstellar">
                        </a>
                    </div>
                    <div class="slide">
                        <a href="./donnees.php">
                            <img src="./images/album_dunkirk.webp" alt="Album Dunkerque">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block" data-aos="fade-up"
         data-aos-duration="2000">
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/0YC192cP3KPCRWx8zr8MfZ?utm_source=generator" title="Page spotify sur Hans Zimmer" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    </div>
</main>

<?php
// Appel du Pied de Page
require('footer.php');
?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>