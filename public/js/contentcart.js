/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- VARIABLES -------------------------------------
-----------------------------------------------------------------------------------------------------*/


let listProducts;

/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- FONCTIONS -------------------------------------
-----------------------------------------------------------------------------------------------------*/

function loadList(){
    let retrieveProducts = localStorage.getItem('products');
    let resultProducts = JSON.parse(retrieveProducts);
    return resultProducts;
};


function displayProducts(){
    listProducts = loadList(); // Récupére la liste des produits sous forme de collection d'objet js.
    document.querySelector('.contentcart').innerHTML = '';
    listProducts.forEach((element,index) => {

        document.querySelector('.contentcart').innerHTML +=
                '<article class="products cartlist">'+
                '<h2>Nom :'+ element.name + '</h2>'+
                '<p>Quantité: ' + element.quantity +'</p>'+
                '<p>Prix: '+ element.price + '</p>'+
                '</article>';
    });
};


/* --------------------------------------------------------------------------------------------------
    -----------------------------------------------CODE PRINCIPAL ------------------------------------
-----------------------------------------------------------------------------------------------------*/

document.addEventListener('DOMContentLoaded', function(){
    let cart = new Cart();
    
    displayProducts();

    document.querySelector('#validatecart').addEventListener("click", cart.clear.bind(cart));  

});