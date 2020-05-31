function checkForm(){
    var valide = true;
    var date = new Date(document.getElementById("dateNaissance").value);
    var today = new Date();
    var age = today.getFullYear() - date.getFullYear();
    if(age < 20 || age > 35){
        displayError("Vous devez avoir entre 20 et 35 ans pour pouvoir candidater !");
        
        valide = false;
    }
    var prenom = document.getElementById("nom").value;
    var nom = document.getElementById("prenom").value;
    if(prenom.length < 3 || prenom.length > 20 || isANumber(prenom)){
        displayError("Votre prénom doit être composé de lettres et doit avoir une longueur entre 3 et 20 caractères !");
        valide = false;
    }
    if(nom.length < 3 || nom.length > 20 || isANumber(nom)){
        displayError("Votre nom doit être composé de lettres et doit avoir une longueur entre 3 et 20 caractères !");
        valide = false;
    }
    var noteM = document.getElementById("noteM").value;
    if(parseFloat(noteM) < 10){
        displayError("Votre note de mathématique doit être supérieure à 10 !");
        valide = false;
    }
    var noteI = document.getElementById("noteI").value;
    if(parseFloat(noteI) < 15){
        displayError("Votre note d'informatique doit être supérieure à 15 !");
        valide = false;
    }
    var noteA = document.getElementById("noteA").value;
    if(parseFloat(noteA) < 12){
        displayError("Votre note d'anglais doit être supérieure à 12 !");
        valide = false;
    }
    var moyenne = document.getElementById("moyenne").value;
    if(parseFloat(moyenne) < 14){
        displayError("Votre moyenne générale doit être supérieure à 14 !");
        valide = false;
    }
    return valide;
}
function isANumber(str){
    for(var i = 0; i < str.length; i++){
        if(!isNaN(str.charAt(i))){
            return true;
        }
    }
}

function displayError(str){
    var toastHTML = str;
    M.toast({html: toastHTML, displayLength: 6000});
}

$(document).ready(function(){
    $('select').formSelect();
});