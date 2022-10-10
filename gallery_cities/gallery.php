<!DOCTYPE html>
<html>

<head>
    <title>Фотогалерея</title>
    <meta http-equiv="content-type" content="text/html: charset=utf-8" />
    <meta name="keywords" content="my site. My web-site" />
    <meta name="description" content=" My site!" />
    <link rel="shortcut icon" type="image /x-icon" href="../favicon.ico" />
    <!--используется всегда,самый обязательный. Можно менят стиль на всех страницах-->
    <link rel="stylesheet" type="text/css" href="../scss/tashkent.scss" />
    <link rel="stylesheet" type="text/css" href="../scss/style1.scss" />
    <link rel="stylesheet" type="text/css" href="../scss/modal_window.scss" />

    <script src="https://use.fontawesome.com/dd40fc69fc.js"></script>
</head>

<body>

<!--Баннер-->
<?php require "../connect_php/header.php"?>

    <div class="zagalovok">
        <div class="title">
        <p>Фотогалерея</p>    
        </div>
        
    </div>

 <!--Меню-->   
 <?php require "../connect_php/container_menu.php"?>

    
    
    
    <section class="slideshow1">
        <ul>
            <li class="list active" data-filter="All">Все фотографии</li>
            <li class="list" data-filter="nature">Природа</li>
            <li class="list" data-filter="arxitectura">Архитектура</li>
            <li class="list" data-filter="food">Еда</li>
            <li class="list" data-filter="metro">Метро</li>
            <li class="list" data-filter="art">Искусство</li>
            <li class="list" data-filter="zoopark">Зоопарк</li>
        </ul>
        <div id="overflow1">
            <div class="product">
                <div class="itembox zoopark"><a href="#popup_zooprak1"><img src="https://uzbekistan.travel/storage/app/uploads/public/5f1/6bb/112/thumb_1205_1140_0_0_0_auto.jpg"></a></div>
                <div class="itembox nature"><a href="#popup_nature1"><img src="https://uzbekistan.travel/storage/app/uploads/public/5ff/fd7/ef6/thumb_1520_1140_0_0_0_auto.jpg"></a></div>
                <div class="itembox arxitectura"><a href="#popup_arxitectura1"><img src="../images/arxitectura.jpg"></a></div>
                <div class="itembox food"><a href="#popup_food1"><img src="../images/blyuda.png"></a></div>
                <div class="itembox metro"><a href="#popup_metro1"><img src="../images/metro.jpg"></a></div>
                <div class="itembox art"><a href="#popup_art1"><img src="../images/art.jpg"></a></div>
                <div class="itembox zoopark"><a href="#popup_zooprak2"><img src="https://uzbekistan.travel/storage/app/uploads/public/5f1/6ba/181/thumb_1202_1140_0_0_0_auto.jpg"></a></div>
                <div class="itembox nature"><a href="#popup_nature2"><img src="../images/nature1.jpg"></div>
                <div class="itembox arxitectura"><a href="#popup_arxitectura2"><img src="../images/arxitectura1.jpg"></a></div>
                <div class="itembox food"><a href="#popup_food2"><img src="../images/blyuda1.jpg"></a></div>
                <div class="itembox metro"><a href="#popup_metro2"><img src="../images/metro1.jpg"></a></div>
                <div class="itembox art"><a href="#popup_art2"><img src="../images/art1.jpg"></a></div>
                <div class="itembox zoopark"><a href="#popup_zooprak3"><img src="https://uzbekistan.travel/storage/app/uploads/public/5f1/6b8/cdc/thumb_1199_1140_0_0_0_auto.jpg"></a></div>
                <div class="itembox nature"><a href="#popup_nature3"><img src="../images/nature2.jpg"></a></div>
                <div class="itembox arxitectura"><a href="#popup_arxitectura3"><img src="../images/arxitectura2.jpg"></a></div>
                <div class="itembox food"><a href="#popup_food3"><img src="../images/blyuda2.jpg"></a></div>
                <div class="itembox metro"><a href="#popup_metro3"><img src="../images/metro2.jpg"></a></div>
                <div class="itembox art"><a href="#popup_art3"><img src="../images/art2.jpg"></a></div>
                <div class="itembox zoopark"><a href="#popup_zooprak4"><img src="https://uzbekistan.travel/storage/app/uploads/public/5f1/6b8/180/thumb_1197_1140_0_0_0_auto.jpg"></a></div>
                <div class="itembox nature"><a href="#popup_nature4"><img src="../images/nature3.jpg"></a></div>
                <div class="itembox arxitectura"><a href="#popup_arxitectura4"><img src="../images/arxitectura3.jpg"></a></div>
                <div class="itembox food"><a href="#popup_food4"><img src="../images/blyuda3.jpg"></a></div>
                <div class="itembox metro"><a href="#popup_metro4"><img src="../images/metro3.jpg"></a></div>
                <div class="itembox art"><a href="#popup_art4"><img src="../images/art3.jpg"></a></div>
                <div class="itembox food"><a href="#popup_food5"><img src="../images/blyuda4.jpg"></a></div>
                <div class="itembox food"><a href="#popup_food6"><img src="../images/blyuda5.jpg"></a></div>
                <div class="itembox art"><a href="#popup_art5"><img src="../images/art4.jpg"></a></div>
                <div class="itembox zoopark"><a href="#popup_zooprak5"><img src="https://uzbekistan.travel/storage/app/uploads/public/5f1/6b7/dd9/thumb_1196_1140_0_0_0_auto.jpg"></a></div>
                <div class="itembox zoopark"><a href="#popup_zooprak6"><img src="https://uzbekistan.travel/storage/app/uploads/public/5f1/6b7/943/thumb_1195_1140_0_0_0_auto.jpg"></a></div>
                <div class="itembox art"><a href="#popup_art6"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e6/b48/a14/thumb_462_1140_0_0_0_auto.jpg"></a></div>
                <div class="itembox art"><a href="#popup_art7"><img src="https://uzbekistan.travel/storage/app/uploads/public/5e6/b3c/0e3/thumb_454_1140_0_0_0_auto.jpg"></a></div>
                <div class="itembox art"><a href="#popup_art8"><img src="https://uzbekistan.travel/storage/app/uploads/public/5fd/8a3/d1b/thumb_1463_1140_0_0_0_auto.jpg" alt=""></a></div>
            </div>
        </div>
        
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.list').click(function() {
                const value = $(this).attr('data-filter');
                if (value == 'All') {
                    $('.itembox').show('1000');
                } else {
                    $('.itembox').not('.' + value).hide('1000');
                    $('.itembox').filter('.' + value).show('1000');
                }
            })
            $('.list').click(function(){
                $(this).addClass('active').siblings().removeClass('active');
            })
        })
    </script>

 <!--Подвал--> 
 <?php require "../connect_php/footer.php"?>
            
    <div id="popup_nature1" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Природа</div>
                <img src="https://uzbekistan.travel/storage/app/uploads/public/5ff/fd7/ef6/thumb_1520_1140_0_0_0_auto.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_nature2" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Природа</div>
                <img src="../images/nature1.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_nature3" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Природа</div>
                <img src="../images/nature2.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_nature4" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Природа</div>
                <img src="../images/nature3.jpg" alt="">
            </div>
        </div>
    </div>

    <div id="popup_arxitectura1" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Архитектура</div>
                <img src="../images/arxitectura.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_arxitectura2" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Архитектура</div>
                <img src="../images/arxitectura1.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_arxitectura3" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Архитектура</div>
                <img src="../images/arxitectura2.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_arxitectura4" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Архитектура</div>
                <img src="../images/arxitectura3.jpg" alt="">
            </div>
        </div>
    </div>

    <div id="popup_food1" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Блюда</div>
                <img src="../images/blyuda.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_food2" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Блюда</div>
                <img src="../images/blyuda1.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_food3" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Блюда</div>
                <img src="../images/blyuda2.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_food4" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Блюда</div>
                <img src="../images/blyuda3.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_food5" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Блюда</div>
                <img src="../images/blyuda4.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_food6" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Блюда</div>
                <img src="../images/blyuda5.jpg" alt="">
            </div>
        </div>
    </div>

    <div id="popup_metro1" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Метро</div>
                <img src="../images/metro.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_metro2" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Метро</div>
                <img src="../images/metro1.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_metro3" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Метро</div>
                <img src="../images/metro2.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_metro4" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Метро</div>
                <img src="../images/metro3.jpg" alt="">
            </div>
        </div>
    </div>

    <div id="popup_art1" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Искусство</div>
                <img src="../images/art.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_art2" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Искусство</div>
                <img src="../images/art1.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_art3" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Искусство</div>
                <img src="http://localhost/my_site/images/art2.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_art4" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Искусство</div>
                <img src="http://localhost/my_site/images/art3.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_art5" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Искусство</div>
                <img src="http://localhost/my_site/images/art4.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_art6" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Искусство</div>
                <img src="https://uzbekistan.travel/storage/app/uploads/public/5e6/b48/a14/thumb_462_1140_0_0_0_auto.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_art7" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Искусство</div>
                <img src="https://uzbekistan.travel/storage/app/uploads/public/5e6/b3c/0e3/thumb_454_1140_0_0_0_auto.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_art8" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Искусство</div>
                <img src="https://uzbekistan.travel/storage/app/uploads/public/5fd/8a3/d1b/thumb_1463_1140_0_0_0_auto.jpg" alt="">
            </div>
        </div>
    </div>
    
    <div id="popup_zooprak1" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Зоопарк</div>
                <img src="https://uzbekistan.travel/storage/app/uploads/public/5f1/6bb/112/thumb_1205_1140_0_0_0_auto.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_zooprak2" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Зоопарк</div>
                <img src="https://uzbekistan.travel/storage/app/uploads/public/5f1/6ba/181/thumb_1202_1140_0_0_0_auto.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_zooprak3" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Зоопарк</div>
                <img src="https://uzbekistan.travel/storage/app/uploads/public/5f1/6b8/cdc/thumb_1199_1140_0_0_0_auto.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_zooprak4" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Зоопарк</div>
                <img src="https://uzbekistan.travel/storage/app/uploads/public/5f1/6b8/180/thumb_1197_1140_0_0_0_auto.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_zooprak5" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Зоопарк</div>
                <img src="https://uzbekistan.travel/storage/app/uploads/public/5f1/6b7/dd9/thumb_1196_1140_0_0_0_auto.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="popup_zooprak6" class="popup">
        <a href="##" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="##" class="popup__close" style="background: black;">❌</a>
                <div class="popup__title">Зоопарк</div>
                <img src="../images/zoopark_6.jpg" alt="">
            </div>
        </div>
    </div>

</body>

</html>