<?php
/*
reference in php
in php there are mainly 8 types of datatypes
1. 4 scaler types or single types
2. 2 collection types
3. 2 special types
===============================================================
1. (detail) => 1. int to check is_int() or is_integer()
2. float to check is_float() or is_real()
3. string to check is_string()
4. bool to check is_bool()

2. (detail) => 1. array to check is_array()
2. object to check is_object()

3. (detail) => 1. resource to check is_resource()
2. null to check is_null()
===============================================================
 */
$persons = ["Editon", "Wankel", "Crapper"];
$creator = [
    "light_bulb" => "Edition",
    "Rotery_Phone" => "Wankel",
    "Toilet" => "Crapper",
];

print_r($persons);
echo "<br/>";
print_r($creator);

foreach ($persons as $person) {
    echo "The name of the person is $person \n";
}

foreach ($creator as $invention => $inventor) {
    echo "The $invention was invented by $inventor \n";
}

var_dump(is_array($persons));
