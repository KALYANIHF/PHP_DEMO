<?php
// echo phpinfo();
/*
1. static varible
2. it retains its value between the call (function calls)
 */

$foo = function ($name) {
    return "Hello how are you today $name";
};

echo $foo("souvik");

function first()
{
    echo "it is first";
}
function second()
{
    echo "it is second";
}
function third()
{
    echo "it is third";
}
function handle()
{
    echo "this is handle fun to handle the default case";
}

switch ($which) {
    case ('first'):
        first();
        break;
    case ('second'):
        second();
        break;
    case ('third'):
        third();
        break;
    default:
        handle();
}

$which = 'first';
$which();
