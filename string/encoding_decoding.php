<?php
/*
in php we can encode the url by two method
1. rfc 3986 encoding which encode the spaces with %20 sign
2. application/wwww-url-encoding which use + sign instead of the %20 sign
 */
$data = "My name is Souvik";
$data_value_after_encode = rawurlencode($data);
$url1 = "https://google.com/{$data_value_after_encode}";
echo $url1;
echo "<br>";
// $final_URL = rawurldecode($data);
// echo $final_URL;
$query = "souvik asim 123";
$url = "https://alphacode.com/?q=";
$query_after_encode = urlencode($query);
echo $url . $query_after_encode;
$string = "hello \t world\n";
echo "<br>";
$add_slash_string = addcslashes($string, "\x00..\x1fz..\xff");
echo $add_slash_string;
echo "<br>";
echo stripcslashes($add_slash_string);
