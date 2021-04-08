<?php

function errorHandler($errNo, $errMsg, $file, $line)
{
	$args = [
		'message' => '['.$line.'] ' . $errMsg,
        'dir' => $_SERVER['DOCUMENT_ROOT'],
        'class' => $file
    ];

	extract($args, EXTR_SKIP);

    $file = "template.php";

    if (is_readable($file))
    {
        require $file;
    }
}
set_error_handler('errorHandler');

require 'file.php';