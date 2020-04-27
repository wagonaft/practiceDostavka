<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Библиотека WGNF</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="images/logo.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="index.php">Главная</a></li>
                            <li><a href="404.php">Администратору</a></li>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <h2 class="fittext2">Ресторан WGNF</h2>
                        <h4>Доставка блюд на дом!</h4>
                        <p>На данном сайте вы можете ознакомиться с ассортиментом блюд и выбрать то, что вам понраву, просто заполните форму и оформите заказ!.</p>
                        
                        <div class="da-img">
                            <img src="images/burg.jpg" alt="image01" width="320">
                        </div>
                    </div>
                    <!-- End first slide -->
                   
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2>Итальянская и Японская кухни</h2>
                        <h4>Различные вид пицц, ролл и суши</h4>
                        <p>Наивкуснейшие итальянские пиццы на тонком тесте, приготовленные по фирменным рецептам! Классические японские роллы и суши, приготовленные лучшими сушистами города!</p>
                        <div class="da-img">
                            <img src="images/4.jpg" width="320" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <div class="da-slide">
                        <h2>Быстрое и легкое оформление заказа</h2>
                        <h4>Дружелюбные и приветливые операторы</h4>
                        <p>Все это вы можете получить только в ресторане WGNF!</p>
                        
                        <div class="da-img">
                            <img src="images/123.jpg" width="320" alt="image03">
                        </div>
                    </div>
                    <!-- Start third slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->
        <!-- Service section start -->
        <div class="section primary-section" id="service">
            <div class="container">
                <!-- Start title section -->
           
        <!-- Service section end -->
        <!-- Portfolio section start -->
        <div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1>Каталог блюд в наличии<h1>
                    <p>Надеемся вы найдете те блюда, которые вам приглянутся.</p>
                </div>
                <ul class="nav nav-pills">
                    <li class="filter" data-filter="all">
                        <a href="#noAction">Все</a>
                    </li>
                    <li class="filter" data-filter="web">
                        <a href="#noAction">Роллы</a>
                    </li>
                    <li class="filter" data-filter="photo">
                        <a href="#noAction">Пицца</a>
                    </li>
                    <li class="filter" data-filter="identity">
                        <a href="#noAction">Суши</a>
                    </li>
                </ul>
                <!-- Start details for portfolio project 1 -->
                <div id="single-project">
                    <div id="slidingDiv" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/filka.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Ролл Филадельфия</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Состав:</span>Рис, сливочный сыр филадельфия, огурец и лосось.</div>
                                    <div>
                                        <span>Вес:</span>200гр.</div>
                                    <div>
                                        <span>Вид:</span>Классический ролл.</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 1 -->
                    <!-- Start details for portfolio project 2 -->
                    <div id="slidingDiv1" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/pepp.jpg" alt="project 2">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Пицца пепперони</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Состав:</span>Мука, вода, дрожжи, соль, масло оливковое, моцарелла, колбаса пепперони, томаты, чеснок, базилик, паприка</div>
                                    <div>
                                        <span>Вес:</span>735гр.</div>
                                    <div>
                                        <span>Вид:</span>Итальянская пицца</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 2 -->
                    <!-- Start details for portfolio project 3 -->
                    <div id="slidingDiv2" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/losos.jpeg" alt="project 3">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Суши с лососем</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Состав:</span>Рис, лосось</div>
                                    <div>
                                        <span>Вес:</span>150гр.</div>
                                    <div>
                                        <span>Вид:</span>Суши</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 3 -->
                    <!-- Start details for portfolio project 4 -->
                    <div id="slidingDiv3" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/tempura.jpg" alt="project 4">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Ролл темпура</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Состав:</span>Рис, курица, томат, огурец, кляр</div>
                                    <div>
                                        <span>Вес:</span>320гр.</div>
                                    <div>
                                        <span>Вид:</span>Горячий ролл</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 4 -->
                    <!-- Start details for portfolio project 5 -->
                    <div id="slidingDiv4" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Margo.jpg" alt="project 5">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Пицца Маргарита</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Состав:</span>Соус томатный, сыр Моцарелла, томаты, базилик, масло оливковое</div>
                                    <div>
                                        <span>Вес:</span>450гр.</div>
                                    <div>
                                        <span>Вид:</span>Итальянская пицца</div>                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 5 -->
                    <!-- Start details for portfolio project 6 -->
                    <div id="slidingDiv5" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/ugr.png" alt="project 6">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Суши с угрем</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Состав:</span>Рис, лист нори, угрь, кунжут</div>
                                    <div>
                                        <span>Вес:</span>180гр.</div>
                                    <div>
                                        <span>Вид:</span>Суши</div>                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 6 -->
                    <!-- Start details for portfolio project 7 -->
                    <div id="slidingDiv6" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/cezar.jpg" alt="project 7">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Ролл цезарь</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Состав:</span>Рис, курица, томаты, салат, мука, сыр</div>
                                    <div>
                                        <span>Вес:</span>180гр.</div>
                                    <div>
                                        <span>Вид:</span>Классический ролл</div>                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 7 -->
                    <!-- Start details for portfolio project 8 -->
                    <div id="slidingDiv7" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/4.jpg" alt="project 8">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Пицца 4 сыра</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Состав:</span>Сыры Моцарелла, Чедр, Пармезан, Горгонзола</div>
                                    <div>
                                        <span>Вес:</span>550гр.</div>
                                    <div>
                                        <span>Вид:</span>Итальянская пицца</div>                        
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 8 -->
                    <!-- Start details for portfolio project 9 -->
                    <div id="slidingDiv8" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/krev.jpg" alt="project 9">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Суши с креветкой</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Состав:</span>Рис, лист Нори, креветка</div>
                                    <div>
                                        <span>Вес:</span>170гр.</div>
                                    <div>
                                        <span>Вид:</span>Суши</div>                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 9 -->
                    <ul id="portfolio-grid" class="thumbnails row">
                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="images/filka.jpg" alt="project 1">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                                    <i class="icon-plus"></i>
                                </a>
