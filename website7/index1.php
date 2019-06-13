<?php 
    $path = 'dir0/dir1/myfile.php';
    $file = 'file1.txt';

    // Return filenmae

    echo basename($path);
    echo "<br>";

    //Return filename without extension

    echo basename($path, '.php');

    echo "<br>";

    // Return the dir name from the path

    echo dirname($path);

    // Check if file exists

    echo "<br>";
    echo file_exists($file);
    echo "<br>";
    echo realpath($file);
    echo "<br>";
    //Checks to see if file

    echo is_file('test');
    echo "<br>";
    echo file_exists('test');
    echo "<br>";
    //Check if writeable

    echo is_writable($file);
    echo is_readable($file);

    //Get File Size
    echo "<br>";
    echo filesize($file);

    //Create a directory

    mkdir('testing');
    //delete a directory if empty

    // rmdir('testing');

    echo copy('file1.txt', 'file2.txt');