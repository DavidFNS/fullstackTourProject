<!DOCTYPE html>
<html>

<head>
    <title>Хива</title>
    <meta http-equiv="content-type" content="text/html: charset=utf-8" />
    <meta name="keywords" content="my site. My web-site" />
    <meta name="description" content=" My site!" />
    <link rel="shortcut icon" type="image /x-icon" href="../favicon.ico" />
    <!--используется всегда,самый обязательный. Можно менят стиль на всех страницах-->
    <link rel="stylesheet" type="text/css" href="../scss/tashkent.scss" />
 <!--Для слайд шоу галереи-->   
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css" />
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css" />
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://use.fontawesome.com/dd40fc69fc.js"></script>
</head>

<body>

<!--Баннер-->
<?php require "../connect_php/header.php"?>



 <div class="zagalovok">
        <div class="title">
            <span>Главная /</span>
            <span> Города /</span>
            <span> Хива </span>
            <p>Хива</p>
        </div>
    </div>
 <!--Меню-->   
 <?php require "../connect_php/container_menu.php"?>
 <div class="content" style="margin: 40px 100px;">
        <section style="width: 100%;">
            <h3>Хива – Столица Тюркского мира</h3>
            <p>Хива –  красивейший город-оазис с древними стенами, минаретами и уникальными глиняными постройками.</p>
            <p>Возраст Хивы насчитывает более 2500 лет. Хотите окунуться в историю и увидеть истинную красоту древнего Востока, посетите Хиву.</p>
            <img src="https://i.ytimg.com/vi/TVQsuhXEL0c/maxresdefault.jpg">
            <p>Окружённый мощными стенами исторический внутренний город Хивы — жемчужина Хорезмского оазиса — объявлен ЮНЕСКО памятником всемирного наследия.</p>
            </br>
            <div class="main">
                <div class="col-4">
                    <h3>Фотогалерея 📸</h3>
                    <p>Места, люди, события - все самое интересное вы найдете в нашей фотогалерее!</p>
                </div>
                <div class="col-8">

                    <div class="glide">
                        <div class="glide__track" data-glide-el="track">
                          <ul class="glide__slides">
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e6/b50/750/thumb_478_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e6/b50/604/thumb_477_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e4/f78/a38/thumb_73_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e4/f78/cb4/thumb_76_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e4/f78/b1e/thumb_74_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://varlamov.me/img/hiva/02.jpg"></li>
                          </ul>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa fa-angle-left"></i></button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                    <a href="../gallery_cities/tashkent_gallery.php">Все фотографии</a>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
            <script>
                new Glide('.glide', {
                type: 'carousel',
                startAt: 0,
                perView: 3,
                focusAt: 'center',
                }).mount()
            </script>
            <div class="video1" >
                <h3 style="margin-bottom: 30px;">Видео о Хиве 🎥</h3>
                <iframe width="75%" height="450" src="https://www.youtube.com/embed/TVQsuhXEL0c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="restaurant">
                <h3>Рестораны Хивы</h3>
                <p style="margin-bottom: 30px;"> Кафе и рестораны древней Хивы расположены непосредственно на территории исторических объектов: во внутренней части города - Ичан-Кале, и во внешней - Дишан-Кале. Некоторые рестораны размещаются прямо в зданиях старинных медресе, благодаря чему внутри создается неподдельная атмосфера средневекового Востока. Здесь Вам будут предложены традиционные блюда узбекской кухни, которые готовят только в Хорезме: хорезмский плов, очень отличающийся от любого другого узбекского плова; тухум барак, похожие на вареники с начинкой из яиц и молока; шувит оши («плов из зелени») - зеленая лапша из теста с травами, приправленная мясно-овощным рагу. А для того, чтобы вдобавок к вкуснейшему ужину познакомиться с древними традициями хорезмийцев, посетите Национальный дом, где в атмосфере домашнего уюта носители культуры встретят Вас искренним гостеприимством, сыграют музыку из национального фольклора и покажут традиционные танцы.</p>
                <h4 style="margin-bottom: 20px;">Список лучших ресторанов и кафе Хивы</h4>
                <div class="class">
                <ol class="class__menu">
                    <li><a href="#">Ресторан "Юсуф Ясавул Боши"</a></li>
                    <li><a href="#">Ресторан "Медресе Аллакули"</a></li>
                    <li><a href="#">Ресторан Зарафшан</a></li>
                  </ol>
                  <ol class="class__menu">
                    <li><a href="#">Ресторан Караван</a></li>
                    <li><a href="#">Ресторан Khiva Moon</a></li>
                    <li><a href="#">Кафе Кебабчи</a></li>
                  </ol>
                </div>    
            </div>
            <div class="restaurant">
                <h3>Отели Хивы 🏠</h3>
                <p>Ниже представлены лучшие отели Хивы в своих классах, имеющие хорошую репутацию и отзывы, высокий уровень сервиса и удобное расположение.</p>
                <p style="margin-bottom: 30px;">Отели сочетают в себе уют домашнего очага и комфорт современной обстановки. Все номера выходят окнами на тихий закрытый двор, 
                оснащены стеклопакетами и кондиционерами, имеют отдельную туалетную комнату с душевой кабиной и феном.
                В номерах к услугам наших гостей телевизор, спутниковое ТВ, а также холодильник и сейф для хранения ценных вещей.</p>
                <h4 style="margin-bottom: 20px;">Список лучших отелей Хивы</h4>
                <div class="class">
                <ol class="class__menu">
                    <li><a href="#">Отель БЕК ХИВА</a></li>
                    <li><a href="#">Отель «САИД ИСЛОМ ХОДЖА»</a></li>
                    <li><a href="#">Отель ХАЯТ ИНН</a></li>
                    <li><a href="#">Отель TASHKENT PALACE</a></li>
                </ol>
                <ol class="class__menu">
                    <li><a href="#">Отель АЗИЯ ХИВА</a></li>
                    <li><a href="#">Отель  МАЛИКА ХИВА</a></li>
                    <li><a href="#">Отель АРКАНЧИ </a></li>
                </ol>
                </div>    
               
            </div>
            <h3>Климат 🌡</h3>
            <p>Климат в Хиве сухой и приближенный к погодным условиям пустынь. Лето жаркое, но ветряное, а зимой температура очень часто падает ниже 0°С, так что не забудьте теплые вещи! Они Вам пригодятся</p>
            <p>Хива лежит на 98 м над уровнем моря Хива имеет аридный климат. В течение года в городе Хива практически нет осадков. Климат здесь классифицируется как BWk системой Кеппен-Гейгера. Средняя годовая температура составляет 14.9 °C в Хива. Среднегодовая норма осадков - 103 mm.</p>
            <h3>История 🏺</h3>
            <p>Хива это один из древнейших городов Узбекистана, который был основан более 2500 лет назад. Также это единственный город, на территории которого располагается настоящая средневековая крепость – Ичан Кала.</p>
            <p>Древняя цитадель, обнесенная могучей городской стеной, предстает в облике средневекового восточного города, каждое строение которого – архитектурный памятник и отдельная достопримечательность. Интересно то, что в этом историческом городе-музее продолжают жить и работать люди.</p>
            <p>Существует легенда, что город возник вокруг колодца Хейвак, который выкопали по приказу Сима, сына того самого Ноя из Библии. За свою длинную историю, Хива пережила разные династии правителей Хорезма но начиная с древности всегда оставалась его столицей.</p>
            <img src="https://uzbekistan.travel/storage/app/media/fed/cropped-images/Dsc_0513---khiva-0-0-0-0-1582806011.jpg">
            <p>Здесь все кажется не привычным — кухня, люди, речь, даже архитектура.  Почти все сохранено в первозданном виде. Улочки вымощены камнем. Словно шахматные фигуры отовсюду виднеются минареты, купола медресе и мечетей. Даже современные постройки декорированы под старину.

