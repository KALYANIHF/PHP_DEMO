<?php

function something($value)
{
    if (!$value) {
        throw new Exception("Division by zero", 1);
    }
    return 1 / $value;
}

try {
    echo something(12);
    echo something(0);
} catch (Exception $th) {
    //throw $th;
    echo "Got exception " . $th->getMessage();
}
// echo something(0);
