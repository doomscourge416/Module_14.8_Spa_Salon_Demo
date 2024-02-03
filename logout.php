<?php

session_start();

setcookie('AuthorizedLogin', '', 1);
unset($_SESSION['login']);
unset($_SESSION['password']);

$index_url = 'http://actualnayapapka/index.php';

session_destroy();

header('Location: ' . $index_url);
exit();