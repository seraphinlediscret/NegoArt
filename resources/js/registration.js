let siret = document.getElementById("SIRET");
let galery = document.getElementById("gallerist-choose");
let artist = document.getElementById("artist-choose");
let buyer = document.getElementById("buyer-choose");

function siretinput()
{
    siret.style.display = "initial";
}

function artistinput(){
    siret.style.display = "none";
}

function buyerinput() {
    siret.style.display = "none";
}

galery.addEventListener("click", siretinput);
artist.addEventListener("click", artistinput);
buyer.addEventListener("click", buyerinput);