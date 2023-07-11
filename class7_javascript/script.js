const operand = document.getElementById('operand1');

// Get all the buttons
const buttons = document.querySelectorAll('td');

var operand1 = 0;
var operand2 = 0;

buttons.forEach((button) => {
    button.addEventListener("click", (event) => {
        if (event.target.innerHTML === "AC") {
            operand.innerHTML = null;
        } else if (event.target.innerHTML === "=") {
            

        } else if (event.target.innerHTML === String.fromCharCode(8592)){   //The 8592 is the unicode for back arrow
            operand.innerHTML = operand.innerHTML.slice(0, -1);

        } else if (event.target.innerHTML === String.fromCharCode(8592) && operand.innerHTML === null){
            operand.innerHTML = 0;
            
        } else if (event.target.innerHTML === "=") {
            
        } else if (operand.innerHTML === 0) {
            operand.innerHTML = operand.innerHTML.slice(0, -1);
            operand.innerHTML += event.target.innerHTML;
        } else {
            operand.innerHTML += event.target.innerHTML;
        }
    })
})

