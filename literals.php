<?php
/*
literales are the obious values in php that comes in to the programm
the exact values that remin alawys same no matter what
like pi = 1.4142
'Hi'
2001
"Hello World"
true
null
 */
define('pi', 1.4242);

function rad_to_deg($value)
{
    return ($value * 180) / pi;
}

function deg_to_red($value)
{
    return ($value) * pi / 180;
}

$degToRed = deg_to_red(30);
$radToDeg = rad_to_deg($degToRed);
echo $degToRed;
echo "<br/>";
echo $radToDeg;
