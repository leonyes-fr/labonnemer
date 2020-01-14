
/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- FONCTIONS -------------------------------------
-----------------------------------------------------------------------------------------------------*/


// fonction affichant/masquant l'infobulle sur le logo.
function infoBulle(){
    document.querySelector('figure + img').classList.toggle("visible");
}

/* --------------------------------------------------------------------------------------------------
    -----------------------------------------------CODE PRINCIPAL ------------------------------------
-----------------------------------------------------------------------------------------------------*/

//Commence quand le dom est chargé.
document.addEventListener('DOMContentLoaded', function(){
    //new cart sert à connaitre le nombre d'objets rajouté dans le panier sur le header.
    let cart = new Cart();
    
    //--------- sélécteurs qui fait apparaitre / disparaitre la bulle sur le logo. -------------------
    document.querySelector('figure').addEventListener('mouseover',infoBulle);
    document.querySelector('figure').addEventListener('mouseout',infoBulle);
    
});