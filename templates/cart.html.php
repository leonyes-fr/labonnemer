<section class="cart">
<h1>Votre panier. </h1>

<p class="contentcart"></p>

<form action="index.php?controller=cart&task=addproduct" method="POST">
    <input type="hidden" name="listproducts" id="listproduct" value="" />
    <?= $initCart; ?>
</form>
</section>
<script src="../labonnemer/public/js/contentcart.js"></script>
