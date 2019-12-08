/*création d'un  slider pour afficher le détail d'une annonce de recherche*/

let selection = 0;
let images = document.getElementsByClassName('picturs')[0].children;
let avance = document.getElementById('avance');
let arrier = document.getElementById('arriere');



function imageSuivante() {
    images[selection].classList.remove("visible");
    selection++;
    if (selection == 6) {
        selection = 0;
    }

    images[selection].classList.add("visible");
}

function imagePrecedante() {
    images[selection].classList.remove("visible");
    selection--;
    if (selection == -1) {
        selection = 5;
    }
    images[selection].classList.add("visible");
}

avance.addEventListener('click', imageSuivante);
arrier.addEventListener('click', imagePrecedante);