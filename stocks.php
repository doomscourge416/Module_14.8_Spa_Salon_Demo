<?php 
    session_start();
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
        <div class="mainNav__icon">

        </div>
      </nav>
    </header>
    


<section class="news">
        <?php 
            if(isset($_COOKIE['usersBirthdayToday'])){
        ?>
            <article>
                <a href="services.php">
                    <h2>Cкидка 5% на все услуги салона в честь дня рождения!</h2>
                </a>

                <div class="article-meta">
                </div>

                <a href=href="services.php"> <img src="images/choco.jpg.jpg" alt="Chocolate Wrap"></a>

                <p></p>

            </article>
                <?php }; ?>

                <?php if(isset($_COOKIE['AuthorizedLogin'])){ ?>
            <article class="newads">
                <a href="services.php">
                    <h2>24-х часовая акция зарегистрированным пользователям нашего сайта!</h2>
                </a>

                <div class="article-meta">
                </div>

                <a href="services.php"><img src="images/thaimassage.jpg" alt="Thai Massage"></a>

                <p></p>

            </article>
        <?php
            }else{
        ?>
            <article>
                <a href="login.php">
                    <h2>Авторизируйтесь на сайте для просмотра персональных скидок.</h2>
                </a>

                <div class="article-meta">
                </div>

                <!-- <a href="login.php"><img src="images/auth.png" alt="Auth"></a> -->

                <p></p>

            </article>

        <?php    }; ?>
        


        
        

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