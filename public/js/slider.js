/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- VARIABLES ------------------------------------------
-----------------------------------------------------------------------------------------------------*/

let imgCollect=    //Initialisation d'une collection avec deux propriétés par objet.
[
    {
        src: 'public/img/slider/1.jpg',
        legend: '"J aime la mer"'
    },
    {
        src: 'public/img/slider/2.jpg',
        legend: 'Plateau de dégustation'
    },
    {
        src: 'public/img/slider/3.jpg',
        legend: 'Pour l aperitif'
    },
    {
        src: 'public/img/slider/4.jpg',
        legend: 'Ou en dessert'
    }
];

let nextButton;
let previousButton;
let playButton;
let visibleLegend;
let visiblePicture;
let position;
let stopPlay;
let interval;
let pressPreviousButton;
let pressNextButton;

/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- FONCTIONS ------------------------------------------
-----------------------------------------------------------------------------------------------------*/


/**
 * Mise à jour de l'image dans le html.
 * @returns {void}
 */
function updatePicture ()
{
    visiblePicture.src = imgCollect[position].src;
    visibleLegend.textContent = imgCollect[position].legend;
}

/**
 * déclenchement bouton précédent
 * @returns {void}
 */
function onClickPrevious() {
    if (position <= 0)
    {
        position = imgCollect.length;
    }
    position--;
    updatePicture();
}

/**
 * déclenchement bouton suivant
 * @returns {void}
 */
function onClickNext() {
    position++;
    if (position > imgCollect.length - 1)
    {
        position = 0;
    }
    updatePicture();
}

/**
 * déclenchement bouton lecture
 * @returns {void}
 */
function onClickPlay() {
    if ( stopPlay == false)
    {
        interval = setInterval(onClickNext, 3000);
        stopPlay = true;
    }else 
    {
        clearInterval(interval);
        stopPlay = false;
    }  
}


/* --------------------------------------------------------------------------------------------------
    ----------------------------------------------- CODE SLIDER ------------------------------------------
-----------------------------------------------------------------------------------------------------*/


document.addEventListener('DOMContentLoaded', function(){
    // DEBUT DU PROGRAMME. INITIALISATION
    position = 0;
    stopPlay = false;

    onClickPlay();
    visibleLegend = document.querySelector('.caption');
    visiblePicture = document.querySelector('#slider');
    previousButton = document.querySelector('#slider-previous');
    nextButton = document.querySelector('#slider-next');
    playButton = document.querySelector('#slider-toggle');

    

    // boutons imiaouge précédente et suivante.
    previousButton.addEventListener('click',onClickPrevious);
    nextButton.addEventListener('click',onClickNext);

    //lance le diaporama.
    playButton.addEventListener('load',onClickPlay);


});

