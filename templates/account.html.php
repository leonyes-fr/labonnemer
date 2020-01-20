<article class="account">
<h1> Bienvenue sur votre compte. </h1>
    <h2>Vos commandes en cours :</h2>
    <article class="customerorder">
            <?php foreach( $orders as $order) : ?>
        <article class="accountorder">
            <h3><?= $order['prod_name'] ?></h3>
            <p>Quantité choisis :<?= $order['car_prod_quantity'] ?> . Prix unitaire :<?= $order['prod_price'] ?></p>
        </article>
        <?php endforeach ?>
            <strong> <?= $sumOrder; ?> </strong>
    </article>
   

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
    <h2> Cloturer son compte : </h2>
                <em>Attention, cette action est irréversible, et votre compte ne pourra être récupérer.</em>
                <a href="ferme le compte avec une modale avant" id="deleteaccount" >Supprimer le compte</a>
</article>