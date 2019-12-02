let valid = document.getElementById("valid");
let card = document.getElementById("confirm");
let back = document.getElementById("back");
let confirm = document.getElementById("conf");
let negoWeb = document.getElementById("app");
let fields = document.getElementsByClassName("field");
//let open = document.getElementById("open");
let allParam = document.getElementById("containerparam");
let ixi = document.getElementById("ixi");
let appli = document.getElementById("theapplinego");
let exyt = document.getElementById("exyt");
//let well = document.getElementById("well");
let priceIni = document.getElementById("priceini");
let divIni = document.getElementById("divini");
let validAction = document.getElementById("validaction");
let accept = document.getElementById("accept");
let refus = document.getElementById("refus");
let priceWant = document.getElementById("pricewant");
let visibleButton = document.getElementById("valprop");
let yesOrNo = document.getElementById("yesorno");
let stop = document.getElementById("stop");
let theNego = document.getElementById("thenego");
let theEND = document.getElementById("theEND");
let titleArt = document.getElementById("title-h3");
let tableNego = document.querySelector(".tableau");
let pomodoroApp = document.getElementById("pomodoro-app");
let nbTours = document.getElementById("titre_nbTour");
let negoIdem = document.getElementById("negoIdem");
let valueIdem = document.getElementById("valueIdem");
let valueEnd = document.getElementsByClassName("valueEnd");

//send DATAS//
let priceShow =document.getElementById("validationCustom01");//prix initial
let trapShow = document.getElementById("validationCustom02");//trappes
let centShow = document.getElementById("validationCustom03");//trappe %
let tourShow = document.getElementById("validationCustom04");//nombre de tour
let priceMinShow = document.getElementById("validationCustom05");//prix minimum de vente
let timeShow = document.getElementById("validationCustom06");//le temps
let actionShow = document.getElementById("validationCustom07");//input

//reception DATAS //
let showCount = document.getElementById("count");///le count du tableau
let showPrice = document.getElementById("showprice");//prix initial
let showBuy = document.getElementById("showbuy");//acheteur
let showWant = document.getElementById("showwant");//prix proposé
let showTour = document.getElementById("showtour");//nombre de tour
let showRab = document.getElementById("showrab");// rabais
let showTime = document.getElementById("minutes");//timer

// array empty//
let tableFind = [];

//let nbtrap = trapshow.value;

let nbr ;
let discount;
let tableHidden = document.getElementById('table-hidden');
let boxInfo = document.getElementById('allheaderelements');
let acceptNEGO = document.getElementById("acceptNEGO");

priceIni.textContent = priceShow.value;

/////validation parameters////
function checkAllValid()
{
    let allValid = true;
    for(let i=0; i<fields.length;i++)
    {
        if(fields[i].validity.valueMissing)
        {
            allValid = false;
        }
    }
    return allValid;
}

function forCard(event) {

    if(checkAllValid())
    {
        event.preventDefault();
        card.style.display = "flex";
        valid.style.display ="none";
    }else{
        alert("Veuillez remplir TOUS les champs du formulaire pour valider vos paramètres.")
    }
}

///return///
function returnParam() {
    card.style.display = "none";
    valid.style.display= "flex";
}
///open  parameters///
function openParam() {
    allParam.style.display = "initial";

}
///confirmation parameters///
 function closeParam() {
    // allparam.style.display = "none";
    // card.style.display = "none";
    appli.style.display = "initial";
    //open.style.display = "none";
    //well.style.display = "none";
    divIni.style.display = "initial";
    titleArt.style.display = "block";
    tableNego.style.display = "initial";
    confirm.style.display = "none";
    pomodoroApp.style.display = "flex";
    nbTours.style.display= "block";
    console.log(trapShow.value + " trappes");
    console.log(centShow.value + " % du prix minimum");
    console.log(priceMinShow.value + " prix minimum");
    console.log(priceShow.value*centShow.value/100 + " prix de la trappe");
    console.log(priceShow.value+"/"+centShow.value);
    console.log(priceShow.value + " prix initial");
    //push datas parameters//

    showCount.textContent = tourShow.value;
    showTime.textContent = timeShow.value;

 }


// application close///
function closeWindow() {
    allParam.style.display = "none";
    card.style.display = "none";
}

/// incrémentation / tour number///
let count = 0;
let list = document.querySelector('tr');
list.addEventListener('click', function(ev) {
    if (ev.target.tagName === 'TD'){
        ev.target.classList.toggle('checked');
    }
 }, false);

