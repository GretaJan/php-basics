<?php

$people[] = 'Steve';
$people[] = 'Mark';
$people[] = 'Suzy';
$people[] = 'Tom';
$people[] = 'Christy';
$people[] = 'Yoda';
$people[] = 'Harry';
$people[] = 'Betty';
$people[] = 'Lima';
$people[] = 'Sean';
$people[] = 'Gillighan';
$people[] = 'Gorry';

//Get query string

$q = $_REQUEST['q'];

$suggestion = '';

//Get Suggestions

if($q != ''){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ''){
                $suggestion = $person;
        } else {
            $suggestion .= ", $person";
        }
    }
}
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;
?>