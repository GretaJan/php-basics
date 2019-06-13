<?php
    if(isset($_GET['name'])){
         $name = htmlentities($_GET['name']);
         echo $name;
        // print_r($_GET);
    } 
    
    // if(isset($_POST['name'])){
    //     echo htmlentities($_POST['name']);
    //      print_r($_POST);
    // } 
    // if(isset($_REQUEST['name'])){
    //     echo htmlentities($_REQUEST['name']);
    //      print_r($_REQUEST);
    // } 
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <form method="post" action="get_post.php">
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>  
        <div>
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li>
            <a href="get_post.php?name=Scott">Scott</a>
        </li>
        <li>
            <a href="get_post.php?name=Michael">Michael</a>
        </li>
    </ul>

    <h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>