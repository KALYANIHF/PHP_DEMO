<?php
/*
there are total of 6 functions in string compair
==
===
<,>,<=,>=
strcmp
strcasecmp
strncmp
strncasecmp
strnatcmp
strnatcasecmp
 */
$str1 = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit facilis expedita cupiditate. Vitae at eaque quis aliquam eligendi eveniet sit libero quasi porro fuga placeat expedita perferendis commodi voluptate ut explicabo modi enim fugit, adipisci temporibus veniam dicta ducimus. Est magni quod dolorem laborum esse voluptates commodi obcaecati distinctio nam?";

$str2 = "sit";

echo substr($str1, 9, 5);
echo substr_count($str1, $str2);
echo substr_replace($str1, $str2, 5, 10);
