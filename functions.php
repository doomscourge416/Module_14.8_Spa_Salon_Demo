<?php

session_start();

function getUsersList(){ // Хешируем пароли, данные в обычном формате
    include 'users.php';
    foreach($users as $login => $password){

        foreach($password as $password1){
            $passwordCrypted = password_hash($password1, PASSWORD_DEFAULT);
            // echo "Зашифрованный пароль - " . $passwordCrypted . "<br/>";
            $users[$login]['password'] = $passwordCrypted;
        }
    }
    // print_r($users); // Проверяем, что пароли в массиве заменнены на заХЕШированные
    return $users;
};


function existsUser($login){
        include 'users.php';
        if(array_key_exists($login, $users)){
            // echo "Пользователь найден!<br/>";
            return true;
        }else{
            $login_url = 'http://actualnayapapka/login.php';
            header('Location: ' . $login_url);
            exit();
            // echo "Пользователя с данным логином не существует<br/>";
            return false;
        };
    };



function checkPassword($login, $password){

    if ((null !== $login) || null !== $password) {
        include 'users.php';
        if(array_key_exists($login, $users)){
            
            if($users[$login]['password'] === $password){
                
                setcookie('AuthorizedLogin', $login);
                echo "Успешная авторизация (логин + пароль совпали)";

                return true;
            }else{
                // echo "Безуспешная авторизация (логин совпал, пароль нет)";
                // echo "Неправильный пароль!";
                $login_url = 'http://actualnayapapka/login.php';
                header('Location: ' . $login_url);
                exit();
                return false;
            }
        }
    };
};





function getCurrentUser(){
    if(isset($_SESSION['login'])){
        echo "<br/>" . $_SESSION['login'];
        return $_SESSION['login'];
    }else{
        return null;
    };
};


function getCurrentTime(){
    $currentTime = time();
    return $currentTime;
};


function countdown($loginTime) {
    $currentTime = getCurrentTime();
    $targetTime = $loginTime + 86399;
    $remainingTime = $targetTime - $currentTime;
    
    return $remainingTime;
};




?>