function action() {
    
    //////////// list table////////////////
    var tableau = document.getElementById("theTABLE");
    var tr = document.createElement("TR");
    var actionShow = document.getElementById("validationCustom07").value;

    if (actionShow === ''){
        alert("Veuillez entrer une proposition !");
        affiche.style.display = "none";

    } else {
        count++
        tableau.appendChild(tr);
   
    ////////////trappes %////////////
    
   if (Number(actionShow)<= priceShow.value*centShow.value/100) {

        alert("Cette proposition n'est pas sérieuse il ne vous reste plus que "+"[ "+ trapShow.value +" ] chance(s) avant que la négociation soit annulée");
        trapShow.value--;
        count --;
        console.log( +" nombre de trappes");


        if (trapShow.value < 0){
        window.location.reload();

    }
    } else {

     ////value want > last value////
     let last = tableFind[tableFind.length -1];
     tableFind.push(Number(actionShow));
     console.log(last + " dernier prix acheteur proposé");
     console.log(actionShow + " valeur entrée");
    
     if (Number(actionShow) < last )
         tableFind.pop(Number(actionShow));
     
     if (count > 0) {
        if (Number(actionShow) <= last ) {
            alert("Veuillez faire une proposition supérieure à l'ancienne !");
            count --;

         } else {

    nbr = (Number(actionShow) + Number(priceIni.textContent))/2; // remplacer par l'algo de Philippe ( ici test moyenne)
    console.log(valueEnd + " proposition finale");
    console.log(nbr + " calcul proposition");
    valueEnd.textContent = nbr;
    discount = Math.round((Number(priceIni.textContent) - Number(nbr))*100/Number(priceIni.textContent));
    console.log(discount + " % de remise");
    console.log(nbr + " moyenne");
    document.getElementById("validationCustom07").value = "";
    document.getElementById("validationCustom01").value = "";

    ////////////////////////TD/////////////////////////
    var valueInput = document.createTextNode(Number(actionShow));
    var txt = document.createTextNode(count);
    var tdOne = document.createElement("TD");
    var tdThree = document.createElement("TD");
    var tdFour = document.createElement("TD");
    var want = document.createTextNode(nbr); //// le nbr pour la variable de Philippe
    var tdFive = document.createElement("TD");
    var sold = document.createTextNode(discount + " %");

    //////////////////////DIV in TD////////////////

    var divOne = document.createElement("DIV");
    var divThree = document.createElement("DIV");
    var divFour = document.createElement("DIV");
    var divFive = document.createElement("DIV");

    //////////////////TD class///////////////////
 
    tr.className = "trTABLE";
    tdOne.className = "blockall countered";//count
    tdThree.className = "blockall buyed";//acheteur
    tdFour.className = "blockall wanted";//prix proposé
    tdFour.id = "priceprop";
    tdFive.className = "blockall solded";//rabais %

    ///////////// DIV class////////////////////////
   

    divOne.className ="cell countone";
    divThree.className ="cell buythree";
    divFour.className ="cell wantfour";
    divFour.id = "xprop";
    divFive.className ="cell soldone";

    ////////////TD appendChild////////////////
    tr.appendChild(tdOne);//count
    tr.appendChild(tdThree);
    tr.appendChild(tdFour);//prix proposé
    tr.appendChild(tdFive);//rabais %

    //////DIV appendChild//////////////

    divOne.appendChild(txt);//ini
    tdOne.appendChild(divOne);
    divThree.appendChild(valueInput);//count
    tdThree.appendChild(divThree);
    divFour.appendChild(want);//prixproposé
    tdFour.appendChild(divFour);
    divFive.appendChild(sold);//rabais %
    tdFive.appendChild(divFive);

    //////button invisible/////

    visibleButton.style.display = "none";
    yesOrNo.style.display = "flex";

    ///////decrementation compteur//////

     console.log(count +" compteur");

   //  ////////////loader/////////////
   const aleatoire = Math.floor(Math.random() * 4000) + 5000;

   loader.style.visibility="visible";
   loader.style.opacity ="1";
   validAction.style.display="none";
   tableau.style.display="none";
   yesOrNo.style.display="none";
   let timeOut = setTimeout(function(){
       showCount.textContent--;
       tableau.style.display = "";
       validAction.style.display="";
       loader.style.visibility = "";
       loader.style.opacity ="";
       yesOrNo.style.display="flex";

       if(showCount.textContent >= 0){
            if(Number(nbr) == Number(actionShow)){
                validAction.style.display="none";
                yesOrNo.style.display="none";
                boxInfo.style.display="none";
                tableNego.style.display="none";
                loader.style.visibility = "";
                loader.style.opacity ="";
                negoIdem.style.display = "flex";
            }
         }
        if(showCount.textContent == 0)
      stop.style.display="none";

     else if(showCount.textContent < 0) {
     clearTimeout(timeOut);
     stop.style.display ="flex";
     validAction.style.display="none";
     yesOrNo.style.display="none";
     boxInfo.style.display="none";
     tableNego.style.display="none";
     loader.style.visibility = "";
     loader.style.opacity ="";
     }
   }, aleatoire);
  }
 }
}
}
}
////////conditions//////////////
function acceptNego() {
alert("Êtes-vous sur de vouloir accepter l'offre de 2000 euros");
// + "[" + negoprice + "]" + à mettre à la place des _ _ _ Philippe
}


function refusalNego() {
    visibleButton.style.display ="flex";
    yesOrNo.style.display = "none";
}
///les boutons///
function acceptFinal() {
    alert("Êtes-vous sur de vouloir accepter l'offre de 2000 euros");
    // + "[" + negoprice + "]" + à mettre à la place des _ _ _ Philippe
}

function refusalFinal() {
    window.close();
    
}
valid.addEventListener("click", forCard);
back.addEventListener("click", returnParam );
//open.addEventListener("click", openParam);
confirm.addEventListener("click", closeParam);
ixi.addEventListener("click", closeWindow);
accept.addEventListener("click", acceptNego);
refus.addEventListener("click", refusalNego);
validAction.addEventListener("click", action);
acceptNEGO.addEventListener("click", acceptFinal);
theEND.addEventListener("click", refusalFinal);
exyt.addEventListener("click", refusalFinal);

