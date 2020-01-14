<article class="account">
<h1> Bienvenue sur votre compte. </h1>
<h2>Vos informations :</h2>
<form action="index.php?controller=account&task=updateuser" method="post">
        <p>Nom de famille :</p>
            <input type="text" name="lastname" value="<?= $_SESSION['user']['lastname'] ?>" />
        <p>Prénom :</p>
            <input type="text" name="firstname" value="<?= $_SESSION['user']['firstname'] ?>"/>
        <p>Email :</p>
            <input type="text" name="email" value="<?= $_SESSION['user']['email'] ?>"/>
        <p>Votre adresse de livraison :</p>
            <textarea name="address" rows="4" cols="23" ><?= $_SESSION['user']['lastname'] ?> </textarea>
        <p>Téléphone :</p>
            <input type="text" name="phone" value="<?= $_SESSION['user']['lastname'] ?>" />
        <p>Modifier les informations de votre compte:</p>
            <input type="submit" value="Mettre à jour"/>
    </form>

    <h2>Vos commandes :</h2>
    <!--  Faire ici un foreach des commandes de l'utilisateur !-->

</article>