<?php
/*
 * in php you have many predefined functions to use to search part of the string
1. strpos() == this function returns the index of the first ocurence of the string inside the larger string
2. strrpos() == this function returns the index of the last ocurence of the string inside the larger string
3. strstr() == this function finds the index of the first position of the string and return the whole string after that index.
4. stristr() == this function is same as strstr() function but the only difference is it's case insensitive.
5. strchr() == this is a alias for strstr() function
6. strrchr() == this searches for the chractor inside the larger string (remember the chractor not the whole string)
 */
function isOctal($str)
{
    return strspn($str, '012345678') == strlen($str);
}

var_dump(isOctal("0o123"));
