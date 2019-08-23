/*
Task:
When you hit "Enter" on your keyboard, the message "Bravo" has to be displayed in an alert box. 
If you press some other keys "Try again" will be displayed.
*/

const naytaViesti = () => {
    let nappain = event.key;
    if (nappain === "Enter") {
        console.log(nappain);
        alert("Bravo!");
    } else {
        console.log(nappain);
        alert("Yritä uudelleen!");
    }
}

window.onkeydown = naytaViesti;
