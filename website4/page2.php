<?php
    session_start();

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Session</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>

    <h5>Thank you <?= $name; ?>, you have subscribed with the email: <?= $email; ?></h5>
    <a href="page3.php">Go to page 3</a>
</body>
</html>