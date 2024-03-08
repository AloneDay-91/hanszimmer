
<header>
    <div id="items-header">
        <a id="logo" href="/"><img src="./images/logo_hans_zimmer.webp" alt="logo Hans Zimmer Live"></a>
        <div id="links-header">
            <nav>
                <ul>
                    <li <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'class="active"' : ''; ?>><a href="index.php">Accueil</a></li>
                    <li <?php echo (basename($_SERVER['PHP_SELF']) == 'donnees.php') ? 'class="active"' : ''; ?>><a href="donnees.php">Données</a></li>
                    <li <?php echo (basename($_SERVER['PHP_SELF']) == 'galerie.php') ? 'class="active"' : ''; ?>><a href="galerie.php">Galerie</a></li>
                    <li <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'class="active"' : ''; ?>><a href="contact.php">Contact</a></li>
                    <li <?php echo (basename($_SERVER['PHP_SELF']) == 'partenaires.php') ? 'class="active"' : ''; ?>><a href="partenaires.php">Partenaires</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>