<?php

session_start();

    if(isset($_SESSION['i'])){
        $data = $_SESSION['i'];
        
    }

    if(isset($_POST['submit'])){
        
        $data [] = [
            "id" => $_POST['id'],
            "cName" => $_POST['comp-name'],
            "wName" => $_POST['worker-name']   
        ];

        usort($data, function($d1, $d2){
            if($d1 == $d2){
                return 0;
            } else if($d1 > $d2){
                return 1;
            } else {
                return -1;
            }
        });
        $file = 'info.txt';
        $handle = fopen($file, 'w');
        $txt = serialize($data);
        fwrite($handle, $txt);
        fclose($handle);

        $_SESSION['i'] = $data;
        

    }



?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Session</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
    <h2>Company Info</h2>

    <form method="post"  enctype="multipart/form-data">
        <label>Company Name</label>
        <input name="comp-name" type="text" value="">
        <label>Worker Name</label>
        <input name="worker-name" type="text" value="">
        <label>Worker ID</label>
        <input name="id" type="text" value="">
        <button type="submit" name="submit">Submit</button>
    </form>

    <table>
    <header>
        <tr>
            <th>User ID</th>
            <th>Worker Name</th>
            <th>Company Name</th>
        </tr>
    </header>
    <?php if(isset($_POST['submit'])): ?>
        <?php foreach($data as $i):?>
            <tr>
                <td><?= $i['id']; ?></td>
                <td><?= $i['wName']; ?></td>
                <td><?= $i['cName']; ?></td>
                </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>

</body>
</html>