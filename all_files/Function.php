<?php
function outerFunction($outarg)
{
    function innerFunction($innerarg)
    {
        echo "how $innerarg ";
    }
    echo "hi $outarg ";
}

outerFunction("sofia");
innerFunction("are you doing");

/*
#####################
function varible scope
in php function varible is local to that varible that mean they are not accessable outside the function
global label varible are not accessable inside the function also by default

 */
$arg1 = 12;
$arg2 = 13;
function details(&$arg1, &$arg2)
{
    $arg1 = $arg1 + $arg2;
    return $arg1;
}
function double(&$arg)
{
    return $arg << 1;
}
echo "<br/>";
echo details($arg1, $arg2);
echo "<br/>";
echo $arg1;
echo "<br/>";
echo double($arg1);
echo "<br/>";
echo $arg1;
