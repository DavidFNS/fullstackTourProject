<!DOCTYPE html>
<html>

<head>
    <title>Шахрисабз</title>
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
            <span> Шахрисабз </span>
            <p>Шахрисабз</p>
        </div>
    </div>
 <!--Меню-->   
 <?php require "../connect_php/container_menu.php"?>


 <div class="content" style="margin: 40px 100px;">
        <section style="width: 100%;">
            <h3>Шахрисабз – Родина Амира Темура</h3>
            <p>Шахрисабз – один из древнейших и колоритных городов Узбекистана с историческим центром, внесенным в объекты Всемирного наследия ЮНЕСКО. В этом городе родился великий полководец Амир Темур.</p>
            <img src="https://uzbekistan.travel/storage/app/media/nargiza/cropped-images/DSC_0736-0-0-0-0-1592546576.jpg">
            <p>Город, утопающий в зелени и цветах, по праву получил свое название «Зеленого города».</p>
            <p>Через Шахрисабз проходит главная магистраль – большой Узбекский тракт, повторяющий маршрут великого итальянского путешественника Марко Поло.</p>
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
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/603/78e/1b6/thumb_1583_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e4/f79/9ae/thumb_78_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e4/f7b/532/thumb_80_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e4/f7b/bc0/thumb_81_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e4/f79/c62/thumb_79_1140_0_0_0_auto.jpg"></li>
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
                <h3 style="margin-bottom: 30px;">Видео о Шахрисабзе 🎥</h3>
                <iframe width="75%" height="450" src="https://www.youtube.com/embed/1yJyVTP9IKc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            <div class="restaurant">
                <h3>Рестораны Шахрисабса</h3>
                <p style="margin-bottom: 30px;">Ресторан Шахрисабз — это отличное решение для проведения различного рода мероприятий: дни рождения, корпоратив, застолья и даже свадьбы. Но и в обычный вечер сюда можно прийти с семьёй или друзьями, вкусно поесть и отлично отдохнуть. Красивейший интерьер и большое пространство ресторана – еще один немаловажный плюс. Ресторан организовывает живые выступления музыкантов и шоу восточных танцев.</p>
                <h4 style="margin-bottom: 20px;">Список лучших ресторанов и кафе Шахрисабза</h4>
                <div class="class">
                    <ol class="class__menu">
                        <li><a href="#">Ресторан SEROX</a></li>
                        <li><a href="#">Кафе Фаввора</a></li>
                        <li><a href="#">Ресторан Майса</a></li>
                    </ol>
                    <ol class="class__menu">
                        <li><a href="#">Ресторан Шахрисабз</a></li>
                        <li><a href="#">Кафе Лола</a></li>
                        <li><a href="#">Кафе Апельсин</a></li>
                    </ol>
                </div> 
            </div>
            <div class="restaurant">
                <h3>Отели Шахрисабза 🏠</h3>
                <p>Ниже представлены лучшие отели Шахрисабза в своих классах, имеющие хорошую репутацию и отзывы, высокий уровень сервиса и удобное расположение.</p>
                <p style="margin-bottom: 30px;">Отели сочетают в себе уют домашнего очага и комфорт современной обстановки. Все номера выходят окнами на тихий закрытый двор, 
                оснащены стеклопакетами и кондиционерами, имеют отдельную туалетную комнату с душевой кабиной и феном.
                В номерах к услугам наших гостей телевизор, спутниковое ТВ, а также холодильник и сейф для хранения ценных вещей.</p>
                <h4 style="margin-bottom: 20px;">Список лучших отелей Шахрисабза</h4>
                <div class="class">
                <ol class="class__menu">
                    <li><a href="#">Отель KESH PALACE</a></li>
                    <li><a href="#">Отель ULUGBEK</a></li>
                    <li><a href="#">Отель БЕК</a></li>
                
                </ol>
                <ol class="class__menu">
                    <li><a href="#">Отель GISAR ASIA</a></li>
                    <li><a href="#">Отель АК САРАЙ</a></li>
                    <li><a href="#">Отель Шахрисабз ЮЛДУЗ</a></li>
            
                </ol>
                </div>    
               
            </div>
            <h3>Климат 🌡</h3>
            <p>Климат в Шахризабсе приближен к Самаркандскому. Он также имеет четко выраженную сезонность. Зима мягкая и не холодная, но шерстяной свитер в багаже не помешает, так как ночью бывает прохладно. Лето обычно очень жаркое, порой на столько, что дневная температура держится вплоть до полуночи.</p>
            <p>Город расположен в резко континентальной климатической зоне, что приводит к жаркому лету, но при этом, к теплой зиме. Туры в Шахрисабз можно купить круглый год, но наиболее комфортные месяцы для посещения — весенние и осенние, июль — месяц, когда температура максимально высокая.</p>
            <h3>История 🏺</h3>
            <p>Город находится в 80 км от Самарканда. Шахрисабз в переводе означает «Зеленый город» и является одним из наиболее древних городов Узбекистана. насчитывает более 2 тысяч лет. Одни из первых упоминаний о городе были найдены в летописях, написанных 
                еще во II веке до н.э. В древних китайских источниках Ташкент назывался Ши, что в переводе означает камень, а в раннем средневековье Шаш или Чач.</p>
            <p>Шахрисабз известен всему миру как родина великого полководца Амира Темура (Тамерлана), ставший под его руководством настоящим центром науки и искусства.
                В городе можно найти множество архитектурных достопримечательностей, а исторический центр города включен в Список Всемирного наследия ЮНЕСКО.</p>
            <img src="https://uzbekistan.travel/storage/app/media/fed/cropped-images/0017422-1100-724-0-1-1583125268.jpg">
            <p>Правительством Узбекистана активно внедряется концепция «Шахрисабз – город фестивалей», которая раскрывает огромный потенциал города как центра культуры и туризма. Так, по инициативе Президента Узбекистана Шавката Мирзиёева, в сентябре 2018 года в Шахрисабзе впервые был проведен Международный Фестиваль искусства «Маком», который будет проводиться в городе раз в 2 года.</p>
            <h3>Карта 🗺</h3>
            <p>Полезные данные для туристов об Узбекистане, городах и курортах страны. А также информация о населении, валюте Узбекистана, кухне, особенностях визовых и таможенных ограничений Узбекистана.</p>
            <div class="carta">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4843147ce6f5c60ac8ecb5dbf24b92c35bbc9120afb1da0f95e717a0a01e8611&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>            
        </section>
        <!-- <div class="menu__container _menu__right_block">
                <div class="menu__list">
                        <button onclick="setScrollToOptions1()">Шахрисабз – Родина Амира Темура</button>
                        <button onclick="setScrollToOptions2()">Фотогалерея 📸</button>
                        <button onclick="setScrollToOptions3()">Видео о Шахрисабзе 🎥</button>
                        <button onclick="setScrollToOptions4()">Рестораны Шахрисабза ☕</button>
                        <button onclick="setScrollToOptions5()">Отели Шахрисабза 🏠</button>
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
                top: 2800,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions5() {
            window.scrollTo({
                top: 3500,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions6() {
            window.scrollTo({
                top: 4200,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions7() {
            window.scrollTo({
                top: 4700,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions8() {
            window.scrollTo({
                top: 5950,
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



