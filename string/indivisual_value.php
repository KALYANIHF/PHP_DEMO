<?php
$str = "this is the most beautiful thing i have seen";
$length = strlen($str);
for ($i = 0; $i < $length; $i++) {
    printf("The %dth chractor is %s <br/>", $i, $str[$i]);
}
