<?php
$file = "main.txt";
if (file_exists($file)) {
    $handle = fopen($file, 'r');
    $read_file = fread($handle, filesize($file));
    echo $read_file;
    fclose($handle);
} else {
    $handle = fopen($file, 'w');
    $data = "Hi, i am souvik Mondal live in this world";
    $write_to_file = fwrite($handle, $data);
    // and then read form the file
    $read_from_file = fread($handle, filesize($file));
    echo $read_from_file;
}