<h4>Цена: 500р</h4>
<?php

echo $_POST['pizza'];
echo $_REQUEST['pizza'];
$pizza = 700
?>

<?php

echo $_POST['blydo'];
echo $_REQUEST['blydo'];
$blydo = "";
?>

<?php

echo $_POST['filka'];
echo $_REQUEST['filka'];
$filka = 500
?>  

<?php

echo $_POST['pepp'];
echo $_REQUEST['pepp'];
$pepp = 900
?>

<?php

echo $_POST['los'];
echo $_REQUEST['los'];
$los = 400
?>

<?php

echo $_POST['tem'];
echo $_REQUEST['tem'];
$tem = 400
?>

<?php

echo $_POST['ugr'];
echo $_REQUEST['ugr'];
$ugr = 600
?>

<?php

echo $_POST['cez'];
echo $_REQUEST['cez'];
$cez = 300
?>

<?php

echo $_POST['sir'];
echo $_REQUEST['sir'];
$sir = 700
?>

<?php

echo $_POST['krev'];
echo $_REQUEST['krev'];
$krev = 500
?>

                                <h3>Роллы</h3>
                                <p>Филадельфия</p>
                                <div class="mask"></div>
                            </div>

<form method="POST">
    <input type="submit" name="nazvanie_knopkii" value="Добавить к заказу" />
</form>
<?php
    # Если кнопка нажата
    if( isset( $_POST['nazvanie_knopkii'] ) )
    {

$summa = $summa + $filka; $blydo = $blydo . 'roll philadelphia'; 
	
    }	
?>



                        </li>
                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/pepp.jpg" alt="project 2">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv1">
                                    <i class="icon-plus"></i>
                                </a>
<h4>Цена: 900р</h4>
                              <h3>Пицца</h3>
                                <p>Пепперони</p>
				
                                <div class="mask"></div>
                            </div>
<form method="POST">
    <input type="submit" name="nazvanie_knopkiii" value="Добавить к заказу" />
</form>
<?php
    # Если кнопка нажата
    if( isset( $_POST['nazvanie_knopkiii'] ) )
    {

$summa = $summa + $pepp; $blydo = $blydo . 'Pizza Pepperoni'; 
	
    }	
?>
                        </li>
                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="images/losos.jpeg" alt="project 3">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv2">
                                    <i class="icon-plus"></i>
                                </a>
<h4>Цена: 400р</h4>
                                <h3>Суши</h3>
                                <p>С лососем</p>
                                <div class="mask"></div>
                            </div>



<form method="POST">
    <input type="submit" name="nazvanie_knopkiiii" value="Добавить к заказу" />
</form>
<?php
    # Если кнопка нажата
    if( isset( $_POST['nazvanie_knopkiiii'] ) )
    {

$summa = $summa + $los; $blydo = $blydo . 'Sushi s lososem'; 
	
    }	
?>







                        </li>
                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="images/tempura.jpg" alt="project 5">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv3">
                                    <i class="icon-plus"></i>
                                </a>

<h4>Цена: 400р</h4>
                                <h3>Роллы</h3>
                                <p>Темпура</p>
                                <div class="mask"></div>
                            </div>
<form method="POST">
    <input type="submit" name="nazvanie_knopkiiiii" value="Добавить к заказу" />
</form>
<?php
    # Если кнопка нажата
    if( isset( $_POST['nazvanie_knopkiiiii'] ) )
    {

$summa = $summa + $tem; $blydo = $blydo . 'Roll tempura'; 
	
    }	
