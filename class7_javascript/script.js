const operand = document.getElementById('operand1');

// Get all the buttons
const buttons = document.querySelectorAll('td');

var operand1 = 0;
var operand2 = 0;

buttons.forEach((button) => {
    button.addEventListener("click", (event) => {
        if (event.target.innerHTML === "AC") {
            operand.innerHTML = 0;
        } else if (event.target.innerHTML === "=") {
            
        } else {
            operand.innerHTML += event.target.innerHTML;
            console.log(event.target.innerHTML);
        }
    })
})

