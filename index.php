<?php 
    session_start();
    include 'functions.php';
    include 'users.php';

    $loginTime = $_SESSION['LoginTime'] ?? null ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/css/styles1.css">
    <meta charset="UTF-8">
    <title>Спа Салон "Beauty Spa"</title>
</head>

<body>
    
    <header>
      <h1>Beauty SPA</h1>
      <nav class="mainNav">
        <div class="mainNav__logo">
        
        </div>

        <div class="mainNav__links">
          <a href="login.php" class="mainNav__link">Log in</a>
          <a href="index.php" class="mainNav__link">Главная</a>
          <a href="services.php" class="mainNav__link">Услуги</a>
          <a href="stocks.php" class="mainNav__link">Акции</a>
          <a href="logout.php" class="mainNav__link"> Log out</a>
        </div>
        <p class=""user-login><?php echo $_SESSION['login'] ?? null; ?> </p>
        <div class="mainNav__icon">

        </div>
      </nav>
    </header>
    
<section class="news">
    
    
<div id="countdown-container">

    <?php if(isset($_COOKIE['AuthorizedLogin'])){
        $login = $_SESSION['login']; ?>
        <p class="countdown_paragraph">Добро пожаловать, 

        <?php echo $login; ?>

        ! Вам доступна уникальная кратковременная акция. <br>До конца акции осталось: </p>
    <?php };  ?>


    <?php 


        if($loginTime !== null){
            $hours = floor(countdown($loginTime) / 3600);
            $minutes = floor((countdown($loginTime) % 3600) / 60);
            $seconds = floor((countdown($loginTime) % 3600) % 60);
    ?>

         <div class="countdown-section">
          <span id="hours"><?php echo $hours; ?></span>
          <span class="countdown-label">Часа</span>
        </div>

        <div class="countdown-section">
          <span id="minutes"><?php  echo $minutes; ?></span>
          <span class="countdown-label">Минут</span>
        </div>

        <div class="countdown-section">
          <span id="seconds"><?php  echo $seconds; ?></span>
          <span class="countdown-label">Секунд</span> 
        </div>
    <?php }; ?>
</div>


<div id="birthday-container">
<?php if(isset($_COOKIE['AuthorizedLogin'])){?>

    <form method="post">
    <label for="bday">Введите, когда у вас день рождения:</label>
    <input type='date' id='bday' name="bday"/>
    <script>
        var year = new Date().getFullYear();
        document.getElementById('bday').setAttribute("min", year + "-01-01");
        document.getElementById('bday').setAttribute("max", year + "-12-31");
    </script>
    <input type="submit" />

    <?php }; 

        $usersbday = $_POST['bday'] ?? null;
        if($usersbday !== null){

            $usersbday2 = strtotime($usersbday);
            
        };
     
        $currentDate = gmdate('Y-m-d');
        $currentDate2 = strtotime($currentDate);
    if(isset($_SESSION['login']) && (isset($_SESSION['password']))){
        if(!isset($_COOKIE['usersBirthdayPast']) && !isset($_COOKIE['usersBirthdayToday'])){
            if(isset($usersbday2) && $usersbday2 === $currentDate2){
        ?>  
                <p>Поздравляем, в ваш день рождения дарим вам уникальную скидку в 5% на весь ассортимент услуг салона!<br>Переходите в раздел акции чтобы увидеть свои Скидки!</p>
                <?php

                setcookie('usersBirthdayToday', true, 0);


            } else if(isset($usersbday2)&& $currentDate2 > $usersbday2){ 
                setcookie('usersBirthdayPast', true, 0);
                echo "<br/>Ваш день рождения уже прошёл, но в следующем году мы обещаем сделать Вам подарок!";

            }else if(isset($usersbday2) && $usersbday2 > $currentDate2){

                $diff = - ($currentDate2 - $usersbday2)/60/60/24; 
                echo "<br/>До вашего дня рождения совсем немного! Возвращайтесь за персональной скидкой через " . $diff . " дней!";

            }else{
                echo "<br/> Дарим персональную скидку всем нашим пользователям, которые укажут свой день рождения!";
            }; 

        }else if(isset($_COOKIE['usersBirthdayToday'])){ ?>

            <p>Поздравляем, в ваш день рождения дарим вам уникальную скидку в 5% на весь ассортимент услуг салона!<br>Переходите в раздел акции чтобы увидеть свои Скидки!</p>

        <?php
        }else{
            echo "<br/>Ваш день рождения уже прошёл, но в следующем году мы обещаем сделать Вам подарок!";
        };
    }else{
        echo "<br/> Дарим персональную скидку всем нашим пользователям, которые укажут свой день рождения!";
    };
    ?>
        
    

</div>

        <article class="newads">
            <a href="services.php">
                <h2>Шоколадное обёртывание</h2>
            </a>
            
            <div class="article-meta">
                Стоимость услуги 4 999р.
            </div>
            
            <a href=href="services.php"> <img src="images/choco.jpg.jpg" alt="Chocolate Wrap"></a>
            
            <p>Уникальный косметический эффект шоколада связан с тем, что в его составе присутствует какао-масло, которое обладает удивительной способностью смягчать и разглаживать кожу, придавать ей бархатистость и приятный аромат.</p>

        </article>

        <article class="newads">
            <a href="services.php">
                <h2>Тайский Массаж</h2>
            </a>
            
            <div class="article-meta">
                Стоимость услуги 8 999р.
            </div>
            
            <a href="services.php"><img src="images/thaimassage.jpg" alt="Thai Massage"></a>
            
            <p>Помогает снять напряжение и улучшить кровообращение. Тайский массаж также может помочь в борьбе с различными болезнями, такими как боли в спине, головные боли и проблемы со связками.</p>

        </article>

    </section>

    <footer>
        <div class="links">
            <a href="#">Вакансии</a>
            <a href="#">Контакты</a>
            <a href="#">О нас</a>
            <a href="#">Реклама</a>
        </div>

        <div class="copyright">Copyright © Doomscourge 2023</div>
    </footer>
</body>
</html>