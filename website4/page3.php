<?php
    session_start();

    print_r($_SESSION);
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
    <h2>Hello, <?= $name?></h2>
</head>
<body>

</body>