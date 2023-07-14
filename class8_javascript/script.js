// Addition
var x = 15;
var y = 12;
var z = "15";
console.log(x+y);

// Subtraction
console.log(x-y);

// Boolean Check
console.log(x == y);

console.log(x == z);

// Boolean check with type check
console.log(x === z);


// arrays

var num = [1, 2, 3, 4];

// for small n's
var sum = num[0] + num[1] + num[2] + num[3];
console.log(sum);

var result = 0;
for (var i = 0; i < num.length; i++) {
    result += num[i]; 
}

console.log(result);

// Using map
var sum = 0;
num.map((x)=> sum+=x);
console.log(sum);