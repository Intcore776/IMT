<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/task4.css"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Table1</title>
</head>
<body>

<style>
    body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 18px;

        margin: 0 auto;
        padding: 0;
        width: 1020px;
        /*width : 65%;*/
    }

    #wrapper {
        margin: 5px 0;
    }

    header {
        height: 100px;
        border: 1px solid black;
        text-align: center;
    }

    .logo {
        background: #A55;
        float: left;
        margin: 5px;
        padding: 25px;
        width: 20%;
    }

    .menu_site_header {
        position: static;
        height: 100px;
        float: none;
        margin-top: -16px;
        padding: 0;
        margin-left: 260px;
    }

    .menu_site_header ul {
        list-style: none;
        font-size: 12pt;
        color: #000;
        padding: 0;
        text-transform: uppercase;
        overflow: hidden;
    }

    .menu_site_header ul li {
        float: left;
        padding: 3px;

    }

    .menu_site_header ul a, .menu_site_header ul a:before {
        display: block;
        margin: 0;
        padding: 3px 20px;
        margin-top: 12px;
        background: #900;
        color: #fff;
        text-transform: none;
        line-height: 50px;

        position: relative;
        transition: all 0.3s case-in-out;
    }

    .product_categories, .content {
        height: 1400px;
        max-height: auto;
        margin-top: -300px;
        margin: 0 auto;
        padding: 0;
        border: 1px solid black;
    }

    .product_categories {
        width: 250px;
        /*width : 28.25%;*/
        float: left;
    }

    .product_categories ul {
        width: 200px;
        padding-left: 23px;
        margin-top: 5px;
        margin-bottom: 0;
        /*text-align : left;*/
    }

    .inner li {
        list-style: none;
    }

    .product_name li a {
        white-space: nowrap;
        width: 100px;
    }

    .inner ul {
        list-style: none;
        padding: 0;
        margin: auto;
    }

    .product_item {
        float: left;
        padding: 12px;
        margin: 12px;
    }

    .image_date, .product_article_num {
        text-align: right;
        font-size: 8pt;
        display: block;
    }

    .image {
        background: #AAA;
        height: 175px;
        width: 200px;
    }

    p {
        margin: 0;
        padding: 0;
    }

    .product_name,
    .price {
        text-align: center;
        font-size: 10pt;
        margin: 0 auto;
    }

    .product_name {
        word-wrap: break-word;
        width: 180px;
    }

    .preview_select {
        display: block;
    }

    .variants_price {
        float: left;
    }

    .stock {
        text-align: right;
        font-size: 10pt;
    }

    .content {
        width: 766px;
        /*width : 71%;*/
        float: none;
        /*margin-left : 28.75%;*/
        margin-left: 252px;
        text-align: center;
    }

    .line {
        height: 320px;
        float: none;
        /*clear:both;*/
    }

    .product_line {
        display: inline;
        position: relative;
        text-align: center;
        height: 320px;
        float: left;
    }

    .product_article_num, .stock {
        height: 16px;
    }

    footer {
        height: 50px;
        text-align: center;
        font-size: 16px;
        border: 1px solid black;
        text-align: center;
    }
</style>

<?

