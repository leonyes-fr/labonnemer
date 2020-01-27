/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- VARIABLES -------------------------------------
-----------------------------------------------------------------------------------------------------*/
let hair = "hair";
let body = "body";
let tail = "tail";
let positionImg = 0;
let positionHair = 0;
let positionBody =0;
let positionTail =0;
let characterDetails = ['imageun.png','imagedeux.png','imagetrois.png'];

/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- FONCTIONS -------------------------------------
-----------------------------------------------------------------------------------------------------*/

// Va modifier l'image cheveux, corps, queue en recuperant le nom du png suivant dans le tableau "characterDetails".
function slide(element) {
    if(element == "hair"){
        positionHair++;
            if (positionHair > characterDetails.length - 1)
                {
                    positionHair = 0;
                }
        positionImg = positionHair;
    }else if (element == "body"){
        positionBody++;
            if (positionBody > characterDetails.length - 1)
                {
                    positionBody = 0;
                }
        positionImg = positionBody;
    }else if(element == "tail"){
        positionTail++;
        if (positionTail > characterDetails.length - 1)
                {
                    positionTail = 0;
                }
                positionImg = positionTail;
    }
    
    document.querySelector('#'+element).src = "public/img/assistant/" + element +'/'+ characterDetails[positionImg];
}

//Fonction qui affiche une bulle de réponse aux questions posées par l'utilisateur.
function askMeAnything(e){
    e.preventDefault();
    document.querySelector('.assistantanswerbulle').classList.toggle("assistantanswerhidden");
    document.querySelector('.assistantanswerwait').classList.toggle("assistantanswerhidden");
    
     setTimeout(showAnswer, 3000); //On attend 3 secondes avant d'envoyer la réponse factice.'
}

// On retire le gif trois petit points, et on affiche la réponse.
function showAnswer(){ 
    document.querySelector('.assistantanswerwait').classList.toggle("assistantanswerhidden");
    document.querySelector('.assistantanswerok').classList.toggle("assistantanswerhidden");    
}


/* --------------------------------------------------------------------------------------------------
    -----------------------------------------------CODE PRINCIPAL ------------------------------------
-----------------------------------------------------------------------------------------------------*/

document.addEventListener('DOMContentLoaded', function(){

    // Si on clic sur les cheveux de l'assistante, cela les modifie.
    document.querySelector('#hair').addEventListener("click", function(){
        slide(hair);
    });

    // Si on clic sur la peau de l'assistante cela la modifie.
    document.querySelector('#body').addEventListener("click",function(){
        slide(body);
    });

    // Si on clic sur la queue de l'assistante cela la modifie.
    document.querySelector('#tail').addEventListener("click",function(){
        slide(tail);
    });

    //Si on clic sur le bouton "posez votre question", la sirene "répondra".
    document.querySelector('.assistantask').addEventListener("click",askMeAnything);

});

