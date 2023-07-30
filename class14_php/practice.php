<?php
// A php script can be placed anywhere in a document.
// php files end with .php extension
// php code ends with semi-colon

// The built in function to output a string
echo "This is a php script<br>";

// in php keywords, classes, functions and user-defined functions are case-insensitive
EcHo "This is still working <br>";

// All variable names are case sensitive
// These three are seperate variables
$color = "red";
$Color = "green";
$coLoR = "blue";

echo "My car is $color <br>";
echo "My garden is $Color <br>";
echo "My windows are $coLoR <br>";

// Php variable scopes are of three types: local, global, static

// a variable outside a funciton has a global scope and can olny be accessed outside a function
// Global variable - can be accessed only outside of functions
$x = 5; 
// Local Scope - variables can be acessed only within the function
function myFun() {
    $y = 10.5;
}
// Global keyword is used to access a vdariable outside a function
function thisFun() {
    global $x;
    $p = $x + 5;
}

// Normally when a function is called all the variables are deleted. Sometimes we need to store the local variable
// we use the keyword static

function myTest() {
    static $x = 0;
    echo $x."<br>";
    $x++;
}

myTest();
myTest();
myTest();


// Arrays
// In php the array() function is used to create arrays
$cars = array("toyota","subaru","Volkswagon","Lamborgini");
echo "I like ".$cars[0]." ,".$cars[1]." ,".$cars[2]." ,".$cars[3];
// The count() function is used return the length of the array.
echo "<br>".count($cars);

// Loops
// While loop runs while a condition is true
$x = 0;
while( $x <= 5) {
    echo "<br>The number x is ".$x;
    $x++;
}

// do while loop executes once and then repeats the block while a condition is true
$x = 1;
do {
    echo "<br>The number x is ".$x;
    $x++;
} while ($x <= 5);

// the for loop is used when you know how many times a loop should run
for ($x = 0; $x<=10; $x++) {
    echo "<br> The number x is ".$x;
}

// The foreach loop - loops through a block of code for each element of an array.
// it only works on arrays, and is used to loop through each key/value pair in array.
$colors = array("red", "green", "blue", "yellow");

foreach($colors as $value){
    echo "<br>".$value;
}

// Associative Arrays
$age = array("Peter"=>"30","John"=>"28","Tooth"=>"30");

echo "<br>Peter is ".$age['Peter']." years old";

// Looping through associative array
foreach($age as $key => $value) {
    echo "<br>Key-".$key." Value-".$value;
}

// Array functions
// sort() - sorts array in asccending order
// rsort() - sorts array in descending order
// asort() - sorts associative arrays in ascending order, according to the value
// ksort() - sorts associative arrays in ascending order, according to the key
// arsort() - sorts associative arrays in descending order, according to the value
// krsort() - sorts associative array in descending order, according to the key