<?php require_once "../connect_php/db.php"; 
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
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['services'] = $_POST['services'];
    $_SESSION['date'] = date (format: 'Y-m-d H:i:s');
     
    $sql = "INSERT INTO orders (`user_id`, `name`, `email`, `product`, `place_of_residence`, `tour_start_date`, `tour_end_date`, `price`, `services`, `date_at`) 
    VALUES ('{$_SESSION['users']['user_id']}', '{$_SESSION['username']}', '{$_SESSION['email']}', '{$_SESSION['product']}', '{$_SESSION['place_of_residence']}', '{$_SESSION['tour_start_date']}', '{$_SESSION['tour_end_date']}', '{$_SESSION['price']}', '{$_SESSION['services']}', current_timestamp())";
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
            <h2 style="text-align: center;">ВОСТОЧНЫЙ ДАСТАРХАН </h2>
            <img src="../images/blyuda.png">
            <p>Гастрономический тур в Узбекистан с кулинарными мастер-классами. Маршрут: Ташкент - Джизак - поселок Хаят - Самарканд - Гиждуван - Бухара</p>
        <h3>Описание тура</h3>
        <p>Узбекская кухня, пожалуй, одна из самых богатых на Востоке! Здесь любят вкусно поесть и умеют вдохновенно готовить!
            Главный кулинарный бренд страны – конечно, узбекский плов. В каждой области Узбекистана его готовят своим уникальным способом, поэтому «настоящим узбекским 
            пловом» вправе называться около десяти рецептов этого коронного блюда. Самаркандский, ферганский, ташкентский, кашкадарьинский или 
            бухарский - распробуйте все оттенки многоликого узбекского плова и выберите свой фаворит!
        </p>
        <p>Но не только пловом может похвастаться узбекская кухня. Нежнейшие манты, сочный шашлык и ароматная самса, изысканная колбаса из конины - 
            казы, наваристая шурпа, праздничный нарын и повседневный ханум, потрясающе вкусное мясо - бухарский тандыр-кабоб, ташкентский лагман, 
            самаркандский нохат - уважаемые гурманы, это далеко не полный список! Не забудем и о десерте - десятки разновидностей восточных сладостей, 
            солнечные фрукты, курага, изюм и разнообразные виды орешков!
        </p>
        <h3>Программа тура</h3>
        <table border="1" width="1000px" height="200px" align="justify">
            <tr>
                <th>&#9202; Длительность тура</th>
                <th>&#128197; Дата начала тура</th>
                <th >🏠 Место проживания</th>
                <th>🚍 Транспорты</th>
                <th>&#128176; Цена</th>
                <th>&#128176; Другие услуги</th>
            </tr>
                <tr>
                    <td>8 дней</td>
                    <td>06 июнь, 2021</td>
                    <td style="width:250px">Hotel Shiringul, Kabir Hotel  / Kavsar Hotel, Orient Inn Hotel / Orient Grand Hotel, Arba Hotel / Evroasia Hotel</td>
                    <td style="width:250px">Daewoo Lacetti, Hyundai Grand Starex, Toyota Hiace / King Long, Mitsubishi Rosa / Eurise , Golden Dragon</td>
                    <td style="width: 100px;" class="price text-danger">22 900₽</td>
                    <td style="text-align: center;" class="price text-danger">2 000₽</td>
                </tr>
        </table>
        <div class="tour_programm">
            <table border="1" width="1000px" height="300px" align="justify">
                <tr>
                    <th>&#128197; День 1</th>
                    <td>Прибытие в Ташкент. Экскурсия.
                        Встреча в аэропорту. Переезд и размещение в гостинице.
                        Ташкент - многогранная столица современного Узбекистана. Архитектура Ташкента поражает своим разнообразием, а восточные базары, как и сотни лет назад, 
                        оживают с первыми лучами солнца и притягивают посетителей изобилием сочных фруктов и овощей, густыми ароматами свежевыпеченного хлеба, лепешек и самсы.
                        Завтрак в гостинице. Экскурсия по Ташкенту: площадь Хаст-Имам, медресе Барак-Хана, мавзолей Кафал-аль-Шаши Мазар, медресе Кукельдаш.
                        Обед в Центре Плова, где в огромных казанах готовится настоящий плов по-ташкентски. Здесь можно увидеть весь процесс - от обжарки мяса до закладки овощей, специй и риса.
                        Продолжение экскурсии: старейший базар Ташкента – Чорсу, площадь Независимости, сквер Амира Темура.
                        Ужин в уйгурском кафе, где вы отведаете уйгурский лагман – блюдо из мяса, овощей и тянутой длинной лапши. Ночь в гостинице.
                    </td>
                </tr>
                <tr>
                    <th>&#128197; День 2</th>
                    <td>Ташкент - Джизак - поселок Хаят (340 км, 6-7 часов).
                        Завтрак в гостинице.
                        Переезд в посёлок Хаят, расположенный в Нуратинских горах.
                        По дороге остановка в г.Джизаке. Обед в чайхане с дегустацией знаменитой джизакской самсы и шурпы.
                        Самса – это слоеные печеные пирожки с неповторимым ароматом и вкусом Востока. Выпекают ее традиционно в глиняной печи (тандыре) на углях. Шурпа – насыщенный узбекский суп с мясом, овощами и зеленью, невероятно ароматный и красивый.
                        По прибытии в поселок Хаят - размещение в гостевом доме местных жителей. Пешая прогулка по поселку Верхний Хаят, знакомство с бытом местных жителей, осмотр развалин старинного кишлака и посещение питомника баранов Северцова.
                        На ужин - жаркое из баранины на костре с восточными специями. Такую нежную и вкусную баранину можно отведать только в Узбекистане. Мастер-класс по выпечке лепешек.
                        Ночь в гостевом доме.
                    </td>
                </tr>
                <tr>
                    <th>&#128197; День 3</th>
                    <td>Поселок Хаят - Самарканд (290 км, 5-6 часов).
                        Завтрак в гостевом доме.
                        Переезд в Самарканд, один из самых известных городов Узбекистана, насчитывающий более 2750 лет насыщенной истории.
                        По прибытии - размещение в гостинице. Обед в чайхане с дегустацией вкуснейшего самаркандского шашлыка. Узбекский шашлык всегда получается очень сочным и ароматным, рекомендуем вкушать его в сочетании с горячей воздушной лепешкой и маринованным луком.
                        Начало экскурсии по городу: мавзолей Гур-Эмир - усыпальница Великого Тамерлана.
                        Посещение винзавода им. Ховренко - дегустация марочных вин и коньяков.
                        Ужин в национальном доме, мастер-класс по приготовлению мантов с дегустацией. Манты – изысканное блюдо узбекской кухни, приготовленное на пару из нежнейшего тонкого теста с сочной мясной начинкой внутри.
                        Ночь в гостинице.
                    </td>
                </tr>
                <tr>
                    <th>&#128197; День 4</th>
                    <td>Самарканд (экскурсия).
                        Завтрак в гостинице.
                        Экскурсия по городу: самая известная площадь Центральной Азии - Регистан (медресе Улугбека, медресе Шер-Дор, медресе Тилля-Кари), мечеть Биби-Ханум, базар Сиаб.
                        Обед в центре плова «Панжаб» - дегустация знаменитого самаркандского плова.
                        Поездка на винзавод Багизаган. Пять поколений виноделов выращивали виноград в долине реки Зарафшан - и сегодня на «Багизагане» производятся одни из лучших вин и коньяков в Узбекистане. Экскурсия по винзаводу, ознакомление с процессом переработки винограда и технологиями производства вина. Дегустация вин в колоритном дегустационном зале. Возвращение в Самарканд.
                        Продолжение экскурсии: архитектурный ансамбль Шахи-Зинда, обсерватория Улугбека.
                        Ужин в ресторане: дегустация национальных узбекских блюд  мастава (мастоба) и ханум. Мастава – вкусный наваристый рисовый суп с овощами, приготовленный на мясном бульоне. Ханум – мучное блюдо с начинкой из мясного фарша или картофеля, приготовленное на пару.
                        Ночь в гостинице.
                    </td>
                </tr>
                <tr>
                    <th>&#128197; День 5</th>
                    <td>Самарканд - Бухара (280 км, 4,5 часа).
                        Завтрак в гостинице.
                        Переезд в Бухару через Гиждуван - ремесленный центр Узбекистана, который издревле славился необыкновенно красивой, самобытной керамикой. Посещение гончарной мастерской Нарзуллаевых. Мастер-класс по гончарному ремеслу в керамической мастерской, создание керамических изделий на гончарном круге под руководством опытного мастера.
                        Обед в мастерской с дегустацией гиждуванских шашлыков и тандыр-кабоба.
                        Переезд в Бухару - один из древнейших городов Узбекистана. Этот город насквозь пропитан древней историей, поэтому в Бухаре, как ни в одном другом городе Центральной Азии, наиболее полно, ярко и многогранно представлена восточная архитектура. Размещение в гостинице.
                        Экскурсия по Бухаре: ансамбля Ляби-Хауз, медресе Кукельдаш, медресе Нодир-Девон-Бегим, торговых куполов.
                        Ужин в национальном доме, где вы отведаете настоящую узбекскую дамламу. Это блюдо наполнено всевозможными овощами с кусочками мяса, которые долго тушатся в собственном соку на медленном огне, поэтому оно получается очень нежным и сочным.
                        Ночь в гостинице.
                    </td>
                </tr>
                <tr>
                    <th>&#128197; День 6</th>
                    <td>Бухара (экскурсия).
                        Завтрак в гостинице.
                        Экскурсия по Бухаре: мавзолей Саманидов, усыпальница Чашма Аюб, комплекс Боло-Хауз, старинная крепость Арк, комплекс Пой-Калян.
                        Обед в чайхане, где вы насладитесь бесподобным вкусом шурпы балаза (шурпы с горохом) и долмы (завернутым в виноградные листья мясным фаршем, который готовится в небольшом количестве бульона).
                        Продолжение экскурсии: Медресе Абдулазиз-Хана, Медресе Улугбека, Золотошвейная Фабрика.
                        Чаепитие в чайном доме «Пряности Шелкового пути» - дегустация чая с различными пряностями и традиционными бухарскими сладостями.
                        Ужин в национальном доме, мастер-класс по приготовлению алатской самсы.
                        Ночь в гостинице.
                    </td>
                </tr>
                <tr>
                    <th>&#128197; День 7</th>
                    <td>Бухара (загородная экскурсия).
                        Завтрак в гостинице.
                        Экскурсия по загородным объектам Бухары: дворец Ситораи Мохи-Хоса (загородная резиденция бухарских эмиров), суфийский комплекс Бахаутдина Накшбанди, некрополь Чор-Бакр.
                        Обед в чайхоне «Чор-Бакр» -  нежнейшая баранина, готовящаяся в течение нескольких часов на медленном огне в дровяной печи.
                        Возвращение в Бухару.
                        Мастер-класс по приготовлению бухарского плова. Профессиональный ошпаз (повар, специализирующийся в приготовлении плова) раскроет кулинарные секреты, с удовольствием расскажет и покажет, как приготовить бухарский плов. Приготовление плова превратится в занимательный праздник благодаря мастерству ошпаза и умопомрачительному аромату, доносящемуся из казана.
                        Завершающий программу тура ужин с дегустацией бухарского плова в национальном доме.
                        Ночь в гостинице.
                </td>
                </tr>
                <tr>
                    <th>&#128197; День 8</th>
                    <td>
                        Бухара - убытие.
                        Переезд в аэропорт. Завершение программы тура.
                        Вылет из Бухары.
                    </td>
                </tr>
            </table>
        </div>
        <div class="submit">
                <a href="#" class="btn btn-primary buy" data-price="22900₽" data-product="Гастрономический тур в Узбекистан с кулинарными мастер-классами" data-place="Hotel Shiringul, Kabir Hotel  / Kavsar Hotel, Orient Inn Hotel / Orient Grand Hotel, Arba Hotel / Evroasia Hotel" >Оформить тур</a>
            </div>
        <h3>Стоимость программы</h3>
        <p>В стоимость тура включено:</p>
        <p><ul>
            <li>Встреча/проводы в аэропорту в любое указанное туристами время прибытия/убытия рейса;</li>
            <li>Размещение в гостиницах в двухместных номерах с завтраком;</li>
            <li>Размещение в гостевом доме в Нуратинских горах (размещение по 3-4 человека в комнате);</li>
            <li>Питание полный пансион;</li>
            <li>Экскурсии с гидом согласно программе тура;</li>
            <li>Комфортабельный транспорт с кондиционером на протяжении всего тура;</li>
            <li>Мастер-классы по приготовлению национальных блюд;</li>
            <li>Минеральная вода на каждый день тура.</li>
        </ul></p>
        <p>В стоимость тура не включено:</p>
        <ul>
            <li>Стоимость международных перелетов;</li>
            <li>Входные билеты на памятники и музеи;</li>
            <li>Медицинские издержки и страховка.</li>
        </ul>
        <p>Дополнительные услуги:</p>
        <ul>
            <li>Возможная дополнительная ночь в Ташкенте или Бухаре по прибытию или убытию:
                <ol>- Одноместный номер - 945 ₽/за номер/за сутки (стандарт);</ol>
                <ol>- Двухместный номер - 1055 ₽/за номер/за сутки (стандарт).</ol>
            </li>
        </ul>
        <h3>Базовые отели</h3>
        <table border="1" style="margin: 30px auto;" width="600px" height="200px" align="justify">
            <tr>
                <th>Города</th>
                <th>Отели </th>
            </tr>
            <tr>
                <td>Нуратинские горы</td>
                <td>Hotel Shiringul</td>
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
                <td>Arba Hotel / Evroasia Hotel</td>
            </tr>
        </table>
        <h3>Транспорт</h3>
        <p>На данном маршруте будет использоваться следующий вид транспорта (в зависимости от количества человек в группе):</p>
        <table style="margin: 30px auto;" border="1" width="600px" height="200px" align="justify">
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
            <tr>
                <td>Группа 16-25 чел</td>
                <td>"Golden Dragon"</td>
            </tr>
        </table>
        <div class="submit1">
            <p style="font-size: 24px; margin-top: 50px;">Перейти на страницу <a class="btn" href="../tours/tours_user.php" target="_blanck">Мои туры</a></p>
        </div>
        </section>
    </div>  

    

    <div class="modal fade" id="cart" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Оформление тура</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>   
                <div class="modal-body">
                <form id="buy" method="post">
                    <div class="form_group">
                        <input type="hidden" name="user_id" value="<?=$_SESSION['users']['user_id'];?>" class="form-control" required>
                    </div>
                    <div class="form_group">
                        <label for="name">Имя пользователя</label>
                        <input type="name" name="name" class="form-control" value="<?=$_SESSION['users']['username'];?>" id="name" placeholder="Ваше имя" readonly>
                    </div>
                    <div class="form_group">
                        <label for="email">Email пользователя</label>
                        <input type="email" name="email" class="form-control" value="<?=$_SESSION['users']['email'];?>" id="email" placeholder="Ваш Email" readonly>
                    </div>
                    <div class="form_group">
                        <label for="product">Выбранный тур</label>
                        <input type="text" name="product" class="form-control" id="product" readonly>
                    </div>
                    <div class="form_group">
                        <label for="place_of_residence">Место проживание</label>
                        <input type="text" name="place_of_residence" value="Hotel Shiringul, Kabir Hotel  / Kavsar Hotel, Orient Inn Hotel / Orient Grand Hotel, Arba Hotel / Evroasia Hotel" class="form-control" id="place_of_residence" readonly>
                    </div>
                    <div class="form_group">
                        <label for="tour_start_date">Дата начала тура:</label>
                        <input type="text" name="tour_start_date" class="form-control" value="06-06-2021" id="tour_start_date" readonly/>
                    </div>
                    <div class="form_group">
                        <label for="tour_end_date">Дата завершение тура:</label>
                        <input type="text" name="tour_end_date" class="form-control" value="14-06-2021" id="tour_end_date" readonly/>
                    </div>
                    <div class="form_group">
                        <label for="price">Цена</label>
                        <input type="text" name="price" class="form-control" id="price" readonly>
                    </div>
                    <div class="form_group">
                        <label for="services">Допольнителные услуги</label>
                        <input type="text" name="services" value="2000₽" class="form-control" id="services" readonly>
                    </div>
                        <button type="submit" name="submit" class="btn btn-primary">Оформить</button>
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


