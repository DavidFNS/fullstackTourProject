<?php 
  session_start(); 

  if (!isset($_SESSION['users']['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: log_in/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['users']['username']);
  	header("location: log_in/login.php");
  }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Главная страница</title>
    <meta http-equiv="content-type" content="text/html: charset=utf-8" />
    <!--Чтобы работала адаптация-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="keywords" content="my site. My web-site" />
    <meta name="description" content=" My site!" />
    <link rel="shortcut icon" type="image /x-icon" href="favicon.ico" />
    <!--используется всегда,самый обязательный. Можно менят стиль на всех страницах-->
    <link rel="stylesheet" type="text/css" href="scss/style.scss" />
    <link rel="stylesheet" type="text/css" href="scss/mobile.adap.css" />
    <link rel="stylesheet" type="text/css" href="scss/registr.css" />

    <script src="https://use.fontawesome.com/dd40fc69fc.js"></script>


</head>

<body>
    <header>
    <p class="admin"><img src="images/admin.png"><a href="admin/login.php"> Вход для администратора</a></p>
        <div class="top_wrap">
            <div class="logo"><img src="https://uzbekistan.travel/themes/travel/assets/img/uzlogo_white.png" alt="" /></div>
            <div class="description">
            <p>Туристический информационный портал</p>
            
                <div class="contact">
                    <p>Электронная почта:<a href="https://mail.google.com/mail/u/1/#inbox"> david2408bek1997@gmail.com</a></p>
                    <p>По любым вопросам:<a href="tel:++998712000088"> +998 71 200 00 88</a></p>
                    <p>Наш адрес: ул. Айбека 18, Ташкент 100015
                        <br> Узбекистан</p>
                </div>        
            </div>
        </div>
    </header>

    <div class="content1">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['users']['username'])) : ?>
    	<div class="user_log" style="text-align: justify;">
            <p>Пользователь <strong><a href="user-profil/user_profil.php" style="color:royalblue"><?php echo $_SESSION['users']['username']; ?></a></strong></p>
    	    <div class="log_of">
                <a href="index.php?logout='1'" style="color: red;">Выйти</a> 
            </div> 
        </div>
        
            
    <?php endif ?>
    </div>

        <div class="container">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="#">Города</a>
                        <ul class="submenu">
                            <li><a href="cities/tashkent.php" target="_blanck">Ташкент</a></li>
                            <li><a href="cities/Buxara.php" target="_blanck">Бухара</a></li>
                            <li><a href="cities/Samarqand.php" target="_blanck">Самарканд</a></li>
                            <li><a href="cities/Xiva.php" target="_blanck">Хива</a></li>
                            <li><a href="cities/Shahrisabz.php" target="_blanck">Шахрисабз</a></li>
                        </ul>
                    </li>
                    <li><a href="attractions.php" target="_blanck">Достопримечательности</a></li>
                    <li><a href="forum/forum.php" target="_blanck">Форум</a></li>
                    <li><a href="about.php" target="_blanck">О нас</a></li>
                    <li><a href="log_in/login.php" target="_blanck">Авторизация</a></li>
                </ul>
            </nav>
    
                   
        </div>
        <div class="soc_icons">
            <p>Мы в социальных сетях:
                <a href="https://vk.com"><i class="fa fa-vk"></i></a>
                <a href="https://youtube.com"><i class="fa fa-youtube"></i></a>
                <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
                <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
            </p>
            <form class="" method="POST">
                <input type="text" />
                <button type="button"><i style="width: 30px; height:15px" class="fa fa-search"></i></button>
            </form> 
        </div>
        
    </div>

    <div id="slider">
        <input type="radio" name="slider" id="slide1" checked>
        <input type="radio" name="slider" id="slide2">
        <input type="radio" name="slider" id="slide3">
        <input type="radio" name="slider" id="slide4">
        <div id="slides">
            <div id="overflow">
                <div class="inner">
                    <div class="slide slide_1">
                        <div class="slide-content">
                            <h2>Добро пожаловать в страну величественной архитектуры и древних традиций</h2>
                        </div>
                    </div>
                    <div class="slide slide_2">
                        <div class="slide-content">
                            <h2>Узбекистан – одна из немногих стран Центральной Азии с уникальными</h2>
                            <h2>музеями и театрами</h2>
                        </div>
                    </div>
                    <div class="slide slide_3">
                        <div class="slide-content">
                            <h2>Узбекистан – страна с древней историей и богатой культурой</h2>
                        </div>
                    </div>
                    <div class="slide slide_4">
                        <div class="slide-content">
                            <h2>Вкусние блюда и многое другое...</h2>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div id="controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
        </div>
        <div id="bullets">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
        </div>
        <div class="description1">
            <h4>Откройте для себя новый Узбекистан!</h4>
            <p>Узбекистан - это загадочная страна Востока, где истории городов собирались в легенды, где круглый год светит солнце и отражением этому уникальная природа и красивые сердцем люди.</p>
        </div>
    </div>

