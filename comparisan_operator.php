<?php
/*
there are mainly two types of comparison operator
strict type checking and loose type checking
strict type checking (===)
loose type checking (==)
not equal strict type (!==)
not equal loose type (!= or <>)
grater than (>)
less than (<)
grater than or equal to (>=)
less than or equal to (<=)
 */

$var = "1";
$var_com = 1;
if ($var === $var_com) {
    echo "Yes";
} else {
    echo "No";
}
$number = 44;
echo "<br/>";
echo decbin($number . "\n");
echo "<br/>";
echo decoct($number . "\n");
echo "<br/>";
echo dechex($number . "\n");
echo decbin("hello");
