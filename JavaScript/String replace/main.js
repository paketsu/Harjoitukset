/*
Task:
You have to create a function which replaces all “e” in a string by “o”. This function is executed when clicking the “Transform” button and take the typed string (text input) as an argument. 
The modified string has then to be displayed in the console of the browser.
*/

const button = document.getElementById("painike");
const laatikko = document.getElementById("laatikko");

const korvaaKirjaimet = () => {
    let teksti = laatikko.value;
    let uusiTeksti = teksti.replace(/e/g, "i");
    console.log(uusiTeksti);
    } 

button.onclick = korvaaKirjaimet;