<!--Реклама-->
<!--
    <div class="content">
        <section>
            <h2>Новости</h2>
            <article>
                <img src="images/news1.png" alt="">
                <p>Путь нашего соотечественника – от простого телемеханика до шеф-повара ресторана в Корее</p>
            </article>
            <article>
                <img src="images/news2.png" alt="">
                <p>COVID-19 в Узбекистане</p>
            </article>
            <article>
                <img src="images/news3.png" alt="">
                <p>В Узбекистане увеличатся и подешевеют авиа- и ж/д билеты по многим направлениям</p>
            </article>
            <article>
                <img src="images/news4.png" alt="">
                <p>«ATM-2021»: Туроператоры Узбекистана могут принять участие на международной туристической выставке в Дубае</p>
            </article>
        </section>
-->
<!--Тур-->
<!--
        <div class="right">
            <h2>Туры в Узбекистан</h2>
            <div class="wrap_title">
                <div class="title">
                    <div class="icons">
                        <span>&#10084;</span>
                        <span>&#10150;</span>
                    </div>
                    <img src="images/ekskursiya.jpg" alt="">
                    <p>Индивидуальный тур в Узбекистан</p>
                    
                    <p>Большой экскурсионный тур: Хива + Бухара + Шахрисабз + Самарканд + Ташкент</p>
                    <div class="bottom">
                        <span>10 дней от 1170 $</span>
                        <a href="tours/tour1.php">Подробнее</a>
                    </div>
                </div>
                <div class="title">
                    <div class="icons">
                        <span>&#10084;</span>
                        <span>&#10150;</span>
                    </div>
                    <img src="images/ekskursiya1.jpg" alt="">
                    <p>Эко тур в Узбекистан</p>
                    <p>Активные туры в Узбекистан</p>
                    <div class="bottom">
                        <span>11 дней от 1790 $</span>
                        <a href="#">Подробнее</a>
                    </div>
                </div>
                <div class="title">
                    <div class="icons">
                        <span>&#10084;</span>
                        <span>&#10150;</span>
                    </div>
                    <img src="images/group_tour.jpg" alt="">
                    <p>Групповой тур в Узбекистан</p>
                    <p>Открытие Узбекистана 2021. Классический тур Ташкент + Самарканд + Бухара с авиа-перелётом</p>
                    <div class="bottom">
                        <span>5 дней от 970 $</span>
                        <a href="#">Подробнее</a>
                    </div>
                </div>
                <div class="title">
                    <div class="icons">
                        <span>&#10084;</span>
                        <span>&#10150;</span>
                    </div>
                    <img src="images/group_tour.jpg" alt="">
                    <p>Групповой тур в Узбекистан</p>
                    <p>Открытие Узбекистана 2021. Классический тур Ташкент + Самарканд + Бухара с авиа-перелётом</p>
                    <div class="bottom">
                        <span>15 дней от 1350 $</span>
                        <a href="#">Подробнее</a>
                    </div>
                </div>
                <div>
                    <div class="pagination">
                        <span>&laquo;</span>
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                        <span>&raquo;</span>
                    </div>
                </div>


            </div>
        </div>
    </div>
    -->
