'use strict';

/////////////////////////////////////////////////////////////////////////////////////////
// VARIABLES                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////
let listProducts;
/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////

function loadList()
{
    let retrieveProducts = localStorage.getItem('products');
    let resultProducts = JSON.parse(retrieveProducts);
    console.log(resultProducts);
    return resultProducts;
};

// Vide la contact liste, recharge la liste de contact puis l'affiche dans le html.
function displayProducts()
{
    listProducts = loadList();
    document.querySelector('.contentcart').innerHTML = '';
    listProducts.forEach((element,index) => {
        document.querySelector('.contentcart').innerHTML += ' <td>Nom :'+ element.name + ' id :'+ element.product +'Quantité: '+ element.quantity +'Prix: '+ element.price + ' </td><br>';
    });
};




/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL                                                                      //
/////////////////////////////////////////////////////////////////////////////////////////

document.addEventListener('DOMContentLoaded', function(){

    
    displayProducts();



});


console.log("content cart marche");