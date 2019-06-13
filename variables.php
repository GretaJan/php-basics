<?php

    //Single line comment
    #single line comment
    /* 
        Multiline comment
    */

    #VARIABLE RULES


    $_output = "Hello World!";
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    echo $sum;
    echo "<br>";
    $string1 = "Hello";
    $string2 = "LT";
    $greeting = $string1 .' '. $string2;   //String concatination
    $greeting2 = "$string1 $string2";

    echo $greeting;
    echo "<br>";
    echo $greeting2;
    echo "<br>";

    $string3 = 'They\'re here';
    $string4 = "They're here";
    echo $string3;
    echo "<bt>";
    echo $string3;
    echo "<br>";
    echo $_output;
    echo "<br>";
    echo '  Hello ';
    echo "<br>";
    print ' Hello';
    echo "<br>";


    #CONSTANTS

    define('GREETING', 'HELLO EVERYONE');

    echo GREETING;
?>