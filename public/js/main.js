
/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- FONCTIONS -------------------------------------
-----------------------------------------------------------------------------------------------------*/


// fonction affichant/masquant l'infobulle sur le logo. Du décorum...
function infoBulle(){
    document.querySelector('figure + img').classList.toggle("visible");
}

// Fonction fermant l'assistant visible sur la page principale.
function showAssistant(e){
    e.preventDefault();
    console.log('reussi');
    document.querySelector('.assistant').classList.add("close");
}

// Affiche une modale demandant confirmation avant de supprimer le compte définitivement.
function deleteAccount(e){
    e.preventDefault();
    if( confirm("Etes-vous sur de vouloir supprimer votre compte?")){
        window.location.replace("index.php?controller=account&task=deleteuser");
    }else{
        window.location.replace("index.php?controller=account");
    }
       
}

/* --------------------------------------------------------------------------------------------------
    -----------------------------------------------CODE PRINCIPAL ------------------------------------
-----------------------------------------------------------------------------------------------------*/

//Commence quand le dom est chargé.
document.addEventListener('DOMContentLoaded', function(){
    //new cart sert à connaitre le nombre d'objets rajouté dans le panier sur le header.
    let cart = new Cart();

    //--------- sélécteurs qui fait apparaitre / disparaitre la bulle sur le logo au survol.
    document.querySelector('figure').addEventListener('mouseover',infoBulle);
    document.querySelector('figure').addEventListener('mouseout',infoBulle);

    //--------- Sélécteur qui permet de fermer la fenetre d'aide de l'Assistant.
    document.querySelector('.assistant a').addEventListener('click',showAssistant);

    if(document.querySelector('#deleteaccount'))
        {
            document.querySelector('#deleteaccount').addEventListener("click",deleteAccount);
        }

    
});