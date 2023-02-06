<?php
/**
 * in php there are mainly 3 types of function
 * 1. Normal Function
 * 2. Arrow Function
 * 3. Annonimus Function
 *
 * // Normal function are the function with the function keyword and a Name value
 * // Arrow function are the same as normal function but it has a shorter form then the normal one [mainly syntatic suger]
 * // Annonimus function
 */
$y = 12;
function Print_My_name($email)
{
    // global $y;
    echo $GLOBALS['y'];
    $x = 10;
    // echo $y;
    echo "Hello Souvik $email";
}
echo $x;
Print_My_name("souvik@gmail.com");
