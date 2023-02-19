<?php

/*
 * in php interpolation is very important part to perse the varibles
 * sting in single quote and string in double quotes ('' & "")
 * here docs in php <<<
 * elcape caractors in php
 * % to start the chractor to perse in php
 * %b -- it's a integer value that perse a boolean value in string
 * %c -- it's a int value that perse a chractor in the string
 * %d -- it's a int value that perse a decimal value in the string
 * %e -- it's a double value that perse a scintific charator (e^(value)) like this format
 * %E -- it's a double value that perse a scintific chractor (E^(value)) like format
 * %f -- it's a float value that perse in small chractor format
 * %F -- it's a float value that perse in capital value format
 * %g -- it's a double value that perse as floating point number or a scintific notation (e) format
 * %G -- it's a double value that perse as floating point number or a scintific notation (E) format
 * %o -- it's a int value perse as a octal number (8 bits)
 * %x -- it's a int value perse as a hexadecimal value (16 bits) in small charactor format
 * %X -- it's a int value perse as a hexadecimal value (16 bits) in
 * %s -- it's a string display as such
 * %u -- it's a unsigned integer displayes as a decimal number
 */
/*
$name = "Souvik Mondal";
$string1 = "My name is Souvik Mondal" . "\n";
$string2 = "My name is $name";

$poem = <<< Something
"something is important in the system"
Something;

$ew = <<< WOM
boo
hoo
WOM;
echo $string1, $string2, $ew;
$day = Date("d");
$month = Date("m");
$year = Date("y");
printf("Today is %d-%d-%d", $day, $month, $year);

how many ways you can print a string in php
1. echo constrant (this can print many values at a time)
2. print (it can only print on value at a time)
3. printf [this is used to generate a formatted string using the escape chractor]
4. print_r [for debuging only]
 */

// $something = <<< start
// boo
// hoo

// start;

// echo $something;
// $first_Name = "Souvik";
// $last_Name = "Mondal";

// echo "$first_Name", "$last_Name";

/*
type of specifier in php
1. %
2. b
3. d
4. f
5. F
6. e
7. E
8. %
9. o
10. u
11. x
12. X
13. s
14. g
15. G
16. c
 */
// $string = "     this     \l \gggj  is the string that we need to trim         ";
// $format_String = trim($string);
// echo $format_String;
// echo "<br/>";
// for ($i = 0; $i < strlen($format_String); $i++) {
//     printf("the %dth chractor in the string is %s \n", $i, $format_String[$i]);
//     echo "<br/>";
// }

#this is for encodidng and escaping
# the main two fun in php that can work on this
$string = <<< end
"Stop pulling my hair!" Jan's eyes are flashed<p>
end;
// print(htmlentities(htmlentities($string, ENT_COMPAT)));

# to get the transition table call the get_transition_table
// print(htmlentities(htmlentities($string, ENT_COMPAT)));
$str1 = htmlentities(htmlentities($string, ENT_COMPAT));
echo $str1;
$table = get_html_translation_table(HTML_ENTITIES, ENT_NOQUOTES);
$table = array_flip($table);
$string_new = strtr($str1, $table);
echo $string_new;
// print_r($table);
echo "<p>=========================</p>";
$string = "<p>Something is more important than others <pre>Hello how are you</pre></p>";
$remove_html_chractor = strip_tags($string, "<pre>");
echo $remove_html_chractor;
$get_meta_data = get_meta_tags("https://kalyanihf.github.io/help_desk/");
print_r($get_meta_data);