?>
                        </li>
                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/margo.jpg" alt="project 5">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv4">
                                    <i class="icon-plus"></i>
                                </a>
<h4>Цена: 700р</h4>
                                <h3>Пицца</h3>
                                <p>Маргарита</p>

                                <div class="mask"></div>
                            </div>
<form method="POST">
    <input type="submit" name="nazvanie_knopki" value="Добавить к заказу" />
</form>
<?php
    # Если кнопка нажата
    if( isset( $_POST['nazvanie_knopki'] ) )
    {

$summa = $summa + $pizza; $blydo = $blydo . 'Pizza Margarita';
	
    }	
?>
                        </li>

                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="images/ugr.png" alt="project 6">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv5">
                                    <i class="icon-plus"></i>
                                </a>
<h4>Цена: 600р</h4>
                                <h3>Суши</h3>
                                <p>С угрем</p>
                                <div class="mask"></div>
                            </div>

<form method="POST">
    <input type="submit" name="nazvanie_knopkiiiiii" value="Добавить к заказу" />
</form>
<?php
    # Если кнопка нажата
    if( isset( $_POST['nazvanie_knopkiiiiii'] ) )
    {

$summa = $summa + $ugr; $blydo = $blydo . 'Sushi s ugrem'; 
	
    }	
?>
                        </li>

                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="images/cezar.jpg" alt="project 7" />
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv6">
                                    <i class="icon-plus"></i>
                                </a>
<h4>Цена: 300р</h4>
                                <h3>Роллы</h3>
                                <p>Цезарь</p>
                                <div class="mask"></div>
                            </div>
<form method="POST">
    <input type="submit" name="nazvanie_knopkiiiiiii" value="Добавить к заказу" />
</form>
<?php
    # Если кнопка нажата
    if( isset( $_POST['nazvanie_knopkiiiiiii'] ) )
    {

$summa = $summa + $cez; $blydo = $blydo . 'Roll cezar'; 
	
    }	
?>
                        </li>
                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/4.jpg" alt="project 8">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                                    <i class="icon-plus"></i>
                                </a>
<h4>Цена: 700р</h4>
                                <h3>Пицца</h3>
                                <p>4 сыра</p>
                                <div class="mask"></div>
                            </div>
<form method="POST">
    <input type="submit" name="nazvanie_knopkiiiiiiii" value="Добавить к заказу" />
</form>
<?php
    # Если кнопка нажата
    if( isset( $_POST['nazvanie_knopkiiiiiiii'] ) )
    {

$summa = $summa + $sir; $blydo = $blydo . 'Pizza 4 cira'; 
	
    }	
?>
                        </li>
                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="images/krev.png" alt="project 9">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv8">
                                    <i class="icon-plus"></i>
                                </a>
<h4>Цена: 500р</h4>
                                <h3>Суши</h3>
                                <p>С креветкой</p>
                                <div class="mask"></div>
                            </div>
<form method="POST">
    <input type="submit" name="nazvanie_knopkiiiiiiiii" value="Добавить к заказу" />
</form>
<?php
    # Если кнопка нажата
    if( isset( $_POST['nazvanie_knopkiiiiiiiii'] ) )
    {

$summa = $summa + $krev; $blydo = $blydo . 'Sushi s krevetkoi'; 
	
    }	
?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>				
							
                            <h3></h3>
                        
                    <div class="row-fluid centered">
                        <ul class="social">
                            <div>

							<h3>Заполните форму</h3>
							
							<div class="form">
							<form action="#" method="post">
							
							<p>ФИО:<input name="fio" type="text" size="20"></p>
							<p>Адрес:<input name="adress" type="text" size="20"></p>
							<p>Телефон:<input name="phone" type="text" size="20"></p>
							
							<p>Ваш заказ:<input type='text' name="blyda" value='<?=$blydo?>'></p>
							<p>Сумма заказа:<input type='text' name="summ" value='<?=$summa?>'></p>
							<p><input type="submit" value="Отправить"></p>
							</form>
							</div>
							</div>
							<?

                    include("dbinsert.php");
					
                    $fio = $_POST["fio"];
                    $adress = $_POST["adress"];
		    $blyda = $_REQUEST["blyda"];
		    $phone = $_POST["phone"];
		    $summ = $_REQUEST["summ"];
                    if($_POST)
              {

                        $strSQL ="INSERT INTO `zakaz`(`fio`, `adress`, `phone`, `blydo`, `Summa`) VALUES ('".$fio."','".$adress."','".$phone."','".$blyda."','".$summ."')";                    
						$result = mysql_query($strSQL) or die("Не могу выполнить запрос!");                   
                    }
					?>	
					
			
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section edn -->
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; 2020 Разработано <a href="https://vk.com/kirilldaniloski">WGNF</a></p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>