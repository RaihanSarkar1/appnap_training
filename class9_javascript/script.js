// Arrays

const fruits = ["apple", "banana", "mango", "pineapple", "lemon"];



// Looping Arrays using for loop
for(let i=0; i < fruits.length; i++) {
    console.log(fruits[i]);
}


// Using forEach function
fruits.forEach(myFunction);

function myFunction(value) {
    console.log(value);
}

// Adding an element
fruits.push("dragonfruit");

fruits[fruits.length] = "orange";

// Using map for looping
fruits.map(thisFunction);

function thisFunction(value) {
    console.log(value);
}