<!--TOURS-->
            <div class="columns">
                <div class="container">
                    <div class="columns__title title">&#9992; Туры в Узбекистан </div>
                    <div class="columns__row">
                        <div class="columns__column">
                            <div class="columns__item item">
                                <div class="item__row">
                                    <div class="item__image">
                                        <img src="https://www.otkrytie.ru/files/styles/country_info_main/public/images/tours/collage/uzbekistan-khiva-overview870.jpg?itok=ikY9k4Ro" alt="">
                                    </div>
                                        <div class="item__body">
                                            <div class="item__title">Индивидуальные туры в Узбекистан</div>
                                            <div class="item__text">Большой экскурсионный тур: Хива + Бухара + Шахрисабз, место рождения Тамерлана, + Самарканд + Ташкент</div>
                                        </div>
                                </div>                            
                            </div>
                            <div class="bottom">
                                <span>9 дней от 19170 ₽</span>
                                <a href="tours/tour1.php">Подробнее</a>
                            </div>
                        </div>
                        <div class="columns__column">
                            <div class="columns__item item">
                                <div class="item__row">
                                    <div class="item__image">
                                        <img src="https://www.centralasia-travel.com/upload/tiles/culinary.jpg" alt="">
                                    </div>
                                        <div class="item__body">
                                            <div class="item__title">ВОСТОЧНЫЙ ДАСТАРХАН</div>
                                            <div class="item__text">Гастрономический тур в Узбекистан с кулинарными мастер-классами</div>
                                        </div>
                                </div>                            
                            </div>
                            <div class="bottom">
                                <span>8 дней от 22900 ₽</span>
                                <a href="tours/tour2.php">Подробнее</a>
                            </div>
                        </div>
                        <div class="columns__column">
                            <div class="columns__item item">
                                <div class="item__row">
                                    <div class="item__image">
                                        <img src="https://www.centralasia-travel.com/upload/tiles/empire_tamerlane.jpg" alt="">
                                    </div>
                                        <div class="item__body">
                                            <div class="item__title">К СЕРДЦУ ИМПЕРИИ ТАМЕРЛАНА</div>
                                            <div class="item__text">Групповой экскурсионный тур в Узбекистан: любимые города Тамерлана, грандиозная архитектура эпохи Тимуридов</div>
                                        </div>
                                </div>                            
                            </div>
                            <div class="bottom">
                                <span>6 дней от 15200 ₽</span>
                                <a href="tours/tour3.php">Подробнее</a>
                            </div>
                        </div>
                        <div class="columns__column">
                            <div class="columns__item item">
                                <div class="item__row">
                                    <div class="item__image">
                                        <img src="https://www.centralasia-travel.com/upload/tiles/may_1.jpg" alt="">
                                    </div>
                                        <div class="item__body">
                                            <div class="item__title">МАЙСКИЕ ПРАЗДНИКИ В УЗБЕКИСТАНЕ</div>
                                            <div class="item__text">Экскурсионный тур на майские праздники в Узбекистан</div>
                                        </div>
                                </div>                            
                            </div>
                            <div class="bottom">
                                <span>6 дней от 28500 ₽</span>
                                <a href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>


<!-- NEWS-->
    <div class="columns">
                <div class="container">
                    <div class="columns__title title">📰 Новости</div>
                    <div class="columns__row">
                        <div class="columns__column">
                            <div class="columns__item item">
                                <div class="item__row">
                                    <div class="item__image">
                                        <a href=""><img src="images/news1.png" alt=""></a>    
                                    </div>
                                        <div class="item__body">
                                            <div class="item__title">Жизнь нашего соотечественника </div>
                                            <div class="item__text">Тут представляется уникальная возможность рассказать о своей стране, культуре, заинтересовать людей посетить его страну.</div>
                                        </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="columns__column">
                            <div class="columns__item item">
                                <div class="item__row">
                                    <div class="item__image">
                                        <a href=""><img src="images/news2.png" alt=""></a>    
                                    </div>
                                        <div class="item__body">
                                            <div class="item__title">COVID-19 в Узбекистане</div>
                                            <div class="item__text">С 15 марта текущего года в Узбекистане отменяется процедура обязательного экспресс тестирования при въезде в страну. </div>
                                        </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="columns__column">
                            <div class="columns__item item">
                                <div class="item__row">
                                    <div class="item__image">
                                        <a href=""><img src="images/news3.png" alt=""></a>    
                                    </div>
                                        <div class="item__body">
                                            <div class="item__title">Авиа и ж/д билеты в Узбекистан</div>
                                            <div class="item__text">В Узбекистане увеличатся и подешевеют авиа- и ж/д билеты по многим направлениям</div>
                                        </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="columns__column">
                            <div class="columns__item item">
                                <div class="item__row">
                                    <div class="item__image">
                                        <a href=""><img src="images/news4.png" alt=""></a>    
                                    </div>
                                        <div class="item__body">
                                            <div class="item__title">Туроператоры Узбекистана...</div>
                                            <div class="item__text">«ATM-2021»: Туроператоры Узбекистана могут принять участие на международной туристической выставке в Дубае</div>
                                        </div>
                                </div>                            
                            </div>
                        </div>
                    </div>  
                </div>
            </div>


 <!--Подвал--> 

    <footer>
        <div class="titles">
            <div class="links">
                <div class="left">
                    <h4>Путешественникам</h4>
                    <a href="inform_users.php">Общая информация</a>
                    <a href="comments/comment.php">Комментарии</a>
                    <a href="feedback/feedback_form.php">Обратная связь</a>
                    <a href="forum/forum.php">Форум</a>
                </div>
                <div class="right1">
                    <h4>Местонахождение</h4>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2d54702eef539de9473b95ac8f610759d09ed99cffe9909f9b5f4caa26c4fb29&amp;width=60%35&amp;height=200&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
            <p>Туристический информационный портал, 2021 &copy; Все права защищены</p>
        </div>
    </footer>



</body>

</html>