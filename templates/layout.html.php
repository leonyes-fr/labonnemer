<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../labonnemer/public/css/normalize.css">
    <link rel="stylesheet" href="../labonnemer/public/css/style.css">
    <title>La Bonne Mer <?= $pageTitle ?></title>
</head>

<body>
    <header>
        <aside>
            <ul>
                <li><a href="#">connexion</a></li>
                <li><a href="#">Mon panier : (0)</a></li>
            </ul>	
        </aside>
        <figure class="logo">
            <a href="index.php"><img src="public/img/logo250.png" alt="logo la bonne mer"></a>
        </figure>
        <img src="public/img/test.png" class="visible">
        <nav>
            <ul>
                <li><a href="index.php?controller=product&task=list">Poissons</a></li>
                <li><a href="#">Coquillages</a></li>
                <li><a href="#">Conserves</a></li>
                <li><a href="#">Ricard!</a></li>
            </ul>
        </nav>
	</header>	
    <main class="container">
        <?= $pageContent ?>
    </main>
    <footer>
            <article>
                <h3>Tout sur La Bonne Mer</h3>
                <ul>
                    <li><a href="#">Tout sur nous</a></li>
                    <li><a href="#">Nous trouver</a></li>
                    <li><a href="#">Contactez-nous !</a></li>
                </ul>
            </article>
            <article>
                <h3>La garantie de la fraicheur !</h3>
                <ul>
                    <li><a href="#">Label</a></li>
                    <li><a href="#">Récompenses</a></li>
                    <li><a href="#">On parle de nous</a></li>
                </ul>
            </article>
            <article>
                <h3>Suivez la lumiére du phare sur :</h3>
                <ul>
                    <li><a href="https://fr-fr.facebook.com/">Facebook</a></li>
                    <li><a href="https://twitter.com/">Twitter</a></li>
                    <li><a href="https://instagram.com">Instagram</a></li>
                </ul>
            </article>
    </footer>

<script src="../labonnemer/public/js/main.js"></script>
</body>

</html>