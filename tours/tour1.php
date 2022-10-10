<?php require_once '../connect_php/db.php'; 
session_start();
error_reporting(0);

if (isset($_POST['submit'])){
    $_SESSION['users']['user_id'] = $_POST['user_id'];
    $_SESSION['username'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['product'] = $_POST['product'];
    $_SESSION['place_of_residence'] = $_POST['place_of_residence'];
    $_SESSION['tour_start_date'] = $_POST['tour_start_date'];
    $_SESSION['tour_end_date'] = $_POST['tour_end_date'];
    $_SESSION['numb_seniors'] = $_POST['numb_seniors'];
    $_SESSION['child_2'] = $_POST['child_2'];
    $_SESSION['child_12'] = $_POST['child_12'];
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['services'] = $_POST['services'];
    $_SESSION['date'] = date (format: 'Y-m-d H:i:s');
     
    
    $sql = "INSERT INTO orders (`user_id`, `name`, `email`, `product`, `place_of_residence`, 
    `tour_start_date`, `tour_end_date`, `numb_seniors`, `child_2`, `child_12`, `price`, `services`, `date_at`) 
    VALUES ('{$_SESSION['users']['user_id']}', '{$_SESSION['username']}', '{$_SESSION['email']}', 
    '{$_SESSION['product']}', '{$_SESSION['place_of_residence']}', '{$_SESSION['tour_start_date']}', 
    '{$_SESSION['tour_end_date']}', '{$_SESSION['numb_seniors']}', '{$_SESSION['child_2']}','{$_SESSION['child_12']}', '
    {$_SESSION['price']}', '{$_SESSION['services']}', current_timestamp())";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>alert('Успешно оформлено!')</script>";
    } else {
        echo "<script>alert('Ошибка! Проверьте данные')</script>";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Программа Тура / Услуги и цены</title>
    <meta http-equiv="content-type" content="text/html: charset=utf-8" />
    <meta name="keywords" content="my site. My web-site" />
    <meta name="description" content=" My site!" />
    <link rel="shortcut icon" type="image /x-icon" href="../favicon.ico" />
    <!--используется всегда,самый обязательный. Можно менят стиль на всех страницах-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../scss/buy_tour.scss" />
    <!-- <link rel="stylesheet" type="text/css" href="../scss/tashkent.scss" />  -->
    <script src="https://use.fontawesome.com/dd40fc69fc.js"></script>

</head>

<body>
<style>
    header{
        line-height: 1.3;
    }

    html,
body {
    background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url("../images/background1.jpg");
    background-size: cover;
    background-attachment: fixed;
    font-family: "Trebuchet MS", "Lucida Sans";
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    text-align: left;
    height: 100%;
    width: 100%;
    font-size: 100%;
    line-height: 2;
    font-size: 14px;
    -ms-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

input::-ms-clear {
    display: none;
}

button {
    cursor: pointer;
}

button::-moz-focus-inner {
    padding: 0;
    border: 0;
}

a,
a:visited {
    text-decoration: none;
}

img {
    vertical-align: top;
}

header {
    display: block;
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("../images/Airlines1.jpg") no-repeat center center;
    background-size: cover;
    padding: 60px 0 0 0;
    margin: 0 auto;
    position: relative;
    width: 100%;
    height: 350px;
}

.contact {
    font-size: 16px;
    position: absolute;
    top: 10px;
    right: 10px;
}

.contact a {
    text-decoration: none;
    color: blanchedalmond;
}

.contact a:hover {
    text-decoration: none;
    color: #65cf1f;
}

.zagalovok {
    position: relative;
    width: 100%;
    text-align: center;
    margin-top: 20px;
    color: blanchedalmond;
}

.zagalovok .title {
    position: absolute;
    font-size: 16px;
    text-align: justify;
    top: -120px;
    left: 50px;
}

.zagalovok a {
    text-decoration: none;
    color: blanchedalmond;
    font-size: 16px;
}

.zagalovok a:hover {
    text-decoration: none;
    color: #65cf1f;
}

.zagalovok span {
    position: relative;
    font-size: 16px;
    text-decoration: none;
    color: blanchedalmond;
}

.zagalovok p {
    margin-left: 50px;
    font-size: 30px;
    color: blanchedalmond;
    font-weight: bold;
}

.top_wrap {
    position: relative;
}

.top_wrap>div {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 80px;
    width: 1250px;
    margin: 0 auto;
}

footer {
    display: block;
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("../images/Airlines2.jpg") no-repeat center center;
    background-size: cover;
    padding: 8px 2px;
    left: 0;
    position: absolute;
    width: 100%;
    line-height: 2;
    z-index: 4;
}

footer h4 {
    color: #027585;
    font-size: 20px;
    margin-bottom: 20px;
}

footer .titles {
    margin: 15px 0;
    padding: 30px 0 0 0;
    z-index: 5;
}

footer .titles .links {
    width: 50%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: distribute;
    justify-content: space-around;
}

footer .titles .links div {
    -ms-flex-preferred-size: 40%;
    flex-basis: 40%;
    padding: 10px;
}

footer p {
    text-align: center;
    font-weight: bold;
    font-size: 18px;
    line-height: 32px;
    color: #dedede;
    margin: 0;
    margin-top: 100px;
}

.links a {
    color: #dedede;
    display: block;
    font-size: 18px;
    margin: 5px 0;
    text-decoration: none;
}

.links a:hover {
    text-decoration: none;
    color: #65cf1f;
}

.links a::before {
    content: "\00BB";
    margin-right: 10px;
    color: #8cc34c;
}


/*karta*/

.right1 {
    position: absolute;
    right: 60px;
}

</style>
<!--Баннер-->
<?php require "../connect_php/header.php"?>

    <div class="zagalovok">
    <div class="title">
        <span>Главная /</span>
        <span>Туры в Узбекистан</span>
        <p>Туры в Узбекистан</p>
    </div>
    </div>

 <!--Меню-->   
 <?php require "../connect_php/container_menu.php"?>

 <div class="content">
        <section>
            <h2>Индивидуальный классический тур в Узбекистан &#128649;&#9992;&#128653;</h2>   
        <p style="text-align: center;">Большое открытие Узбекистана 2021. Индивидуальный классический тур Ташкент + Самарканд + Бухара + Хива с прямым авиаперелётом из Москвы</p>
        <img src="../images/goroda.jpg">
        <h3>Описание тура</h3>
        <p>Классический маршрут по древним городам Узбекистана — это путешествие по самым известным историческим достопримечательностям, все самое грандиозное, красивое, без чего невозможно полноценно сформировать в голове образ Узбекистана. Средневековые мечети, медресе и минареты, современные районы городов, ремесленные мастерские, вкуснейшая узбекская кухня, шумные базары и тихие, узкие улочки, по-азиатски жгучее солнце и пронизывающая ночная прохлада, поражающий воображение контраст пустынь и оазисов. Наш тур в Узбекистан — хорошая возможность увидеть страну во всей красе, от столицы до глубокой провинции.</p>
        <h3>Программа тура</h3>
        <table border="1" width="1000px" height="200px" align="justify">
            <tr >
                <th >&#9202; Длительность тура</th>
                <th>&#128197; Дата начала тура</th>
                <th>🏠 Место проживания</th>
                <th>🚍 Транспорты</th>
                <th>&#128176; Цена</th>
                <th>&#128176; Другие услуги</th>
            </tr>
                <tr >
                    <td>9 дней</td>
                    <td>30 июнь, 2021</td>
                    <td>Azia Khiva, Bukhara Simurg, Malika Hotel, Grand Orzu</td>
                    <td >Daewoo Lacetti, Hyundai Grand Starex, Toyota Hiace" / "King Long, Mitsubishi Rosa" / "Eurise</td>
                    <td class="price text-danger" style="width:80px">19 170₽</td>
                    <td class="price text-danger" style="width:80px">3 000₽</td>
                </tr>
            </table>
        <div class="tour_programm">
            <table border="1" width="1000px" height="300px" align="justify">
                <tr>
                    <th>&#128197; День 1</th>
                    <td>Вылет в Ургенч из аэропорта Домодедово регулярным рейсом авиакомпании Узбекские авиалинии HY-616 в 16.30. Прибытие в 21:00, встреча в 
                        аэропорту и трансфер в отель, расположенный прямо в центра старого года в Хиве. По легенде Хива была основана ещё самим Симом, сыном Ноя. 
                        Некогда один из основных центров Великого Шелкового пути, с конца 16 века Хива была столицей Хорезмского государства 
                        (в 16-20 вв. — Хивинское ханство), управлялась потомками династии Тимуридов и служила основным рабским рынком и центром 
                        ханства до самого вхождения в состав Российской Империи. Ночь в Хиве.</td>
                </tr>
                <tr>
                    <th>&#128197; День 2</th>
                    <td>Экскурсия по древнему городу-крепости. В соответствии со средневековыми архитектурными традициями Хива разделена на внутреннюю 
                        часть — Ичан-Кала, где находится около 60-ти исторических памятников, и на внешнюю часть — Дишан-Кала, где население 
                        Хивы живёт и работает. Сейчас Ичан-Кала — это целый город-музей. Посещение минарета Палвана–Кори, пятничной мечети 
                        Чодра Хаули, медресе Шергази-Хана, старой крепости Куня-Арк и комплекса Куриниш-Хан, ансамбля Алла-Кули-Хана и комплекса 
                        Пахлавана Махмуда. Ночь в Хиве.</td>
                </tr>
                <tr>
                    <th>&#128197; День 3</th>
                    <td>Выезд в Бухару, один из древнейших городов Средней Азии. Дорога проходит по пустыне Кызылкум, время в 
                        пути — целый день (около 600 км). В 1991 году Бухара была внесена в список Мирового наследия ЮНЕСКО. Тюрки, монголы, 
                        узбеки приходили на эту землю в течение последней тысячи лет. С 1500 до 1920 года Бухара — столица Бухарского ханства. 
                        Ночь в Бухаре.</td>
                </tr>
                <tr>
                    <th>&#128197; День 4</th>
                    <td>Выезд в Аяз-Калу, время в пути — около 2,5 часов. Посещение развалин старых городищ (III — IV вв. до н. э.) Тупрак-Кала, Курвашин Кала. 
                        Обед в юрте местного жителя. После обеда незабываемое катание на верблюдах по пустыне. На обратном пути посещение 
                        крепости Аяз-Кала, Кир-Киз Кала. Поздно вечером возвращение в Хиву. Ночь в Хиве.</td>
                </tr>
                <tr>
                    <th>&#128197; День 5</th>
                    <td>Посещение летнего дворца Ситораи Мохи Хоса Боло Хаус, старой крепости Арк, архитектурного символа Бухары — Великого Минарета 
                        Калян, построенного в 1127 году и считающегося одним из высочайших в Азии, мавзолея Буян–Кули–Хана с прекрасной терракотовой 
                        отделкой стен. Продолжение экскурсии по старинной части города — осмотр ансамбля Ляби Хаус, обрамленного тремя монументальными 
                        медресе XVI–XVII веков (медресе Нодир Деван Беги, медресе Улугбека и медресе Абдулазиз-Хана). Посещение жемчужины города — небольшого
                         мавзолея династии Саманидов, недавно отметившего своё тысячелетие, мечети Чор Минор. Посещение загородных памятников: некрополь Чор 
                         Бакр, мемориальный комплекс Бахаутдина Накшбанди. Ночь в Бухаре.</td>
                </tr>
                <tr>
                    <th>&#128197; День 6</th>
                    <td>Выезд в Самарканд. Дорога идет через красочные горные перевалы. По пути — посещение города Шахрисабз — место рождения Тимура 
                        (Тамерлана). Прибытие в Самарканд вечером. Самарканд упоминается в летописях с середины первого тысячелетия до н. э. как Мараканда
                         (хроники Александра Македонского). Примерный же возраст поселений на территории современного Самарканда — около 2500 лет. 
                         Город видел на своих улицах и площадях полудиких саков и массагетов, железные «фаланги» грекомакедонцев, орды каракитаев, перенес 
                         истребительное нашествие арабских полководцев. В 1220 был разрушен ордами Чингисхана. При Тимуре Самарканд становится столицей мировой 
                         империи, простиравшейся от Инда до Босфора. А при великом учёном-астрономе Улугбеке город приобретает славу одного из выдающихся центров 
                         культуры и науки средневековья. Ночь в Самарканде.</td>
                </tr>
                <tr>
                    <th>&#128197; День 7</th>
                    <td>Обзорная экскурсия по Самарканду посещение главной достопримечательности города — одной из красивейших площадей мира — Регистан. 
                        Осмотр медресе Тилля-Кари (XVII в.), входящей в ансамбль зданий на площади Регистан. Это медресе получило даже название «Вызолоченное»,
                         из-за обилия позолоченных поверхностей. Ближе к центру города возвышаются гигантские развалины мечети Биби-Ханым, возводившейся по приказу 
                         Тимура, как самое большое здание Востока. Её купол в древности сравнивали с небесным сводом, а арку портала — с Млечным Путём. Здесь же 
                         неподалёку находится и мавзолей самого Тимура и его потомков — Гур-Эмир. Осмотр городища Афрасиаб: уникальный некрополь Шахи-Зинда, 
                         улица-кладбище, образованная стоящими по обеим сторонам мечетями и мавзолеями XI-XV веков. Посещение медресе и в обсерватории Улугбека,
                          мечеть Хазрет-Кузр и мавзолея Малый Шер-Дор. Ночь в Самарканде.</td>
                </tr>
                <tr>
                    <th>&#128197; День 8</th>
                    <td>Завтрак в отеле. Утром — посещение Сиабского базара, музея Афросиаб и Мавзолея Имама аль-Бухарий.
                        Во второй половине дня выезд в Ташкент. Первая информация о древнем городе появляется в восточных летописях II века до н. э. 
                        Караваны, идущие по Великому Шелковому Пути, проходили через город Шаш (древнее название Ташкента). Ночь в Ташкенте.</td>
                </tr>
                <tr>
                    <th>&#128197; День 9</th>
                    <td>Завтрак в отеле. Посещение крупного рынока «Чорсу», медресе Кукельдаш (XV в.) и ещё нескольких запоминающихся памятников — Медресе Хаст Имам 
                        (XVI в.), медресе Абул Касыма. Так же посещение музея Амира Теимура, который находится в самом центре на площади Независимости. Во второй 
                        половине дня — трансфер в аэропорт, вылет в Москву в 19.05 рейсом Узбекских Авиалиний HY-601. Прибытие в Москву, аэропорт Домодедово, 
                        в 22:20.</td>
                </tr>
            </table>
        </div>
            <div class="submit">
                <a href="#" class="btn btn-primary buy" data-price="19170₽" data-product="Индивидуальный классический тур" data-place="Azia Khiva, Bukhara Simurg, Malika Hotel, Grand Orzu" >Оформить тур</a>
            </div>
        <h3>Стоимость программы</h3>
        <p>В стоимость тура включено:</p>
        <p><ul style="font-size: 18px">
            <li>размещение в гостиницах выбранного уровня в двухместных номерах,</li>
            <li>питание — завтраки (+ согласно указанному),</li>
            <li>все экскурсии с русскоговорящим гидом-сопровождающим согласно программе,</li>
            <li>все входные платы в музеи и к монументам,</li>
            <li>все внутренние переезды на легковом автотранспорте с кондиционером (Daewoo Nexia),</li>
            <li>медицинская страховка.</li>
        </ul></p>
        <p>В стоимость тура не включено:</p>
        <ul style="font-size: 18px">
            <li>перелёт Москва — Ургенч // Ташкент — Москва,</li>
            <li>все личные расходы, все прочие расходы, не указанные в программе.</li>
        </ul>
        <p>Дополнительные услуги:</p>
        <ul style="font-size: 18px">
            <li>Возможная дополнительная ночь в Ташкенте или Бухаре по прибытию или убытию:
                <ol>- Одноместный номер - 1045 ₽/за номер/за сутки (стандарт);</ol>
                <ol>- Двухместный номер - 1955 ₽/за номер/за сутки (стандарт).</ol>
            </li>
        </ul>
        <h3>Базовые отели</h3>
        <table border="1" style="margin: 30px auto;" width="600px" height="200px" align="justify">
            <tr>
                <th>Города</th>
                <th>Отели </th>
            </tr>
            <tr>
                <td>Хива</td>
                <td>Azia Khiva</td>
            </tr>
            <tr>
                <td>Бухара</td>
                <td>Bukhara Simurg</td>
            </tr>
            <tr>
                <td>Ташкент</td>
                <td>Malika Hotel</td>
            </tr>
            <tr>
                <td>Самарканд</td>
                <td>Grand Orzu( номер deluxe) / Uzbekistan</td>
            </tr>
        </table>
        <h3>Транспорт</h3>
        <p>На данном маршруте будет использоваться следующий вид транспорта (в зависимости от количества человек в группе):</p>
        <table border="1" style="margin: 30px auto;" width="600px" height="200px" align="justify">
            <tr>
                <th>Группа</th>
                <th>Наименование транспорта </th>
            </tr>
            <tr>
                <td>Группа 1-2 чел</td>
                <td>"Daewoo Lacetti"</td>
            </tr>
            <tr>
                <td>Группа 3-6 чел</td>
                <td>"Hyundai Grand Starex"</td>
            </tr>
            <tr>
                <td>Группа 7-9 чел</td>
                <td>"Toyota Hiace" / "King Long"</td>
            </tr>
            <tr>
                <td>Группа 10-15 чел</td>
                <td>"Mitsubishi Rosa" / "Eurise"</td>
            </tr>
        </table>
        <div class="submit">
            <p style="font-size: 24px; ">Перейти на страницу: <a class="btn" href="../tours/tours_user.php" target="_blanck">Мои туры</a></p>
        </div>
        </section>
    </div>  

    

    <div class="modal fade" id="cart" style="width: 100%; ">
        <div class="modal-dialog" role="document"> 
            <div class="modal-content" style="width: 650px;margin-left: -50px; ">
                <div class="modal-header">
                    <h5 class="modal-title">Оформление тура</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>   
                <div class="modal-body" style = "margin: 15px; border:1px solid #b3b2ae;">
                <form id="buy" method="post"> 
                    <div style="">
                        <div class="form_group">
                            <input type="hidden" name="user_id" value="<?=$_SESSION['users']['user_id'];?>" class="form-control" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 15px;margin-top:0">
                            <label for="name">Имя пользователя</label>
                            <input type="name" name="name" class="form-control" value="<?=$_SESSION['users']['username'];?>" id="name" placeholder="Ваше имя" readonly>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 15px;margin-top:0">
                            <label for="email">Email пользователя</label>
                            <input type="email" name="email" class="form-control" value="<?=$_SESSION['users']['email'];?>" id="email" placeholder="Ваш Email" readonly>
                        </div>
                        <div class="form_group" style="margin-bottom: 15px;margin-top:0">
                        <label for="product">Выбранный тур</label>
                            <input type="text" name="product" class="form-control" id="product" readonly>
                        </div>
                        <div class="form_group" style="margin-bottom: 15px;margin-top:0">
                        <label for="place_of_residence">Место проживание</label>
                            <input type="text" name="place_of_residence" value="Azia Khiva, Bukhara Simurg, Malika Hotel, Grand Orzu" class="form-control" id="place_of_residence" readonly>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 15px;margin-top:0">
                        <label for="tour_start_date">Дата начала тура:</label>
                            <input type="text" name="tour_start_date" class="form-control" value="30-05-2021" id="tour_start_date" readonly/>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 15px;margin-top:0">
                        <label for="tour_end_date">Дата завершение тура:</label>
                            <input type="text" name="tour_end_date" class="form-control" value="08-06-2021" id="tour_end_date" readonly/>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 160px; margin-bottom: 15px; ">
                            <label for="price">Количество старших</label>
                            <input type="text" name="numb_seniors" class="form-control" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 180px; margin-bottom: 15px;margin-left: 10px;">
                            <label for="price">Количество детей(до 2 лет)</label>
                            <input type="text" name="child_2" class="form-control" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 190px; margin-left: 10px;margin-bottom: 15px;" >
                            <label for="price">Количество детей(до 12 лет)</label>
                            <input type="text" name="child_12" class="form-control" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 15px;">
                        <label for="price">Стоимость на одного человека</label>
                            <input style="width: 150px;" type="hidde" name="price" class="form-control" id="price" readonly>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px;margin-left: 10px;">
                        <label for="services">Допольнителные услуги</label>
                            <input type="hidde" style="width: 150px;" name="services" value="3000₽" class="form-control" id="services" readonly>
                        </div>
                    </div>
                    <div class="form_group" style="display: inline-block; width: 250px;margin-left: 10px;">
                        <button style="margin-left: 250px; margin-top : 10px " type="submit" name="submit" class="btn btn-primary">Оформить</button>             
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>


    
 <!--Подвал--> 
 <?php require "../connect_php/footer.php"?>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="../js/main.js"></script>



</body>

</html>


