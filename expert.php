<?php

//ERROR REPORT
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo "Exercise 1 starts here:";

function new_exercise($x)
{
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0]; // SOLUTION: Monday has index 0 in the array

echo $monday;

new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = "Debugged !  Also very fun";
echo substr($str, 0, 10);

new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach ($week as &$day) {
    $day = substr($day, 0, strlen($day) - 3);
}

print_r($week);

// You can pass a variable by reference to a function so the function can modify the variable.
// https://www.php.net/manual/en/control-structures.foreach.php
// In order to be able to directly modify array elements within the loop precede $value with &. 
// In that case the value will be assigned by reference.

new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) {
    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

// for(initialization; condition; increment)
// $a <= $b 	Less than or equal to 	true if $a is less than or equal to $b.
// $a != $b 	Not equal 	true if $a is not equal to $b after type juggling.


new_exercise(6);

// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!

$arr = [];


function combineNames($str1 = "", $str2 = "")
{
    $params = [$str1, $str2];

    // In order to be able to directly modify array elements within the loop precede $value with &. 
    foreach ($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode(" - ", $params);
}


function randomGenerate($arr, $amount)
{
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0, count($heroes) - 1)][rand(0, 10)];

    return $randname;
}

echo "Here is the name: " . combineNames();

// Solution:
// Forgotten semicolon
// added -1 to the count because the index starts at 0.
// Change the echo inside the function returns (Return a value from a function)
// The return keyword ends a function and, optionally, uses the result of an expression as the return value of the function.

new_exercise(7);
function copyright(int $year)
{
    echo "&copy; $year BeCode";
}
//print the copyright
copyright(idate('Y'));

// int $year = integer
/* Date = returns a string formatted according to the given format string using the given integer timestamp or 
the current time if no timestamp is given. In other words, timestamp is optional and defaults to the value of time(). */
/* iDate = Returns a number (=integer) formatted according to the given format string using the given integer timestamp or the current 
local time if no timestamp is given. In other words, timestamp is optional and defaults to the value of time(). */

new_exercise(8);
function login(string $email, string $password)
{

    // Logical Operators && = true if both $a and $b are true.
    if ($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';
    }
    return 'No access';
}

//do not change anything below
//should greet the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas') . '<br>';
//no access
echo login('john@example.be', 'dfgidfgdfg') . '<br>';
//no access
echo login('wrong@example.be', 'wrong') . '<br>';
//you can change things again!