<section class="cart">
<h1>Votre panier. </h1>

<!-- la classe contentcart sera remplacé par le contenu du panier après son chargement du localstorage préalable.!-->
<p class="contentcart"></p>

<form action="index.php?controller=cart&task=addproduct" method="POST">
    <!-- Listproduct va réceptionner sous format json la liste des produits, prete a etre controllé sous php puis persisté en bdd !-->
    <input type="hidden" name="listproducts" id="listproduct" value="" />
    <?= $initCart; ?>
</form>
</section>
<script src="../labonnemer/public/js/contentcart.js"></script>