$data = 'a:11:{i:1;O:8:"stdClass":11:{s:2:"id";s:1:"1";s:3:"url";s:0:"";s:7:"menu_id";s:1:"1";s:8:"position";s:1:"1";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-06-16 07:08:09";s:4:"name";s:14:"Главная";s:10:"meta_title";s:21:"Хиты продаж";s:13:"meta_keywords";s:21:"Хиты продаж";s:16:"meta_description";s:273:"Этот магазин является демонстрацией скрипта интернет-магазина  Okay . Все материалы на этом сайте присутствуют исключительно в демострационных целях.";s:11:"description";s:312:"<p>Этот магазин является демонстрацией скрипта интернет-магазина <a href="http://okay-cms.com">Okay</a>. Все материалы на этом сайте присутствуют исключительно в демострационных целях.</p>";}i:4;O:8:"stdClass":11:{s:2:"id";s:1:"4";s:3:"url";s:4:"blog";s:7:"menu_id";s:1:"1";s:8:"position";s:1:"2";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-06-16 07:08:09";s:4:"name";s:8:"Блог";s:10:"meta_title";s:8:"Блог";s:13:"meta_keywords";s:8:"Блог";s:16:"meta_description";s:0:"";s:11:"description";s:0:"";}i:3;O:8:"stdClass":11:{s:2:"id";s:1:"3";s:3:"url";s:8:"dostavka";s:7:"menu_id";s:1:"1";s:8:"position";s:1:"3";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-06-16 07:08:09";s:4:"name";s:16:"Доставка";s:10:"meta_title";s:16:"Доставка";s:13:"meta_keywords";s:16:"Доставка";s:16:"meta_description";s:16:"Доставка";s:11:"description";s:3602:"<h2>Курьерская доставка по&nbsp;Москве</h2><p>Курьерская доставка осуществляется на следующий день после оформления заказа<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>если товар есть в&nbsp;наличии. Курьерская доставка осуществляется в&nbsp;пределах Томска и&nbsp;Северска ежедневно с&nbsp;10.00 до&nbsp;21.00. Заказ на&nbsp;сумму свыше 300 рублей доставляется бесплатно. <br /><br />Стоимость бесплатной доставки раcсчитывается от&nbsp;суммы заказа с&nbsp;учтенной скидкой. В&nbsp;случае если сумма заказа после применения скидки менее 300р<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>осуществляется платная доставка. <br /><br />При сумме заказа менее 300 рублей стоимость доставки составляет от 50 рублей.</p><h2>Самовывоз</h2><p>Удобный<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>бесплатный и быстрый способ получения заказа.<br />Адрес офиса: Москва<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>ул. Арбат<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>1/3<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>офис 419.</p><h2>Доставка с&nbsp;помощью предприятия<span style="margin-right: 0.44em;"> </span><span style="margin-left: -0.44em;">&laquo;</span>Автотрейдинг&raquo;</h2><p>Удобный и быстрый способ доставки в крупные города России. Посылка доставляется в офис<span style="margin-right: 0.44em;"> </span><span style="margin-left: -0.44em;">&laquo;</span>Автотрейдинг&raquo; в&nbsp;Вашем городе. Для получения необходимо предъявить паспорт и&nbsp;номер грузовой декларации<span style="margin-right: 0.3em;"> </span><span style="margin-left: -0.3em;">(</span>сообщит наш менеджер после отправки). Посылку желательно получить в&nbsp;течение 24 часов с&nbsp;момента прихода груза<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>иначе компания<span style="margin-right: 0.44em;"> </span><span style="margin-left: -0.44em;">&laquo;</span>Автотрейдинг&raquo; может взыскать с Вас дополнительную оплату за хранение. Срок доставки и стоимость Вы можете рассчитать на сайте компании.</p><h2>Наложенным платежом</h2><p>При доставке заказа наложенным платежом с помощью<span style="margin-right: 0.44em;"> </span><span style="margin-left: -0.44em;">&laquo;</span>Почты России&raquo;, вы&nbsp;сможете оплатить заказ непосредственно в&nbsp;момент получения товаров.</p>";}i:2;O:8:"stdClass":11:{s:2:"id";s:1:"2";s:3:"url";s:6:"oplata";s:7:"menu_id";s:1:"1";s:8:"position";s:1:"4";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-06-16 07:08:09";s:4:"name";s:12:"Оплата";s:10:"meta_title";s:12:"Оплата";s:13:"meta_keywords";s:12:"Оплата";s:16:"meta_description";s:12:"Оплата";s:11:"description";s:4298:"<h2><span>Наличными курьеру</span></h2><p>Вы можете оплатить заказ курьеру в рублях непосредственно в момент доставки. Курьерская доставка осуществляется по Москве на следующий день после принятия заказа.</p><h2>Яндекс.Деньги</h2><p><span>Яндекс</span><span>.</span><span>Деньги</span><span>&nbsp;&mdash; доступный и безопасный способ платить за товары и услуги через интернет</span>.</p><h2>Банковская карта</h2><p><span>Оплата банковской картой Visa или MasterCard через систему Яндекс.Деньги.</span></p><h2>Через терминал</h2><p><span>Оплатите наличными через многочисленные терминалы в любом городе России. Можно заплатить и с банковской карты через многие банкоматы. Для этого найдите в меню терминала или банкомата логотип Яндекса и укажите код платежа.</span></p><h2>Со счета мобильного телефона</h2><p><span>Оплата со&nbsp;счета мобильного телефона&nbsp;через систему Яндекс.Деньги.</span></p><h2>Webmoney</h2><p>После оформления заказа вы сможете перейти на сайт webmoney для оплаты заказа, где сможете оплатить заказ в автоматическом режиме, а так же проверить наш сертификат продавца.</p><h2>Квитанция</h2><p><span>Вы можете распечатать квитанцию и оплатить её в любом отделении банка.</span></p><h2>Робокасса</h2><p><span>ROBOKASSA &ndash; сервис для организации приема платежей на сайте, интернет магазине и социальных сетях. Прием платежей осуществляется при минимальных комиссиях.</span></p><h2>PayPal</h2><p><span>Совершайте покупки безопасно, без раскрытия информации о своей кредитной карте. PayPal защитит вас, если возникнут проблемы с покупкой.</span></p><h2>Оплата через Интеркассу</h2><p><span>Это удобный в использовании сервис, подключение к которому позволит Интернет-магазинам, веб-сайтам и прочим торговым площадкам принимать все возможные формы оплаты в максимально короткие сроки.</span></p><h2>Оплата картой через Liqpay.com</h2><p><span>Благодаря своей открытости и универсальности LiqPAY стремительно интегрируется со многими платежными системами и платформами и становится стандартом платежных операций.</span></p><h2>Оплата через Pay2Pay</h2><p><span>Универсальный платежный сервис Pay2Pay призван облегчить и максимально упростить процесс приема электронных платежей на Вашем сайте. Мы открыты для всего нового и сверхсовременного.</span></p><h2>Оплатить через QIWI</h2><p><span>QIWI &mdash; удобный сервис для оплаты повседневных услуг.</span></p><h2><span style="font-size: 20px;">Наличными в офисе Автолюкса</span></h2><p>При доставке заказа системой Автолюкс, вы сможете оплатить заказ в их офисе непосредственно в момент получения товаров.</p>";}i:5;O:8:"stdClass":11:{s:2:"id";s:1:"5";s:3:"url";s:3:"404";s:7:"menu_id";s:1:"2";s:8:"position";s:1:"5";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-06-27 11:05:14";s:4:"name";s:36:"Страница не найдена";s:10:"meta_title";s:36:"Страница не найдена";s:13:"meta_keywords";s:36:"Страница не найдена";s:16:"meta_description";s:211:"404  
  Страница не найдена  
 
 
  Попробуйте посмотреть еще:  
   Главная   
   Блог   
   Оплата   
   Доставка   
   Контакты";s:11:"description";s:1036:"<div class="col-sm-12 col-md-6 text-center">