В 1990 году город был включен в Список Всемирного наследия ЮНЕСКО.</p>
            <h3>Карта 🗺</h3>
            <p>Полезные данные для туристов об Узбекистане, городах и курортах страны. А также информация о населении, валюте Узбекистана, кухне, особенностях визовых и таможенных ограничений Узбекистана.</p>
            <div class="carta">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4843147ce6f5c60ac8ecb5dbf24b92c35bbc9120afb1da0f95e717a0a01e8611&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>            
        </section>
        <!-- <div class="menu__container _menu__right_block">
                <div class="menu__list">
                        <button onclick="setScrollToOptions1()">Хива – Столица Тюркского мира</button>
                        <button onclick="setScrollToOptions2()">Фотогалерея 📸</button>
                        <button onclick="setScrollToOptions3()">Видео о Хиве 🎥</button>
                        <button onclick="setScrollToOptions4()">Рестораны Хивы ☕</button>
                        <button onclick="setScrollToOptions5()">Отели Хивы 🏠</button>
                        <button onclick="setScrollToOptions6()">Климат 🌡</button>
                        <button onclick="setScrollToOptions7()">История 🏺</button>
                        <button onclick="setScrollToOptions8()">Карта 🗺</button>
                </div>
        </div> -->
    </div>

    <script>
        function setScrollToOptions1() {
            window.scrollTo({
                top: 400,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions2() {
            window.scrollTo({
                top: 1400,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions3() {
            window.scrollTo({
                top: 2100,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions4() {
            window.scrollTo({
                top: 2700,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions5() {
            window.scrollTo({
                top: 3700,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions6() {
            window.scrollTo({
                top: 4500,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions7() {
            window.scrollTo({
                top: 4900,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions8() {
            window.scrollTo({
                top: 6300,
                left: 0,

                behavior: "smooth"
            })
        }

    </script>
    
    <style>
        section p {
            padding-left: 5px;
            text-align: justify;
            font-size: 20px;
            margin: 20px 90px;
        }

        section span {
            padding-left: 5px;
            text-align: justify;
            font-size: 20px;
            margin-bottom: 20px;
            margin: 20px 40px;
        }

        section ul li {
            padding-left: 5px;
            text-align: justify;
            font-size: 18px;
            margin-bottom: 20px;
            margin: 10px 40px;
        }

    </style>
 <!--Подвал--> 
 <?php require "../connect_php/footer.php"?>



</body>

</html>



