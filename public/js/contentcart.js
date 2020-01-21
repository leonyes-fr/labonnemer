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
    let total= 0;
    listProducts = loadList(); //On charge
    listProducts.forEach((element,index) => {  // Puis on boucle insert dans le html.

        document.querySelector('.contentcart').innerHTML +=
                '<article class="products cartlist">'+
                '<h2>Produit : '+ element.name + '</h2>'+
                '<p>Quantité : ' + element.quantity +
                ' Prix unitaire : '+ element.price + 'Euros.<strong> Prix total du lot : ' + (element.price * element.quantity) + ' Euros.<strong></p>'+

                '</article>';
                total = parseInt(total) + (parseInt(element.price)*parseInt(element.quantity));
    });
    document.querySelector('.contentcart').innerHTML +='<strong>Le prix total de la commande est de '+ total +' Euros.</strong>'
};


/* --------------------------------------------------------------------------------------------------
    -----------------------------------------------CODE PRINCIPAL ------------------------------------
-----------------------------------------------------------------------------------------------------*/

document.addEventListener('DOMContentLoaded', function(){
    let cart = new Cart();
    
    displayProducts();

    if(document.querySelector('#validatecart')){
        //  Au click sur le bouton valider le paiement, on reset le localstorage et le php prend la main grace au submit du bouton.
        document.querySelector('#validatecart').addEventListener("click", cart.clear.bind(cart));  
    }
    

});