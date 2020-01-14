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
                <li><?= $accountName?></li><!-- Affiche le prénom, si loggé. !-->
                <li><?= $disconnect; ?></li><!-- Propose la déconnexion, si loggé  !-->
                <li><a href="index.php?controller=cart">Mon panier : (<span id="cartcontent">0</span>)</a></li>
            </ul>	
        </aside>
        <figure class="logo">
            <a href="index.php"><img src="public/img/visuals/logo.png" alt="logo la bonne mer"></a>
        </figure>
        <img src="public/img/visuals/bulle.png" class="visible" alt="bulle au survol du logo.">
        <nav>
            <ul>
                <li><a href="index.php?controller=products&task=list&category=1">Crustaces</a></li>
                <li><a href="index.php?controller=products&task=list&category=2">Coquillages</a></li>
                <li><a href="index.php?controller=products&task=list&category=3">Conserves</a></li>
                <li><a href="index.php?controller=products&task=list&category=4">Ricard!</a></li>
            </ul>
        </nav>
	</header>	
    <main class="container">
        <?= $pageContent ?>
    </main>
    <footer>
            <article>
                <!-- Liens en placeholder !-->
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
<script src="../labonnemer/public/js/cart.js"></script>
<script src="../labonnemer/public/js/main.js"></script>

</body>

</html>