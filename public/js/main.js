
/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- FONCTIONS -------------------------------------
-----------------------------------------------------------------------------------------------------*/


// fonction affichant/masquant l'infobulle sur le logo. Du décorum...
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
    
    //--------- sélécteurs qui fait apparaitre / disparaitre la bulle sur le logo au survol, c'est ma grande fierté.. J'ai passé des heures à le "hover" ce logo... -------------------
    document.querySelector('figure').addEventListener('mouseover',infoBulle);
    document.querySelector('figure').addEventListener('mouseout',infoBulle);
    
});