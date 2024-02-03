<html>

    <body>

         <?php 
            session_start();
            include 'functions.php';
            

            $login = $_SESSION['login'] ?? null;
            $password = $_SESSION['password'] ?? null;

            $_SESSION['loginTime'] = null;
            
            if(isset($_COOKIE['AuthorizedLogin'])){
                $index_url = 'http://actualnayapapka/index.php';
                header('Location: ' . $index_url);

                setcookie('loginTime', $loginTime, time() + 84600);
                exit();
            };

        ?> 
        <!-- ПРОДОЛЖИТЬ ОСТЮДА - СТИЛИЗОВАТЬ ФОРМУ И ПОТОМ ПЕРЕПРОВЕРИТЬ ЧТО ВСЁ РАБОТАЕТ КАК НАДО -->
        <div>
            <form class="login-form" action="process.php" method="post" style="width:300px; padding:20px; box-sizing: border-box; ">

                <input name="login" type="text" placeholder="Логин" style="width: 350px; padding: 10px; margin:10px 0; border:0; box-shadow: 0 6px 20px -5px rgba(0,0,0,0.4); border-radius:10px; font-family:inherit; font-size: inherit;"><!-- -->
                <input name="password" type="password" placeholder="Пароль" style="width: 350px; padding: 10px; margin:10px 0; border:0; box-shadow: 0 6px 20px -5px rgba(0,0,0,0.4); border-radius:10px; font-family:inherit; font-size: inherit;"><!--border:0; -->
                <input name="submit" type="submit" value="Войти" style="width: 100px; height: 35px; border: none; outline: none; background: #2f2f2f; color: #fff; font-size: 17px; border-radius: 40px; text-align: center; box-shadow: 0 6px 20px -5px rgba(0,0,0,0.4); position: relative; overflow: hidden; cursor: pointer;">

            </form>
        </div>
        



    </body>
</html>