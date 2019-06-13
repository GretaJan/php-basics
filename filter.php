<?php
    // Check for posted data
/*
     if(filter_has_var(INPUT_POST, 'data')){
         echo 'Data Found';
     } else {
         echo 'No data';
     }  

    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        } else {
            echo 'Email is not valid';
        }
    }

    $var = '22';
    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo $var. 'is a number';
    } else {
        echo $var. 'is NOT a number';
    }

    $num = '2151jnjnjnk52151';
    var_dump(filter_var($num, FILTER_SANITIZE_NUMBER_INT));
  

$filters = [
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => [
        "filter" => FILTER_VALIDATE_INT,
        "option" => [
            "min_range" => 1,
            "max_range" => 100
        ]
    ]
];

print_r(filter_input_array(INPUT_POST, $filters));

*/

$arr = [
    "name" => "greta januskeviciute",
    "age" => 26,
    "email" => "gretajan09@gmail.com"
];
$filters = [
    "name" => [
        "filter" => FILTER_CALLBACK,
        "options" => "ucwords"
    ],
    "age" => [
        "filter" => FILTER_VALIDATE_INT,
        "options" => [
            "min_range" => 1,
            "max_range" => 120
        ]
    ],
    "email" => FILTER_VALIDATE_EMAIL
];

print_r(filter_var_array($arr, $filters));
?>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>