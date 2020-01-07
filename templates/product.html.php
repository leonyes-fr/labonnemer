<h1> Voici la liste des produits. </h1>


<?php foreach( $products as $product) : ?>
<article class="product">
    <h2><?= $product['prod_name'] ?></h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.</p>
</article>

<?php endforeach ?>

