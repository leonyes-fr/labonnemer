<article class="login">
<h1> Bienvenue dans la partie compte. </h1>

    <section>
        <h2>Déja inscrit ? Se connecter.</h2>
            <form action="index.php?controller=login&task=getlogin" method="post">
                <p>Votre adresse mail :</p>
                    <input type="text" name="email" />

                <p>Votre mot de passe :</p>
                    <input type="password" name="password" />
                    <p>Valider votre connexion:</p>
            <input type="submit" value="Valider"/>
            </form>
         <span><?php echo $error ?> </span>
    </section>

    <section>
        <h2>Nouveau client ? rejoignez-nous !</h2>
        <a href="index.php?controller=create">Création d'un compte</a>

    </section>
</article>