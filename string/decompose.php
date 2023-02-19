<?php
/*
There are many function in php to decompose in the string
that mean you can use this fun to break the string in smaller parts
 */
$str = "Souvik, alpha, nadia , 741250";
$data = explode(',', $str);
print_r($data);

// echo implode(",", $data);
// the join function is the alias for the explode function
// echo join(",", $data);

$token = strtok($str, ",");
while ($token !== false) {
    echo $token . "\n";
    $token = strtok(",");
}

# sting position in php
$testSting = "This is the most important thing in the world";
echo strpos($testSting, "thing");
