/*
Task:
The height of the first div #div1 always has to be equal to the width of the second div #div2. 
At window resize, you should display in the console:
* the width of the second div #div2
* the height of the first div #div1
*/

let eka = document.querySelector("#eka");
let toka = document.querySelector("#toka");

eka.style.width = "15vw";
eka.style.height = "30vw";
toka.style.width = eka.style.height;
toka.style.height = eka.style.width;

window.onresize = () => {
    console.log("Violetin divin leveys on " + toka.clientWidth + " ja keltaisen divin korkeus on " + eka.clientHeight + ".")
}