<div><span style="color: #56b9ff; font-size: 150px;">404</span></div>
<div><span style="font-size: 36pt;">Страница не найдена</span></div>
</div>
<div class="col-sm-12 col-md-6">
<div style="text-align: center;"><span style="font-size: 18pt;">Попробуйте посмотреть еще:</span></div>
<div style="text-align: center;"><span style="font-size: 24pt;"><a href="../">Главная</a></span></div>
<div style="text-align: center;"><span style="font-size: 24pt;"><a href="../blog">Блог</a></span></div>
<div style="text-align: center;"><span style="font-size: 24pt;"><a href="oplata">Оплата</a></span></div>
<div style="text-align: center;"><span style="font-size: 24pt;"><a href="../dostavka">Доставка</a></span></div>
<div style="text-align: center;"><span style="font-size: 24pt;"><a href="../contact">Контакты</a></span></div>
<div style="text-align: center;">&nbsp;</div>
</div>
<div class="clearfix">&nbsp;</div>";}i:8;O:8:"stdClass":11:{s:2:"id";s:1:"8";s:3:"url";s:6:"brands";s:7:"menu_id";s:1:"1";s:8:"position";s:1:"6";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-06-16 07:08:09";s:4:"name";s:12:"Бренды";s:10:"meta_title";s:12:"Бренды";s:13:"meta_keywords";s:12:"Бренды";s:16:"meta_description";s:0:"";s:11:"description";s:0:"";}i:7;O:8:"stdClass":11:{s:2:"id";s:1:"7";s:3:"url";s:12:"all-products";s:7:"menu_id";s:1:"2";s:8:"position";s:1:"7";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2015-11-18 08:32:22";s:4:"name";s:19:"Все товары";s:10:"meta_title";s:19:"Все товары";s:13:"meta_keywords";s:19:"Все товары";s:16:"meta_description";s:0:"";s:11:"description";s:0:"";}i:6;O:8:"stdClass":11:{s:2:"id";s:1:"6";s:3:"url";s:7:"contact";s:7:"menu_id";s:1:"1";s:8:"position";s:1:"8";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2017-05-31 09:46:59";s:4:"name";s:16:"Контакты";s:10:"meta_title";s:16:"Контакты";s:13:"meta_keywords";s:16:"Контакты";s:16:"meta_description";s:16:"Контакты";s:11:"description";s:99:"<p>Москва, ул. Космонавта Волкова 14.</p>
<p>Телефон 777-15-51</p>";}i:10;O:8:"stdClass":11:{s:2:"id";s:2:"10";s:3:"url";s:10:"discounted";s:7:"menu_id";s:1:"2";s:8:"position";s:2:"10";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-07-12 14:11:51";s:4:"name";s:31:"Акционные товары";s:10:"meta_title";s:31:"Акционные товары";s:13:"meta_keywords";s:31:"Акционные товары";s:16:"meta_description";s:0:"";s:11:"description";s:0:"";}i:11;O:8:"stdClass":11:{s:2:"id";s:2:"11";s:3:"url";s:11:"bestsellers";s:7:"menu_id";s:1:"2";s:8:"position";s:2:"11";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-07-12 14:10:22";s:4:"name";s:21:"Хиты продаж";s:10:"meta_title";s:21:"Хиты продаж";s:13:"meta_keywords";s:21:"Хиты продаж";s:16:"meta_description";s:0:"";s:11:"description";s:0:"";}i:12;O:8:"stdClass":11:{s:2:"id";s:2:"12";s:3:"url";s:4:"news";s:7:"menu_id";s:1:"1";s:8:"position";s:2:"12";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2017-05-15 13:33:35";s:4:"name";s:14:"Новости";s:10:"meta_title";s:14:"Новости";s:13:"meta_keywords";s:14:"Новости";s:16:"meta_description";s:0:"";s:11:"description";s:0:"";}}';

