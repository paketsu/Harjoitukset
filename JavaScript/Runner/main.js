/* 
Task:
You have to make the character to run by displaying the images runner1, runner2, runner3 and runner4 with a speed of 60ms.
*/

let number = 0;
let kuva = document.getElementById("kuva");

const vaihdaKuva = () => {
        console.log(number);
            if (number === 0) {
                kuva.src = "runner1.png";
            } else if (number === 1) {
                kuva.src = "runner2.png";
            } else if (number === 2) {
                kuva.src = "runner3.png";
            } else {
                kuva.src = "runner4.png";
            }
        number++;
    if (number > 3) {
    number=0;
    }
}

setInterval(vaihdaKuva, 120);
