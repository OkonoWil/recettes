<header>
    <nav>
        <div class="titre">
            <a href="index.php">Site de recettees</a>
            <div class="toggle">
                <i class="fa-solid fa-bars ouvrir"></i>
                <i class="fa-solid fa-xmark fermer"></i>
            </div>
        </div>
        <div class="menu">
            <ul>
                <?php if ($_SERVER['PHP_SELF'] == '/Test/Projet/Recette/index.php') : ?>
                    <li><a href="./index.php" class="page">Accueil</a></li>
                    <li><a href="./PHP/contact.php">Contact</a></li>
                <?php endif; ?>
                <?php if ($_SERVER['PHP_SELF'] != '/Test/Projet/Recette/index.php') :  ?>
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="./contact.php" class="page">Contact</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>