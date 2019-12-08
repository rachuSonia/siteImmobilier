
// fonction qui permet de récuperer la valuer de input [type='range']
// et pouvoir l'afficher dans la div concerneé 


function marange() {
    $('#start').html($('#price').val() + ' /mois et +');
    $('#run').html($('#surface').val() + ' m2');

    $('#budgets').html($('#budget').val() + ' € et +');
    $('#surface').html($('#area').val() + ' m2 et +');
    $('#terrain').html($('#areaTerrain').val() + ' m2 et +');
}



// Affichage du formulaire qui permet de lancer une recherche de location de bien
// en utilisant AJAX 


$(function () {
    $('#location').on('click', onClickExecute);
});
function onClickExecute() {
    $.get('application/php1/get-form-location.php', function (response) {


        $('#target').html(response);
        $('#start').html($('#price').val() + ' /mois et +');
        $('#run').html($('#surface').val() + ' m2');
        $('#price').on('input', marange);
        $('#surface').on('input', marange);


    });
}

// Affichage du formulaire qui permet de lancer une recherche de vente de bien
// en utilisant AJAX 


$(function () {
    $('#acheter').on('click', getAcheter);
});
function getAcheter() {
    $.get('application/php1/get-form-acheter.php', function (response) {
        $('#target').html(response);

        $('#budgets').html($('#budget').val() + ' € et +');
        $('#surface').html($('#area').val() + ' m2 et +');
        $('#terrain').html($('#areaTerrain').val() + ' m2 et +');
        $('#budget').on('input', marange);
        $('#area').on('input', marange);
        $('#areaTerrain').on('input', marange);
    });
}


// Affichage des annonces de vente bien
// en utilisant AJAX 

$(function () {
    $('#buy').on('click', classifiedBuy);
});
function classifiedBuy() {
    $.get('application/get-classifiedBuy.php', function (response) {
        $('#afficher').html(response);
    });
}


// Affichage des annonces de location bien
// en utilisant AJAX 

$(function () {
    $('#location').on('click', classifiedLocation);
})
function classifiedLocation() {
    $.get('application/get-classifiedLocation.php', function (response) {
        $('#afficher').html(response);
    })
}



// Réalisation d'une horloge
function f() {
    let date = new Date();

    let heure = date.getHours();
    let minutes = date.getMinutes();
    let secondes = date.getSeconds();

    // Rajouter un zéro quand l'heure et les minutes et les secondes sont inférieur à 10 
    if (heure < 10) {
        heure = '0' + heure.toString();
    }
    if (minutes < 10) {
        minutes = '0' + minutes.toString();
    }

    if (secondes < 10) {
        secondes = '0' + secondes.toString();
    }

    // écrire l'heure actuelle en html sur le body
    document.getElementById("horloge").innerHTML = heure + ":" + minutes + ":" + secondes;
}
function v() {
    f();

    setInterval('f()', 1500);
}


