/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- VARIABLES -------------------------------------
-----------------------------------------------------------------------------------------------------*/


let listProducts;

/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- FONCTIONS -------------------------------------
-----------------------------------------------------------------------------------------------------*/

 // Récupére la liste des produits sous forme de collection d'objet js.
function loadList(){
    let retrieveProducts = localStorage.getItem('products');
    let resultProducts = JSON.parse(retrieveProducts);
    return resultProducts;
};


// Fonction lancé au dom loaded, qui va afficher les produits rajouté au panier par l'utilisateur.
function displayProducts(){
    listProducts = loadList();
    document.querySelector('.contentcart').innerHTML = '';
    listProducts.forEach((element,index) => {

        document.querySelector('.contentcart').innerHTML +=
                '<article class="products cartlist">'+
                '<h2>Produit : '+ element.name + '</h2>'+
                '<p>Quantité : ' + element.quantity +
                ' Prix unitaire : '+ element.price + 'Euros.<strong> Prix total du lot : ' + (element.price * element.quantity) + ' Euros.<strong></p>'+

                '</article>';
    });
};


/* --------------------------------------------------------------------------------------------------
    -----------------------------------------------CODE PRINCIPAL ------------------------------------
-----------------------------------------------------------------------------------------------------*/

document.addEventListener('DOMContentLoaded', function(){
    let cart = new Cart();
    
    displayProducts();

    //  Au click sur le bouton valider le paiement, on reset le localstorage et le php prend la main grace au submit du bouton.
    document.querySelector('#validatecart').addEventListener("click", cart.clear.bind(cart));  

});