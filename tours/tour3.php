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
     
    $sql = "INSERT INTO orders (`user_id`, `name`, `email`, `product`, `place_of_residence`, `tour_start_date`, `tour_end_date`, `numb_seniors`, `child_2`, `child_12`, `price`, `services`, `date_at`) 
    VALUES ('{$_SESSION['users']['user_id']}', '{$_SESSION['username']}', '{$_SESSION['email']}', '{$_SESSION['product']}', '{$_SESSION['place_of_residence']}', '{$_SESSION['tour_start_date']}', '{$_SESSION['tour_end_date']}', '{$_SESSION['numb_seniors']}', '{$_SESSION['child_2']}','{$_SESSION['child_12']}', '{$_SESSION['price']}', '{$_SESSION['services']}', current_timestamp())";
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
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../scss/buy_tour.scss" />
    <link rel="stylesheet" type="text/css" href="../scss/tashkent.scss" />
    <script src="https://use.fontawesome.com/dd40fc69fc.js"></script>

</head>

<body>
<style>
    header{
        line-height: 1.3;
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
            <h2>К СЕРДЦУ ИМПЕРИИ ТАМЕРЛАНА</h2>   
        <p style="text-align: center;">Групповой экскурсионный тур в Узбекистан: любимые города Тамерлана,
грандиозная архитектура эпохи Тимуридов</p>
        <img src="https://www.centralasia-travel.com/upload/tiles/empire_tamerlane.jpg">
        <h3>Описание тура</h3>
        <p>Культурно-познавательный тур в Узбекистан познакомит вас с богатой историей и культурой этих мест, всемирно известными древними памятниками Самарканда, Бухары, Хивы, которые до сих пор хранят память о многочисленных торговых караванах Великого шелкового пути и, разумеется, о величественной исторической фигуре Тамерлана.</p>
        <P>Могущественная империя Тамерлана простиралась от Армении на западе до Индии на востоке, от Кавказа и Аральского моря на севере до Персидского залива на юге. А столица огромной империи Тимуридов находилась в Самарканде - любимом городе Амира Темура, куда он пригласил самых искусных мастеров-строителей, ученых, ремесленников и
         других умельцев, которые и превратили Самарканд в настоящую архитектурную жемчужину, которую мы знаем сегодня</P>
        <h3>Программа тура</h3>
        <table border="1" width="1000px" height="200px" align="justify">
            <tr >
                <th >&#9202; Длительность тура</th>
                <th>&#128197; Дата начала тура</th>
                <th>🏠 Место проживания</th>
                <th style="width: 260px;">🚍 Транспорты</th>
                <th style="width: 200px;">&#128176; Стоимость на одного человека (детям до 2лет - 10%, до 12 лет - 50%)</th>
                <th style="width: 120px;">&#128176; Другие услуги (детям не включено)</th>
            </tr>
                <tr >
                    <td>6 дней</td>
                    <td>12 июль, 2021</td>
                    <td>Orient Inn Hotel, Evroasia Hotel, Kabir Hotel</td>
                    <td >Daewoo Lacetti, Hyundai Grand Starex, Toyota Hiace" / "King Long, "Mitsubishi Rosa"/"Eurise"</td>
                    <td class="price text-danger" style="width:80px">15 200₽</td>
                    <td class="price text-danger" style="width:80px">2 000₽</td>
                </tr>
            </table>
        <div class="tour_programm">
            <table border="1" width="1000px" height="300px" align="justify">
                <tr>
                    <th>&#128197; День 1</th>
                    <td>Прибытие в Ташкент. Ташкент (экскурсия).
                    Встреча в аэропорту, переезд и размещение в гостинице.
                    Ташкент - многогранная столица современного Узбекистана. Архитектура Ташкента поражает своим разнообразием: это и археологические памятники времен зороастризма, которым уже более 2200 лет, и архитектурные шедевры Средневековья, и монументальные дворцы конца XIX в., и постройки современности. Восточные базары, как и сотни лет назад, оживают с первыми лучами солнца и притягивают посетителей изобилием сочных фруктов и овощей, густыми ароматами свежевыпеченного хлеба, лепешек и самсы.
                    Экскурсия по Ташкенту: площадь Хаст-Имам, медресе Барак-Хана, мавзолей Кафал-аль-Шаши Мазар, медресе Кукельдаш, старейший базар Ташкента – Чорсу, площадь Независимости, сквер Амира Темура.
                    Ночь в гостинице.</td>
                </tr>
                <tr>
                    <th>&#128197; День 2</th>
                    <td>Ташкент - Самарканд (330 км, 4-5 ч).
                    Переезд в Самарканд, в столицу древней Согдианы - Мараканду. Город-музей, город-сердце караванной торговли, Самарканд и сегодня прекрасно сохранил уникальную ауру азиатского Средневековья, хотя и немало повидал на своем веку. В 1220 году Чингисхан разрушил город почти до основания, а через 150 лет, во время правления Амира Темура, Самарканд стал блистательной столицей его огромной империи.
                    Размещение в гостинице.
                    Посещение древнего городища и музея Афросиаб.
                    Визит на базар Сиаб, где можно приобрести знаменитые самаркандские лепешки, восточные сладости, сувениры и произведения местных ремесленников.
                    Ночь в гостинице.</td>
                </tr>
                <tr>
                    <th>&#128197; День 3</th>
                    <td>Самарканд (экскурсия).
                        Экскурсия по Самарканду: самая известная площадь Центральной Азии - Регистан (медресе Улугбека, медресе Шер-Дор, медресе Тилля-Кари), мавзолей Гур-Эмир - усыпальница Великого Тамерлана, мечеть Биби-Ханум, архитектурный ансамбль Шахи-Зинда, обсерватория Улугбека.
                        Ночь в гостинице.</td>
                </tr>
                <tr>
                    <th>&#128197; День 4</th>
                    <td>Самарканд - Бухара (280 км, 4,5 ч). Бухара (экскурсия).
                    Переезд в Бухару. Бухара по праву считается одним из древнейших городов мира - ей уже более 2500 лет. Этот город насквозь пропитан древней историей.
                    Средневековая Бухара была не только крупным политическим и культурным, но и значительным религиозным центром Среднего Востока. Поэтому в Бухаре, как ни в одном другом городе Центральной Азии, наиболее полно, ярко и многогранно представлена восточная архитектура.
                    Размещение в гостинице.
                    Экскурсия по Бухаре: ансамбль Ляби-Хауз, медресе Кукельдаш, медресе Надира Диванбеги, торговые купола. Посещение демонстрационной комнаты бухарской золотошвейной фабрики и каракулевой мастерской.
                    Ночь в гостинице.</td>
                </tr>
                <tr>
                    <th>&#128197; День 5</th>
                    <td>Бухара (экскурсия).
                    Бухара является одним из главных центров Ислама не только в Средней Азии, но и во всем мусульманском мире. В средневековье на территории Бухары находилось более 350 мечетей и 80 медресе, многие из которых прекрасно сохранились до наших дней. Помимо грандиозных ансамблей, медресе, мечетей и знаменитого минарета Калян, в Бухаре отлично сохранилась древнейшая крепость Арк, действующие средневековые бани и торговые купола - всего более 140 памятников архитектуры!
                    Продолжение экскурсии по Бухаре: мавзолей Саманидов, усыпальница Чашма Аюб, комплекс Боло-Хауз, старинная крепость Арк, комплекс Пой-Калян, медресе Абдулазиз-Хана, медресе Улугбека.
                    Экскурсионная программа по загородным объектам Бухары: дворец Ситораи Мохи Хоса, комплекс Бахаутдина Накшбанди.
                    Ночь в гостинице.</td>
                </tr>
                <tr>
                    <th>&#128197; День 6</th>
                    <td>Бухара (убытие).
                    Переезд в аэропорт. Завершение программы тура.
                    Убытие из Бухары.</td>
                </tr>
            </table>
        </div>
            <div class="submit">
                <a href="#" class="btn btn-primary buy" data-price="15200₽" data-product="Групповой экскурсионный тур любимые города Тамерлана" data-place="Azia Khiva, Bukhara Simurg, Malika Hotel, Grand Orzu" >Оформить тур</a>
            </div>
        <h3>Стоимость программы</h3>
        <p>В стоимость тура включено:</p>
        <p><ul style="font-size: 18px">
            <li>Встреча/проводы в аэропорту в любое указанное туристами время прибытия/убытия рейса;</li>
            <li>Размещение в гостиницах в двухместных номерах с завтраком;</li>
            <li>Экскурсии с гидом согласно программе тура;</li>
            <li>Комфортабельный транспорт с кондиционером на протяжении всего тура;</li>
            <li>Минеральная вода на каждый день тура;</li>
            <li>Памятные сувениры;</li>
        </ul></p>
        <p>В стоимость тура не включено:</p>
        <ul style="font-size: 18px">
            <li>Стоимость международных перелетов;</li>
            <li>Входные билеты на памятники и музеи;</li>
            <li>Стоимость питания;</li>
            <li>Медицинские издержки и страховка.</li>
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
                <td>Бухара</td>
                <td>Kabir Hotel  / Kavsar Hotel</td>
            </tr>
            <tr>
                <td>Ташкент</td>
                <td>Orient Inn Hotel / Orient Grand Hotel</td>
            </tr>
            <tr>
                <td>Самарканд</td>
                <td>Evroasia Hotel / Zilol Baht Hotel </td>
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
            <div class="modal-content" style="width: 650px;margin-left: -50px;">
                <div class="modal-header">
                    <h5 class="modal-title">Оформление тура</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>   
                <div class="modal-body">
                <form id="buy" method="post"> 
                    <div style="border:1px solid #b3b2ae;">
                        <div class="form_group">
                            <input type="hidden" name="user_id" value="<?=$_SESSION['users']['user_id'];?>" class="form-control" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 0;margin-top:0">
                            <label for="name">Имя пользователя</label>
                            <input type="name" name="name" class="form-control" value="<?=$_SESSION['users']['username'];?>" id="name" placeholder="Ваше имя" readonly>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 0;margin-top:0">
                            <label for="email">Email пользователя</label>
                            <input type="email" name="email" class="form-control" value="<?=$_SESSION['users']['email'];?>" id="email" placeholder="Ваш Email" readonly>
                        </div>
                        <div class="form_group">
                        <label for="product">Выбранный тур</label>
                            <input type="text" name="product" class="form-control" id="product" readonly>
                        </div>
                        <div class="form_group">
                        <label for="place_of_residence">Место проживание</label>
                            <input type="text" name="place_of_residence" value="Orient Inn Hotel, Evroasia Hotel, Kabir Hotel" class="form-control" id="place_of_residence" readonly>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 0;margin-top:0">
                        <label for="tour_start_date">Дата начала тура:</label>
                            <input type="text" name="tour_start_date" class="form-control" value="12-07-2021" id="tour_start_date" readonly/>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 0;margin-top:0">
                        <label for="tour_end_date">Дата завершение тура:</label>
                            <input type="text" name="tour_end_date" class="form-control" value="18-07-2021" id="tour_end_date" readonly/>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 160px; margin-bottom: 0; ">
                            <label for="price">Количество взрослых</label>
                            <input type="text" name="numb_seniors" class="form-control" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 180px; margin-bottom: 0;margin-left: -10px;">
                            <label for="price">Количество детей(до 2 лет)</label>
                            <input type="text" name="child_2" class="form-control" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 190px; margin-left: -10px;margin-bottom: 0;" >
                            <label for="price">Количество детей(до 12 лет)</label>
                            <input type="text" name="child_12" class="form-control" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 0;">
                        <label for="price">Стоимость на одного человека</label>
                            <input style="width: 150px;" type="hidde" name="price" class="form-control" id="price" readonly>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px;margin-left: 10px;">
                        <label for="services">Допольнителные услуги</label>
                            <input type="hidde" style="width: 150px;" name="services" value="2000₽" class="form-control" id="services" readonly>
                        </div>
                    </div>
                    <div class="form_group" style="display: inline-block; width: 250px;margin-left: 10px;">
                        <button style="margin-left: 250px; " type="submit" name="submit" class="btn btn-primary">Оформить</button>             
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="../js/main.js"></script>
 <!--Подвал--> 
 <?php require "../connect_php/footer.php"?>



</body>

</html>


