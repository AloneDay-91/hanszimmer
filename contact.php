<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page dédiée pour nous contacter">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./images/logo_hans_zimmer.webp">
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>

<main>
    <div class="block-contact" data-aos="fade-up"
         data-aos-duration="2000">
        <div id="contact-form">
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
            <h1>Formulaire de contact</h1>
            <form action="/traitements/envoi_mail.php" method="post">
                <div id="en-tete">
                    <div id="bloc-prenom">
                        <label for="prenom">Prénom <span>*</span></label>
                        <input type="text" name="prenom" id="prenom" required>
                    </div>
                    <div id="bloc-nom">
                        <label for="nom">Nom <span>*</span></label>
                        <input type="text" name="nom" id="nom" required>
                    </div>
                </div>

                <label for="email">E-mail <span>*</span></label>
                <input type="email" name="email" id="email" placeholder="nom@domaine.fr" required>

                <label for="message">Message <span>*</span></label>
                <textarea name="message" id="message" placeholder="Votre message" required></textarea>

                <div id="bloc-radio">
                    <p id="champs-radio-required">Préciser votre demande *</p>
                    <ul>
                        <li>
                            <div class="radio">
                                <input id="radio-info" name="radio" type="radio" value="Information" required>
                                <label  for="radio-info" class="radio-label">Information</label>
                            </div>
                        </li>
                        <li>
                            <div class="radio">
                                <input id="radio-devis" name="radio" type="radio" value="Devis" required>
                                <label  for="radio-devis" class="radio-label">Demande de devis</label>
                            </div>
                        </li>
                        <li>
                            <div class="radio">
                                <input id="radio-recla" name="radio" type="radio" value="Reclamation" required>
                                <label  for="radio-recla" class="radio-label">Réclamation</label>
                            </div>
                        </li>
                    </ul>
                </div>

                <input type="submit" value="Envoyer">
                <span id="champs-required">* Champs obligatoires</span>
            </form>
        </div>
        <div id="form-img" data-aos="fade-up"
             data-aos-duration="2000">
            <img src="./images/zimmer_contact.webp" alt="Portrait de Hans Zimmer">
        </div>
    </div>
</main>


<?php
// Appel du Pied de Page
require ('footer.php');
?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>