<?php
$var = 'a';
function if_exists()
{
    if (isset($GLOBALS["var"])) {
        return ++$GLOBALS["var"];
    } else {
        echo "not exists";
        return;
    }

}

$value = if_exists();
echo $value;
