<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Données</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Retrouvez toutes les données des différents albums de Hans Zimmer.">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./images/logo_hans_zimmer.webp">
</head>
<body>

<?php
// Appel du bloc Header et du Menu
require('header.php');
?>

<main>
    <div class="container banniere" data-aos="fade-in"
         data-aos-duration="2000">
        <div id="banniere">
            <div>
                <img src="./images/banniere.webp" alt="Bannière avec Hans Zimmer">
            </div>
        </div>
    </div>
    <h1 id="title-banniere-donnees">Différentes données sur les albums</h1>
    <div id="container-table">
        <table id="montableau">
            <thead>
            <tr>
                <th>Couverture</th>
                <th>Album</th>
                <th>Titre</th>
                <th>Date</th>
                <th>Artistes</th>
                <th>Durée</th>
                <th>Nombres d'écoutes</th>
                <th>Extrait</th>
            </tr>
            </thead>
            <tbody>
            <?php
            // Déclaration du fichier et de son chemin dans une variable
            $fichier = './datas/data.json';

            // Lecture du fichier - On stocke le contenu dans une autre variable
            $tabAlbumsJSON = file_get_contents($fichier);

            // Décodage du contenu du fichier et transformation en tableau PHP (array)
            $tabAlbumsPHP = json_decode($tabAlbumsJSON, true);

            foreach ($tabAlbumsPHP as $album) {
                echo '<tr>';
                    echo '<td><img class="couverture-albums" src="' . $album['Couverture'] . '" alt="Couverture de l\'album"></td>';
                    echo '<td>' . $album['Album'] . '</td>';
                    echo '<td>' . $album['Titre'] . '</td>';
                    echo '<td>' . $album['Date'] . '</td>';
                    echo '<td>' . $album['Artistes'] . '</td>';
                    echo '<td>' . $album['Duree'] . '</td>';
                    echo '<td>' . $album['Ecoute'] . '</td>';
                echo '<td>';
                if (!empty($album['Extrait'])) {
                    echo '<iframe style="border-radius:12px" src="' . $album['Extrait'] . '" width="300" height="100" title="Player Deezer" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
                } else {
                    echo "Aucun extrait";
                }
                echo '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</main>

<?php
// Appel du Pied de Page
require('footer.php');
?>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.13.7/sorting/date-euro.js"></script>
<script src="./js/script.js"></script>
<script>
    $(document).ready(function () {
        $('#montableau').DataTable({
            scrollY: '69vh',
            dom: 'Bfrtip',
            buttons: 'print',
            language: {url: 'http://cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json '},
            columnDefs: [
                { type: 'date-euro', targets: 0 }
            ]
        });
    });
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>