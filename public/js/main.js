/* ----- Navbar -----*/
function showNavbar() {
  var x = document.getElementById("navbar__links");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

let list_of_huisdier = document.getElementsByTagName("li");

/* ---- Navbar willekeurig huisdier ----- */
var RandomHuisdierId = document.getElementById("RandomHuisdierId");

function randomHuisdier() {
    let randomCijfer = Math.floor(Math.random() * list_of_huisdier.length + 1);
    RandomHuisdierId.setAttribute("href", ("/collectie/" + randomCijfer));
}



/* ----- Filter functie ------- */
let hondCheckbox = document.getElementById("HondCheckbox")
let katCheckbox = document.getElementById("KatCheckbox")
let konijnCheckbox = document.getElementById("KonijnCheckbox")
let parkietCheckbox = document.getElementById("ParkietCheckbox")
let visCheckbox = document.getElementById("VisCheckbox")

let allCheckboxes = document.querySelectorAll("input.filter__checkbox:checked")



    hondCheckbox.addEventListener("change", function(){
        if(hondCheckbox.checked){
            for(let i = 0; i < list_of_huisdier.length; i++){
                if (list_of_huisdier[i].dataset.huisdierSoort == "Hond"){
                    list_of_huisdier[i].style.display = "";
                }
            }
        }
        else{
            for(let i = 0; i < list_of_huisdier.length; i++){
                if (list_of_huisdier[i].dataset.huisdierSoort == "Hond"){
                    list_of_huisdier[i].style.display = "none";
                }
            }
        }
    });

    katCheckbox.addEventListener("change", function(){
        if(katCheckbox.checked){
            for(let i = 0; i < list_of_huisdier.length; i++){
                if (list_of_huisdier[i].dataset.huisdierSoort == "Kat"){
                    list_of_huisdier[i].style.display = "";
                }
            }
        }
        else{
            for(let i = 0; i < list_of_huisdier.length; i++){
                if (list_of_huisdier[i].dataset.huisdierSoort == "Kat"){
                    list_of_huisdier[i].style.display = "none";
                }
            }
        }
    });

    konijnCheckbox.addEventListener("change", function(){
    if(konijnCheckbox.checked){
        for(let i = 0; i < list_of_huisdier.length; i++){
            if (list_of_huisdier[i].dataset.huisdierSoort == "Konijn"){
                list_of_huisdier[i].style.display = "";
            }
        }
    }
    else{
        for(let i = 0; i < list_of_huisdier.length; i++){
            if (list_of_huisdier[i].dataset.huisdierSoort == "Konijn"){
                list_of_huisdier[i].style.display = "none";
            }
        }
    }
    });

    parkietCheckbox.addEventListener("change", function(){
    if(parkietCheckbox.checked){
        for(let i = 0; i < list_of_huisdier.length; i++){
            if (list_of_huisdier[i].dataset.huisdierSoort == "Parkiet"){
                list_of_huisdier[i].style.display = "";
            }
        }
    }
    else{
        for(let i = 0; i < list_of_huisdier.length; i++){
            if (list_of_huisdier[i].dataset.huisdierSoort == "Parkiet"){
                list_of_huisdier[i].style.display = "none";
            }
        }
    }
    });

    visCheckbox.addEventListener("change", function(){
    if(visCheckbox.checked){
        for(let i = 0; i < list_of_huisdier.length; i++){
            if (list_of_huisdier[i].dataset.huisdierSoort == "Vis"){
                list_of_huisdier[i].style.display = "";
            }
        }
    }
    else{
        for(let i = 0; i < list_of_huisdier.length; i++){
            if (list_of_huisdier[i].dataset.huisdierSoort == "Vis"){
                list_of_huisdier[i].style.display = "none";
            }
        }
    }
    });


/* ----- Buttons ------ */
function oppassenButton() {
    href.location = "/collectie"
    return location
}