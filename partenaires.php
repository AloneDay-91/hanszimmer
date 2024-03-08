<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Partenaires</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Retrouvez mes partenaires sur ce projet.">
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
    <div id="container-partenaires">
        <div class="bloc-title-teams">
            <h1 class="title-banniere-teams" data-aos="fade-right"
                data-aos-duration="1200">Partenaires</h1>
            <p class="text-banniere-teams" data-aos="fade-right"
               data-aos-duration="2000">Retrouvez mes partenaires sur ce projet</p>
        </div>
        <div class="bloc-text-teams" data-aos="fade-in"
             data-aos-duration="2000">
            <p>Nous formons un groupe de jeunes amis créatifs animés par des idées ambitieuses. C'est pourquoi nous
                avons choisi de collaborer et de nous soutenir mutuellement pour concrétiser nos projets individuels. En
                combinant nos compétences respectives, nous avons réussi à réaliser des projets de qualité.
            </p>
            <img src="./images/logo_MEHL.png" alt="Logo de l'entreprise">
        </div>
        <div id="bloc-card" data-aos="fade-up"
             data-aos-duration="2000">
            <div class="card-partenaires">
                <img src="./images/elouan.jpg" alt="Portrait de Elouan BRUZEK">
                <div class="overlay">
                    <p>Hans Zimmer</p>
                    <p id="openModalBtn1">En savoir plus</p>
                </div>
                <p class="text-card-galerie">Elouan BRUZEK</p>
            </div>
            <div class="card-partenaires">
                <img src="./images/houda.jpg" alt="Portrait de Houda EDDAOUDI">
                <div class="overlay">
                    <p>Discover the world</p>
                    <p id="openModalBtn2">En savoir plus</p>
                </div>
                <p class="text-card-galerie">Houda EDDAOUDI</p>
            </div>
            <div class="card-partenaires">
                <img src="./images/lucy.png" alt="Portrait de Lucy FENEYROL">
                <div class="overlay">
                    <p>Red Carpet Reel</p>
                    <p id="openModalBtn3">En savoir plus</p>
                </div>
                <p class="text-card-galerie">Lucy FENEYROL</p>
            </div>
            <div class="card-partenaires">
                <img src="./images/mathilde.jpg" alt="Portrait de Mathilde PERIES">
                <div class="overlay">
                    <p>Lights On Colors</p>
                    <p id="openModalBtn4">En savoir plus</p>
                </div>
                <p class="text-card-galerie">Mathilde PERIES</p>
            </div>
            <div class="card-partenaires">
                <img src="./images/matteo.jpg" alt="Portrait de Mattéo MASULLO">
                <div class="overlay">
                    <p>New Wave</p>
                    <p id="openModalBtn5">En savoir plus</p>
                </div>
                <p class="text-card-galerie">Mattéo MASULLO</p>
            </div>
        </div>
    </div>
    <div class="bloc-106-teams">
        <h2 class="title-banniere-teams" data-aos="fade-right" data-aos-duration="1200">Charte de projet</h2>
        <p class="text-banniere-teams" data-aos="fade-right" data-aos-duration="2000">Retrouvez les documents du
            projet</p>
        <div class="bloc-btn" data-aos="fade-in"
             data-aos-duration="2000">
            <a href="./pdf/SAE106_TPF_charte-de-projet_LucyFeneyrol_HoudaEddaoudi_MathildePeries_ElouanBruzek_MatteoMassulo.pdf"
               target="_blank">Charte de projet</a>
            <a href="./pdf/SAE106_plan_de_projet.pdf" target="_blank">Planning & plan</a>
        </div>
    </div>
    <div id="myModal1" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="bloc-content-modal">
                <img src="./images/elouan.jpg" alt="Portrait de Elouan BRUZEK">
                <div>
                    <p class="title-modal">Hans Zimmer</p>
                    <p class="subtitle-modal">Elouan Bruzek | Développeur web back</p>
                    <p class="text-modal">Hans Zimmer est un compositeur de musique de film. Il est capable de combiner
                        l'orchestration d'instruments traditionnels avec des instruments électroniques. Ses magnifiques
                        compositions ont marqué des films emblématiques, qui s'étendent bien au-delà du domaine
                        cinématographique, le rendant célèbre dans la musique moderne. C'est pour ça que mon choix s'est
                        orienté vers ce compositeur.</p>
                    <a class="btn-website-modal" href="http://mmi23f03.sae105.ovh/" target="_blank">Voir le site</a>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal2" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="bloc-content-modal">
                <img src="./images/houda.jpg" alt="Portrait de Houda EDDAOUDI">
                <div>
                    <p class="title-modal">Discover the world</p>
                    <p class="subtitle-modal">Houda EDDAOUDI | Graphiste</p>
                    <p class="text-modal">La découverte de nouvelles cultures, de nouveaux horizons, de nouveaux pays
                        sont autant d'éléments que j'aime et qui m'ont poussé à choisir le thème du voyage. J'ai donc
                        voulu laisser la possibilité aux personnes de voyager à travers mon site. Ils pourront donc
                        explorer toutes les spécificités des différents pays du monde.</p>
                    <a class="btn-website-modal" href="http://mmi23f05.sae105.ovh/" target="_blank">Voir le site</a>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal3" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="bloc-content-modal">
                <img src="./images/lucy.png" alt="Portrait de Lucy FENEYROL">
                <div>
                    <p class="title-modal">Red Carpet Reel</p>
                    <p class="subtitle-modal">Lucy FENEYROL | Dévellopeur web front</p>
                    <p class="text-modal">Passionnée de cinéma, mon site a pour vocation de célébrer les prestigieux
                        Academy Awards, également renommés sous le nom de la cérémonie des Oscars. Il se consacre à
                        explorer en profondeur cet événement emblématique du monde du cinéma, mettant en lumière
                        l'excellence artistique et les moments mémorables qui marquent cette cérémonie.</p>
                    <a class="btn-website-modal" href="http://mmi23f06.sae105.ovh/" target="_blank">Voir le site</a>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal4" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="bloc-content-modal">
                <img src="./images/mathilde.jpg" alt="Portrait de Mathilde PERIES">
                <div>
                    <p class="title-modal">Lights On Colors</p>
                    <p class="subtitle-modal">Mathilde PERIES | Chef de projet</p>
                    <p class="text-modal">J'aime énormément la musique en générale. Que ce soit le rap, le RnB,
                        l'afrobeat et bien d'autres, j'adore découvrir de nouveaux artistes et par conséquent de
                        nouvelles musiques. C'est pourquoi j'ai choisi de faire mon site sur les shows Colors. Cette
                        plateforme met en avant des artistes du monde entier et leur permet une certaine visibilité.</p>
                    <a class="btn-website-modal" href="http://mmi23f11.sae105.ovh/" target="_blank">Voir le site</a>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal5" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="bloc-content-modal">
                <img src="./images/matteo.jpg" alt="Portrait de Mattéo MASULLO">
                <div>
                    <p class="title-modal">New Wave</p>
                    <p class="subtitle-modal">Mattéo MASULLO | Responsable administratif</p>
                    <p class="text-modal">La new wave dans le rap est un mouvement musical très récent apporter par des
                        artistes que j'apprécie particulièrement comme La Fève qui excelle dans ce milieu. Étant un
                        grand fan de la musique je me devais d'en parler, les instrumentales diversifiées les
                        mélancolies et les voix de ces jeunes talents sont extraordinaires et faciles à s'approprier
                        selon votre humeur et ouvert à tous. C'est la raison pour laquelle je l'ai choisi, ce genre
                        musical fait partie de mon quotidien.</p>
                    <a class="btn-website-modal" href="http://mmi23f10.sae105.ovh/" target="_blank">Voir le site</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
// Appel du Pied de Page
require('footer.php');
?>

<script>
    var btns = document.querySelectorAll("p");

    // Boucle à travers chaque bouton et attache un gestionnaire d'événements
    btns.forEach(function (btn) {
        btn.addEventListener("click", function () {
            // Récupère le numéro d'identifiant unique à partir de l'ID du bouton
            var modalId = this.id.replace("openModalBtn", "");
            var modal = document.getElementById("myModal" + modalId);
            modal.style.display = "block";
        });
    });

    // Récupère les éléments <span> qui ferment les fenêtres modales
    var spans = document.querySelectorAll(".close");

    // Boucle à travers chaque élément <span> et attache un gestionnaire d'événements
    spans.forEach(function (span) {
        span.addEventListener("click", function () {
            // Récupère le numéro d'identifiant unique à partir de l'ID du span
            var modalId = this.parentElement.parentElement.id.replace("myModal", "");
            var modal = document.getElementById("myModal" + modalId);
            modal.style.display = "none";
        });
    });

</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="./js/script.js"></script>
</body>
</html>