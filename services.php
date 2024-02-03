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

        <article>
            <a href="services.php">
                <h2>«Мужские традиции» & спа-программа для мужчин</h2>
            </a>
            
            <div class="article-meta">
                Стоимость услуги 6 999р.
            </div>
            
            <a href="services.php"><img src="images/manmassage.jpg" alt="Man Massage"></a>
            
            <p>Энергичный массаж в четыре руки совместно с уходом теля и лица.</p>

        </article>

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

        <article>
            <a href="services.php">
                <h2>SPA для волос</h2>
            </a>
            
            <div class="article-meta">
                Стоимость услуги 5 999р.
            </div>
            
            <a href="services.php"><img src="images/hairspa.jpg" alt="Hair Spa"></a>
            
            <p>Двухэтапное очищение волос и кожи применением массажной щетки "Моссе". Маска уход для укрепления и плотности волос с массажем пластинами "Гуаша". Несмываемая сыворотка для сияния и защиты волос</p>

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