
document.querySelector('figure').addEventListener('mouseover',infoBulle);
document.querySelector('figure').addEventListener('mouseout',infoBulle);

// fonction affichant/masquant l'infobulle sur le logo
function infoBulle(){
    document.querySelector('figure + img').classList.toggle("visible");
}