

<?php foreach( $products as $product) : ?>
<article class="products">
    <img src="public/img/thumbnails/<?=  $product['prod_picture'] ?>" alt="Image du produit">
    <h2><?= $product['prod_name'] ?></h2>
    <h3>Origine: <?= $product['prod_origin'] ?></h3>
    <p><?=  $product['prod_synopsis'] ?></p>
    <em>Prix : <?=  $product['prod_price'] ?> Euros </em>
    <a href="test">decouvrir</a>
</article>

<?php endforeach ?>

