/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- VARIABLES -------------------------------------
-----------------------------------------------------------------------------------------------------*/
let hair = "hair";
let body = "body";
let positionImg = 0;
let positionHair = 0;
let positionBody =0;
let characterDetails = ['imageun.png','imagedeux.png','imagetrois.png'];

/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- FONCTIONS -------------------------------------
-----------------------------------------------------------------------------------------------------*/

// Va modifier l'image cheveux ou corps en png suivante dans le tableau.
function slide(element) {
    if(element == "hair"){
        positionHair++;
            if (positionHair > characterDetails.length - 1)
                {
                    positionHair = 0;
                }
    positionImg = positionHair;
    }else{
        positionBody++;
            if (positionBody > characterDetails.length - 1)
                {
                    positionBody = 0;
                }
    positionImg = positionBody;
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

