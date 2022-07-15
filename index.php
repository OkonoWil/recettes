<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recette</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/accueil.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.css">
</head>

<body>
    <div class="container">
        <?php include_once('./PHP/header.php'); ?>
        <main>
            <h1>Site de recettes</h1>

            <?php
            include_once('./PHP/variables.php');
            include_once('./PHP/functions.php');
            ?>

            <?php foreach (getRecette($recettes) as $recette) : ?>
                <article>
                    <h3><?php echo $recette['titre']; ?></h3>
                    <div>
                        <?php echo $recette['ingredient']; ?>
                    </div>
                    <i><?php echo afficherAuteur($recette['auteur'], $users); ?></i>
                </article>
            <?php endforeach ?>
        </main>
        <?php include_once('./PHP/footer.php'); ?>
    </div>


</body>

</html>