$menu = unserialize($data);

?>


<div id="wrapper">
    <div class="page">
        <header>
            <div class="logo">
                <img src="#" alt="Logo"/>
            </div>
        </header>

        <div id="menu_site">
            <ul id="menu">
                <?php foreach ($menu as $value): ?>
                    <?php if ($value->visible): ?>
                        <?php if ($value->menu_id == 1): ?>
                            <li>
                                <a href="<?php echo $value->url ?>"><?php echo $value->name ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>


        <aside class="product_categories">
                    <pre>
                        <?php
                        /*  Левое меню сайта (сайд бар) Построение категорий и подкатегорий*/
                        ini_set('display_errors', 1);
                        error_reporting(E_WARNING);
                        function GetCategoriesTree($categories, $parent_id = 0)
                        {
                            $results = array();
                            if ($categories) {
                                echo "<ul>";
                                foreach ($categories as $key => $category) {
                                    if ($category->parent_id == $parent_id) {
                                        $result = new stdClass();
                                        $result = $category;
                                        echo "<li><a href='#'>$category->name</a></li>";
                                        if ($category->id != $parent_id)
                                            $result->subcategories = GetCategoriesTree($categories, $category->id);
                                        $results[] = $result;
                                        unset($result);
                                    }
                                }
                                echo "</ul>";
                            }
                            return $results;
                        }

                        $clear_categories = 'a:16:{i:0;O:8:"stdClass":20:{s:2:"id";s:2:"54";s:9:"parent_id";s:1:"0";s:3:"url";s:17:"tehnika-dlya-doma";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"54";s:11:"level_depth";s:1:"1";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:18:43";s:4:"name";s:30:"Техника для дома";s:7:"name_h1";s:0:"";s:10:"meta_title";s:30:"Техника для дома";s:13:"meta_keywords";s:30:"Техника для дома";s:16:"meta_description";s:30:"Техника для дома";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:1;O:8:"stdClass":20:{s:2:"id";s:2:"59";s:9:"parent_id";s:1:"0";s:3:"url";s:16:"detskie-igrushki";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"59";s:11:"level_depth";s:1:"1";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:00";s:4:"name";s:29:"Детские игрушки";s:7:"name_h1";s:0:"";s:10:"meta_title";s:29:"Детские игрушки";s:13:"meta_keywords";s:29:"Детские игрушки";s:16:"meta_description";s:29:"Детские игрушки";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:2;O:8:"stdClass":20:{s:2:"id";s:2:"62";s:9:"parent_id";s:1:"0";s:3:"url";s:8:"gadzhety";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"62";s:11:"level_depth";s:1:"1";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:22";s:4:"name";s:14:"Гаджеты";s:7:"name_h1";s:0:"";s:10:"meta_title";s:14:"Гаджеты";s:13:"meta_keywords";s:14:"Гаджеты";s:16:"meta_description";s:14:"Гаджеты";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:3;O:8:"stdClass":20:{s:2:"id";s:2:"68";s:9:"parent_id";s:1:"0";s:3:"url";s:15:"mebel-dlya-doma";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"68";s:11:"level_depth";s:1:"1";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:35";s:4:"name";s:28:"Мебель для дома";s:7:"name_h1";s:0:"";s:10:"meta_title";s:28:"Мебель для дома";s:13:"meta_keywords";s:28:"Мебель для дома";s:16:"meta_description";s:28:"Мебель для дома";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:4;O:8:"stdClass":20:{s:2:"id";s:2:"55";s:9:"parent_id";s:2:"54";s:3:"url";s:15:"vodonagrevateli";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"55";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:18:43";s:4:"name";s:30:"Водонагреватели";s:7:"name_h1";s:0:"";s:10:"meta_title";s:30:"Водонагреватели";s:13:"meta_keywords";s:30:"Водонагреватели";s:16:"meta_description";s:30:"Водонагреватели";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:5;O:8:"stdClass":20:{s:2:"id";s:2:"58";s:9:"parent_id";s:2:"54";s:3:"url";s:20:"radiatory-otopleniya";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"58";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:46";s:4:"name";s:37:"Радиаторы отопления";s:7:"name_h1";s:0:"";s:10:"meta_title";s:37:"Радиаторы отопления";s:13:"meta_keywords";s:37:"Радиаторы отопления";s:16:"meta_description";s:37:"Радиаторы отопления";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:6;O:8:"stdClass":20:{s:2:"id";s:2:"56";s:9:"parent_id";s:2:"55";s:3:"url";s:15:"gazovye-kolonki";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"56";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:46";s:4:"name";s:29:"Газовые колонки";s:7:"name_h1";s:0:"";s:10:"meta_title";s:29:"Газовые колонки";s:13:"meta_keywords";s:29:"Газовые колонки";s:16:"meta_description";s:29:"Газовые колонки";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:7;O:8:"stdClass":20:{s:2:"id";s:2:"57";s:9:"parent_id";s:2:"55";s:3:"url";s:7:"bojlery";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"57";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:46";s:4:"name";s:14:"Бойлеры";s:7:"name_h1";s:0:"";s:10:"meta_title";s:14:"Бойлеры";s:13:"meta_keywords";s:14:"Бойлеры";s:16:"meta_description";s:14:"Бойлеры";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:8;O:8:"stdClass":20:{s:2:"id";s:2:"60";s:9:"parent_id";s:2:"59";s:3:"url";s:16:"detskie-mashinki";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"60";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:45";s:4:"name";s:29:"Детские машинки";s:7:"name_h1";s:0:"";s:10:"meta_title";s:29:"Детские машинки";s:13:"meta_keywords";s:29:"Детские машинки";s:16:"meta_description";s:29:"Детские машинки";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:9;O:8:"stdClass":20:{s:2:"id";s:2:"61";s:9:"parent_id";s:2:"59";s:3:"url";s:16:"myagkie-igrushki";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"61";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-21 16:37:10";s:4:"name";s:27:"Мягкие игрушки";s:7:"name_h1";s:0:"";s:10:"meta_title";s:27:"Мягкие игрушки";s:13:"meta_keywords";s:27:"Мягкие игрушки";s:16:"meta_description";s:27:"Мягкие игрушки";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:10;O:8:"stdClass":20:{s:2:"id";s:2:"63";s:9:"parent_id";s:2:"62";s:3:"url";s:9:"smartfony";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"63";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:22";s:4:"name";s:18:"Смартфоны";s:7:"name_h1";s:0:"";s:10:"meta_title";s:18:"Смартфоны";s:13:"meta_keywords";s:18:"Смартфоны";s:16:"meta_description";s:18:"Смартфоны";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:11;O:8:"stdClass":20:{s:2:"id";s:2:"65";s:9:"parent_id";s:2:"62";s:3:"url";s:9:"planshety";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"65";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:23";s:4:"name";s:16:"Планшеты";s:7:"name_h1";s:0:"";s:10:"meta_title";s:16:"Планшеты";s:13:"meta_keywords";s:16:"Планшеты";s:16:"meta_description";s:16:"Планшеты";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:12;O:8:"stdClass":20:{s:2:"id";s:2:"64";s:9:"parent_id";s:2:"63";s:3:"url";s:6:"xiaomi";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"64";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:45";s:4:"name";s:6:"Xiaomi";s:7:"name_h1";s:0:"";s:10:"meta_title";s:6:"Xiaomi";s:13:"meta_keywords";s:6:"Xiaomi";s:16:"meta_description";s:6:"Xiaomi";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:13;O:8:"stdClass":20:{s:2:"id";s:2:"67";s:9:"parent_id";s:2:"63";s:3:"url";s:5:"meizu";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"67";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:44";s:4:"name";s:5:"Meizu";s:7:"name_h1";s:0:"";s:10:"meta_title";s:5:"Meizu";s:13:"meta_keywords";s:5:"Meizu";s:16:"meta_description";s:5:"Meizu";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:14;O:8:"stdClass":20:{s:2:"id";s:2:"66";s:9:"parent_id";s:2:"65";s:3:"url";s:6:"lenovo";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"66";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:44";s:4:"name";s:6:"Lenovo";s:7:"name_h1";s:0:"";s:10:"meta_title";s:6:"Lenovo";s:13:"meta_keywords";s:6:"Lenovo";s:16:"meta_description";s:6:"Lenovo";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:15;O:8:"stdClass":20:{s:2:"id";s:2:"69";s:9:"parent_id";s:2:"68";s:3:"url";s:13:"kreslo-meshok";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"69";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-21 17:17:08";s:4:"name";s:23:"Кресло мешок";s:7:"name_h1";s:0:"";s:10:"meta_title";s:23:"Кресло мешок";s:13:"meta_keywords";s:23:"Кресло мешок";s:16:"meta_description";s:23:"Кресло мешок";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}}';
                        $categories_data = unserialize($clear_categories);
                        GetCategoriesTree($categories_data);
                        ?>
                    </pre>
        </aside>


        <? include("products.php"); ?>
        <div class="content">
            <div class="inner">
                <p>Контент</p>
                <p>Тут будет вывод товаров</p>
                <? if ($products) : ?>
                    <ul class="clearfix">
                        <? $i = 0; ?>
                        <? foreach ($products as $product) : ?>
                            <? if ($product->visible): ?>
                                <? if ($product->variants[0]->stock > 0) : ?>
                                    <? ++$i; ?>
                                    <? if (($i % 4)) : ?>
                                        <div class="product_line">
                                            <li class="product_item">
                                                <div class="image">
                                                    <span class="image_date"><?php echo date('m.d.y', strtotime($product->created)); ?></span>
                                                    <img src="<? echo $product->image->filename ?>"
                                                         alt="<? echo $product->image->filename ?>">
                                                </div>
                                                <div class="product_name">
                                                    <a href="<? echo $product->url ?>">
                                                        <? echo $product->name ?>
                                                    </a>
                                                </div>
                                                <div class="product_article">
                                                    <? if ($product->image->position > 0) : ?>
                                                        <span class="product_article_num">#<? echo $product->image->position ?></span>
                                                    <? else : ?>
                                                        <span class="product_article_num">#</span>
                                                    <? endif; ?>
                                                </div>
                                                <div class="price">
                                                    <p> Цена товара = <? echo ceil($product->variant->price); ?> </p>
                                                    <? if (count($product->variants) > 1): ?>
                                                        <p class="variants_price">Другие варианты:</p>
                                                        <select class="preview_select">
                                                            <? foreach ($product->variants as $item) : ?>
                                                                <? if ($item->id != $product->variant->id): ?>
                                                                    <option><? echo $product->variants[0]->name . " = " . ceil($item->price); ?>
                                                                        грн.
                                                                    </option>
                                                                <? endif; ?>
                                                            <? endforeach; ?>
                                                        </select>
                                                    <? endif; ?>
                                                </div>

                                                <div class="stock">
                                                    <p> Колличесво товаров - <? echo $product->variants[0]->stock ?>
                                                        шт </p>
                                                </div>
                                            </li>
                                        </div>
                                    <? else: ?>
                                        <div class="line"></div>
                                    <? endif; ?>
                                <? endif; ?>
                            <? endif; ?>
                        <? endforeach; ?>
                    </ul>
                <? endif; ?>
            </div>
        </div>
        <footer>
            <p>Футер сайта</p>
        </footer>
    </div>
</div>
</body>
</html>