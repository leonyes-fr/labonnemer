<article class="create">
<h1>Création d'un nouveau compte</h1>
    <form action="index.php?controller=create&task=adduser" method="post">
        <p>Nom de famille :</p>
            <input type="text" name="lastname" />
        <p>Prénom :</p>
            <input type="text" name="firstname" />
        <p>Email :</p>
            <input type="text" name="email" />
        <p>Choisissez un mot de passe :</p>
            <input type="password" name="password" />
        <p>Confirmer votre mot de passe :</p>
            <input type="password" name="controlpassword"/>
        <p>Votre adresse de livraison :</p>
            <textarea name="address" rows="4" cols="23"> </textarea>
        <p>Téléphone :</p>
            <input type="text" name="phone" />
        <p>valider votre création de compte :</p>
            <input type="submit" value="S'enregistrer"/>
    </form>
    <?php foreach($errors as $error) : ?>
         <span><?= $error ?> </span>
    <?php endforeach ?>
</article>