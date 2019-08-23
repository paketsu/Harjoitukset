/*
Task:
When you scroll to 200px and beyond, the popup #popup has to be displayed. If you scroll back under 200px, the popup has to be hidden.
*/

let popup = document.getElementById("element");

const tunnistaKorkeus = () => {
    document.body.scrollTop > 200 || document.documentElement.scrollTop > 200 ?
    popup.style.visibility = "visible":
    popup.style.visibility = "hidden";
}

window.onscroll = tunnistaKorkeus;
