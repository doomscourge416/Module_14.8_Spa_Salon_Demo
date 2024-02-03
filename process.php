<?php
    session_start();
    include 'functions.php';
    include 'users.php';

    $_SESSION['login'] = $_POST['login'] ?? null;
    $login = $_SESSION['login'];

    $_SESSION['password'] = $_POST['password'] ?? null;
    $password = $_SESSION['password'];
   

    

    // getUsersList();

    existsUser($login);

    checkPassword($login, $password);

    getCurrentUser($login);

    if(checkPassword($login, $password)){
        $index_url = 'http://actualnayapapka/index.php';
        header('Location: ' . $index_url);
        

        $_SESSION['LoginTime'] = time();
        exit();
    };

    


?>