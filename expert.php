<?php 

//ERROR REPORT
declare(strict_types = 1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo "Exercise 1 starts here:";

function new_exercise($x) {
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

$str = '“Debugged ! Also very fun”';
echo substr($str, 0, 10);


?>