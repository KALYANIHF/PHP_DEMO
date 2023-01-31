<?php
$value1 = "PHP";
$value2 = &$value1;
$value1 .= " is a outstanding language";
echo $value1;
echo "<br/>";
echo $value2;
