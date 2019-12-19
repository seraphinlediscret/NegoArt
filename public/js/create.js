let forNego = document.getElementById("fornegociation");
let checkGood = document.getElementById("checkgood");


checkGood.onchange = function () {

    if (checkGood.checked ) {
        forNego.style.display = "initial";
    } else {
        forNego.style.display = "none";
    }
}

