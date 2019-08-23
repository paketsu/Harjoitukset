/*
Task:
You have to animate the red circle with javascript. It has to move from left 0 to the right 300px and then stop.
*/

const ympyra = document.getElementById("ympyra");
let sijainti = 0;
liikuta = () => {
    if (sijainti === 300) {
        clearInterval(ajastin);
    } else {
        sijainti++;
        ympyra.style.left = sijainti + "px";
    }
}

const ajastin = setInterval(liikuta, 10);
