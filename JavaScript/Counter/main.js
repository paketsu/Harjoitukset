/*
Task:
You have to create a javascript function that counts from 0 to 100. When reaching 100, the counter gets back to 0 
and keeps counting from start again. You will display the counter in the console of the browser with a speed of 120 ms.
*/

let number = 0;
countToHundred = () => {
        console.log(number);
        number++;
    if (number > 100) {
    number = 0;
    }
}

setInterval(countToHundred, 120);
