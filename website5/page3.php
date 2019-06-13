<?php
    $user = ['name' => 'Brad', 'email' => 'test@test.com', 'age' => 35];

    $userSer = serialize($user);

    setcookie('user', $userSer, time() + (86400 * 30));

    $user2 =  unserialize($_COOKIE['user']);

    echo $user2['name'];
    print_r($user2);
?>