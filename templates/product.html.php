<article class="product">
    <h1><?= $product['prod_name']  ?> </h1>
    <img src="public/img/product/<?=  $product['prod_picture'] ?>" alt="Image du produit">
    <section>
        <p><?= $product['prod_description'] ?> </p>
        <p>Prix unitaire:<?=  $product['prod_price'] ?> Euros </p>
        <em>Total : <span id="price"><?=  $product['prod_price'] ?></span> Euros </em>
            <label>Quantité voulue:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="10" value="1">   
        <a href="#" id="addcart" data-name="<?= $product['prod_name'] ?>" data-id="<?= $product['prod_id']  ?>" data-price="<?= $product['prod_price'] ?>" data-quantity="1">Ajouter au panier</a>
    </section>
    
</article>
<script src="../labonnemer/public/js/product.js"></script>