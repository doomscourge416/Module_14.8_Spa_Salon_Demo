<?php 
    session_start();
    $users = [
        'admin' => ['password' => '1'],
        'user1' => ['password' => '12'],
        'user2' => ['password' => '123'],
        'user3' => ['password' => '1234'],
        'user4' => ['password' => '12345'],
    ];
    
    // Пароли хешируются функцией getUsersList(); файла process.php
?>