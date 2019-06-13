<?php

    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time()+3600);

        header('Location: page2.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Session</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Gretchen's Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>