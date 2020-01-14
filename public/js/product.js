/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- VARIABLES -------------------------------------
-----------------------------------------------------------------------------------------------------*/

let initialPrice = document.querySelector('#price').innerHTML; // Prix initial du produit à l'unité.

/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- FONCTIONS -------------------------------------
-----------------------------------------------------------------------------------------------------*/


 // Fonction qui met à jour le prix selon quantité de produits ajouté, puis l'affecte au bouton sur un dataset.
function updateOrder(){
    document.querySelector('#price').innerHTML = initialPrice*document.querySelector('#quantity').value;  // met à jour le prix selon quantité de produits ajoutés.
    document.querySelector('#addcart').dataset.price = document.querySelector('#price').innerHTML; // met a jour le prix à payé sur le dataset du bouton ajouté.
    document.querySelector('#addcart').dataset.quantity = document.querySelector('#quantity').value; // met a jour la quantité de produits à acheter.
}


/* --------------------------------------------------------------------------------------------------
    -----------------------------------------------CODE PRINCIPAL ------------------------------------
-----------------------------------------------------------------------------------------------------*/

//Commence quand le dom est chargé.
document.addEventListener('DOMContentLoaded', function(){

    let cart = new Cart();
    
     // sélécteur qui met à jour le prix selon quantité de produits ajouté.
    document.querySelector('#quantity').addEventListener('change', updateOrder); 
    
    // Quand on clic sur le bouton ajouter au panier, on interrompt la propagation de l'évenement et on rajoute au local storage.
    document.querySelector('#addcart').addEventListener("click", cart.add.bind(cart));  
    //bind : addeventlistener envoie this en référence, donc le bouton, nous on veux travailler sur Cart donc on lui bind cart.

});