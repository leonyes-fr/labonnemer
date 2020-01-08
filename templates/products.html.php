

<?php foreach( $products as $product) : ?>
<article class="products">
    <img src="public/img/thumbnails/<?=  $product['prod_picture'] ?>">
    <h2><?= $product['prod_name'] ?></h2>
    <p><?=  $product['prod_synopsis'] ?></p>
    <em>Prix : <?=  $product['prod_price'] ?> Euros </em>
    <a href="test">acheter</a>
</article>

<?php endforeach ?>

