<!DOCTYPE html>
<html>

<head>
    <title>Ташкент</title>
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
        <span> Ташкент </span>
        <p>Ташкент</p>
     </div>        
</div>
  
 <!--Меню-->   
 <?php require "../connect_php/container_menu.php"?>



 <div class="content" style="margin: 40px 100px;">
        <section style="width: 100%;">
            <h3>Ташкент – Современный мегаполис</h3>
            <p>Ташкент – это столица Узбекистана и по совместительству самый крупный город в Центральной Азии, 4-й город в СНГ по численности населения. 
                В Ташкенте находятся государственные органы власти, посольства иностранных государств, штаб-квартиры большинства крупнейших узбекистанских
                 коммерческих организаций и общественных объединений.</p>
            <img src="https://roxanatour.com/storage/app/uploads/public/596/d46/2ad/thumb__1203_544_0_0_crop.jpg">
            <p>На протяжении многих лет Ташкент является важнейшим деловым и культурным центром страны, привлекающим туристов и бизнесменов с различных стран мира.</p>
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
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e6/b52/97d/thumb_482_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5ee/1e1/4c0/thumb_1044_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5fd/8ae/081/thumb_1470_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/603/791/5b4/thumb_1589_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5eb/ce6/9e2/thumb_848_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e6/b52/7c4/thumb_481_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5ee/ca2/373/thumb_1124_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e6/b52/b2d/thumb_483_1140_0_0_0_auto.jpg"></li>
                            <li class="glide__slide"><img src="https://uzbekistan.travel/storage/app/uploads/public/5ee/31e/e13/thumb_1055_1140_0_0_0_auto.jpg"></li>
                          </ul>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa fa-angle-left"></i></button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                    <a href="../gallery_cities/gallery.php">Все фотографии</a>
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
                <h3 style="margin-bottom: 30px;">Видео о Ташкенте 🎥</h3>
                <iframe width="75%" height="450" src="https://www.youtube.com/embed/P8fcfqagsC0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            <div class="restaurant">
                <h3>Рестораны Ташкента ☕</h3>
                <p>На нашем сайте Вы сможете найти информацию и фото самых лучших кафе и ресторанов города Ташкента.</p>
                <p style="margin-bottom: 30px;"> Наряду с крупными изысканными ресторанами, Ташкент изобилует небольшими заведениями, где можно вкусно и недорого поесть. Зачастую кафе может располагаться во дворе частного узбекского дома, где Вам предложат меню с настоящими узбекскими блюдами: узбекским пловом, сочной хрустящей самсой, мантами, лагманом, шурпой, кебабом и многими другими. Стабильная теплая погода позволяет с марта по ноябрь посещать летние кафе и чайханы на свежем воздухе, которые есть в каждом районе Ташкента, но особенно большое их скопление наблюдается в районе Старого города и базара Чорсу. Будучи в Ташкенте, обязательно посетите Центр Плова («Ош Маркази»), где в огромных казанах готовится настоящий плов по-ташкентски.</p>
                <h4 style="margin-bottom: 20px;">Список лучших ресторанов и кафе Ташкента</h4>
                <div class="class">
                        <ol class="class__menu">
                            <li><a href="#">Ресторан Бахор</a></li>
                            <li><a href="#">Ресторан Тановар</a></li>
                            <li><a href="#">Ресторан Караван</a></li>
                            <li><a href="#">Ресторан Сато</a></li>
                        </ol>
                        <ol class="class__menu">
                            <li><a href="#">Ресторан Афсона</a></li>
                            <li><a href="#">Ресторан Нур</a></li>
                            <li><a href="#">Кафе Кук-чай</a></li>
                            <li><a href="#">Чайхана Навват</a></li>
                        </ol>
                </div>    
               
            </div>
            <div class="restaurant">
                <h3>Отели Ташкента 🏠</h3>
                <p>Ниже представлены лучшие отели Ташкента в своих классах, имеющие хорошую репутацию и отзывы, высокий уровень сервиса и удобное расположение.</p>
                <p style="margin-bottom: 30px;">Отели сочетают в себе уют домашнего очага и комфорт современной обстановки. Все номера выходят окнами на тихий закрытый двор, 
                оснащены стеклопакетами и кондиционерами, имеют отдельную туалетную комнату с душевой кабиной и феном.
                В номерах к услугам наших гостей телевизор, спутниковое ТВ, а также холодильник и сейф для хранения ценных вещей.</p>
                <h4 style="margin-bottom: 20px;">Список лучших отелей Ташкента</h4>
                <div class="class">
                    <ol class="class__menu">
                        <li><a href="#">Отель INTERNATIONAL</a></li>
                        <li><a href="#">Отель HYATT REGENCY</a></li>
                        <li><a href="#">Отель РЭДИССОН БЛЮ </a></li>
                        <li><a href="#">Отель TASHKENT PALACE</a></li>
                    </ol>
                    <ol class="class__menu">
                        <li><a href="#">Отель ШАРК</a></li>
                        <li><a href="#">Отель RAKAT PLAZA</a></li>
                        <li><a href="#">Отель GLORIA</a></li>
                        <li><a href="#">Отель KROKUS PLAZA</a></li>
                    </ol>
                </div>    
               
            </div>
            <h3>Климат 🌡</h3>
            <p>Ташкент располагается в зоне субтропического континентального климата. Вследствие близости гор, в городе выпадает в среднем 400 мм осадков в год, что значительно больше, чем в равнинных полупустынях и пустынях на западе Узбекистана. В течение прошлого века годовая сумма осадков выросла более чем на 60 мм, что связано как с колебаниями атмосферной циркуляции, так и с изменением методики измерений (в 1960-х годах на метеостанциях СССР дождемеры заменены на осадкомеры, стали вводиться поправки на смачивание осадкомера). Максимальное количество осадков (802 мм) отмечено в 1969 году, минимальное (141 мм) в 1917 году. Самые сухие месяцы июль (4 мм осадков) и август (1 мм), самый влажный март (69 мм).</p>
            <p>Большую часть лета в Ташкенте стоит жара поэтому не забывайте про солнцезащитный крем и головные уборы! Зима в основном мягкая и бесснежная, но не пренебрегайте теплыми вещами, вечером бывает прохладно на столько, что хочется одеть шарф!</p>
            <h3>История 🏺</h3>
            <p><a href="#">История Ташкента</a> насчитывает более 2 тысяч лет. Одни из первых упоминаний о городе были найдены в летописях, написанных еще во II веке до н.э. В древних китайских источниках Ташкент назывался Ши, что в переводе означает камень, а в раннем средневековье Шаш или Чач.</p>
            <p>Ученые пришли к мнению, что тюркские племена, заселившиеся на этой территории позднее, позаимствовали название, так как «таш» в тюркских языках тоже переводится как камень. Из-за своего выгодного расположения город считался одним из основных пунктов на Шёлковом пути.</p>
            <img src="https://uzbekistan.travel/storage/app/media/uploaded-files/kukaldosh.jpg">
            <p>В наше время Ташкент является современным мегаполисом и прекрасно совмещает в своей архитектуре и средневековые постройки, и современные бизнес центры. В городе есть все условия для прекрасного времяпровождения. Здесь сливается воедино многолетняя история и современный стиль жизни. На территории Ташкента работают два международных аэропорта и 2 железнодорожных вокзала. Одной из основных современных достопримечательностей города считается метро. Оно было открыто в 1977 году и является первым в Центральной Азии. Каждая станция имеет свой неповторимый дизайн и уникальную архитектуру.</p>
            <img src="https://uzbekistan.travel/storage/app/media/uploaded-files/metro.jpg">
            <p>В Ташкенте можно увидеть и исторические памятники, и современные мечети, прогуляться по восточным базарам, познакомится с тысячелетней историей, и культурой народа в столичных музеях, и конечно же отдохнуть в парках, ресторанах и ночных заведениях города.</p>
            <h3>Карта 🗺</h3>
            <p>Полезные данные для туристов об Узбекистане, городах и курортах страны. А также информация о населении, валюте Узбекистана, кухне, особенностях визовых и таможенных ограничений Узбекистана.</p>
            <div class="carta">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1e279887270383185de8b49b8cfce1c13509a6e9e892c482737915e709faf74e&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>            
        </section>
            <!-- <div class="menu__container _menu__right_block">
                <div class="menu__list">
                        <button onclick="setScrollToOptions1()">Ташкент – Современный мегаполис</button>
                        <button onclick="setScrollToOptions2()">Фотогалерея 📸</button>
                        <button onclick="setScrollToOptions3()">Видео о Ташкенте 🎥</button>
                        <button onclick="setScrollToOptions4()">Рестораны Ташкента ☕</button>
                        <button onclick="setScrollToOptions5()">Отели Ташкента 🏠</button>
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
                top: 3750,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions6() {
            window.scrollTo({
                top: 4600,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions7() {
            window.scrollTo({
                top: 5200,
                left: 0,

                behavior: "smooth"
            })
        }
        function setScrollToOptions8() {
            window.scrollTo({
                top: 7250,
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



