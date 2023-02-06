<?php
/* In php there are varible number of arguments
you can pass two types of arguments
varible arguments and default values
 */

function arg_count($arg1, $arg2, $arg3, $arg4)
{
    $arguments = func_num_args();
    $arg_values = func_get_args();
    $arg_specific = func_get_arg(2);
    $data = [
        'number_of_args' => $arguments,
        'arg_value' => $arg_values,
        'specific_value' => $arg_specific,
    ];
    return $data;
}

$function_arg_test = arg_count("souvik", 'demo', 11, 'alpha');

print_r($function_arg_test);
