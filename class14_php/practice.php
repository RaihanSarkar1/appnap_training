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
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();

