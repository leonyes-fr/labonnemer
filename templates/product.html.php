<article class="product">
    <h1><?= $product['prod_name']  ?> </h1>
    <img src="public/img/product/<?=  $product['prod_picture'] ?>" alt="Image du produit">
    <section>
        <p><?= $product['prod_description'] ?> </p>
        <em>Prix : <?=  $product['prod_price'] ?> Euros </em>
            <label>Quantité voulue:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="10">
        <a href="index.php?controller=product&task=find&category=1&id=<?=  $product['prod_id'] ?>">Ajouter au panier</a>
    </section>
    
</article>
<script src="../labonnemer/public/js/product.js"></script>