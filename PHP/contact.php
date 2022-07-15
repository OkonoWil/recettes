<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Formulaire de Contact</title>

    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/contact.css">
    <link rel="stylesheet" href="../fontawesome-free-6.1.1-web/css/all.css">
</head>

<body>
    <div class="container">
        <?php include_once('./header.php'); ?>
        <main>
            <form action="#" method="post">
                <h1>Contactez-nous</h1>
                <div class="separation"></div>
                <div class="corps-formulaire">
                    <div class="gauche">
                        <div class="groupe">
                            <label for="nom">Votre Prénom</label>
                            <input type="text" autocomplete="off">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="groupe">
                            <label for="email">Votre adresse e-mail</label>
                            <input type="email" autocomplete="off">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="groupe">
                            <label for="email">Votre téléphone</label>
                            <input type="tel" autocomplete="off">
                            <i class="fas fa-mobile"></i>
                        </div>
                    </div>
                    <div class="droite">
                        <div class="groupe">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" placeholder="Saisissez ici..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="pied-formulaire">
                    <input type="submit" value="Envoyer le message">
                </div>
            </form>

        </main>
        <?php include_once('./footer.php'); ?>
    </div>

</body>

</html>