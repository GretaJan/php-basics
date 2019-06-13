<?php
// substr()

$output1 = substr('Hello', 1);
$output2 = substr('Hello', -3);

// echo $output1;
// echo $output2;

// strlen()

$output3 = strlen('Hello World');

// echo $output3;


// strpos()

$output4 = strpos('Hello World', 'o');
// echo $output4;

// strrpos()

$output5 = strrpos('Hello World', 'o');
// echo $output5;

// trim()

$text = 'Hello World                             ';
var_dump($text);
$trimmed = trim($text);
var_dump($trimmed);
?>