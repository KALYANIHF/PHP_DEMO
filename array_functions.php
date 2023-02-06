<?php
/*$fruits = ['apple', 'orange', 'pear'];
echo count($fruits);

var_dump(in_array('apple', $fruits));
$fruits[] = 'grape';
array_push($fruits, 'bananna', 'brockley');
array_unshift($fruits, 'place in the front');
array_shift($fruits);

print_r(array_combine($arr_1, $arr_2));
print_r($fruits);
print_r($fruits);

function showSum($arr_1)
{
$sum = 0;
foreach ($arr_1 as $value) {
$sum += $value;
}
return $sum;
}

echo showSum($arr_1);
 */
$arr_1 = [1, 3, 4, 5, 10];
$arr_2 = ['this value link to 1',
    'this value link to 3',
    'this value link to 4',
    'this value link to 5',
    'this value link to 10'];

print_r(array_merge($arr_1, $arr_2));
$new_array = array_combine($arr_1, $arr_2);
print_r(array_keys($new_array));
print_r(array_values($new_array));
