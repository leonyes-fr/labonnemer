/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- VARIABLES -------------------------------------
-----------------------------------------------------------------------------------------------------*/
let hair = "hair";
let body = "body";
let positionImg = 0;
let characterDetails = ['imageun.png','imagedeux.png','imagetrois.png'];

/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- FONCTIONS -------------------------------------
-----------------------------------------------------------------------------------------------------*/

// Va modifier l'image cheveux ou corps en png suivante dans le tableau.
function slide(element) {
    positionImg++;
    if (positionImg > characterDetails.length - 1)
    {
        positionImg = 0;
    }
    document.querySelector('#'+element).src = "public/img/assistant/" + element +'/'+ characterDetails[positionImg];
}

/* --------------------------------------------------------------------------------------------------
    -----------------------------------------------CODE PRINCIPAL ------------------------------------
-----------------------------------------------------------------------------------------------------*/

document.addEventListener('DOMContentLoaded', function(){

    // Si on clic sur les cheveux de l'assistante, cela les modifie.
    document.querySelector('#hair').addEventListener("click", function(){
        slide(hair);
    });

    // Si on clic sur le corps de l'assistant cela le modifie.
    document.querySelector('#body').addEventListener("click",function(){
        slide(body);
    });


});

