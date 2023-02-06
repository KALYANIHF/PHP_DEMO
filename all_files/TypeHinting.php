<?php
class Entertainment
{

}

class Clown extends Entertainment
{

}
class Job
{

}
$callback = function () {
    echo "hello";
};
// type Hinting in PHP
function handleEntertainment(Entertainment $a, callable $callback = null)
{
    echo "Handling " . get_class($a) . " fun\n";
    if ($callback !== null) {
        $callback();
    }
}

//  calling the handleEntertainment function
handleEntertainment(new Entertainment, $callback);
