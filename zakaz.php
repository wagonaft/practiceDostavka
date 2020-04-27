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
        <title>WGNF</title>
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

        </div>

    </header>
<style>
body {
background-color: #FFD700
}
TABLE {
    border: 4px solid #000;
	color: black;
   }
a {
    color: #008000; 
    text-decoration: none;
   }
a:visited {
    color: #000; 
   } 
a:hover {
    color: #000;
		}
</style>
    <section class="box-with-image-right section-top-space">
    
        <div class="center">

            <div class="green-line">
            </div>
            <?
                include("dbinsert.php");
            ?>
            <form action="#" method="post">
            <a href="admin.php" type="button"><-----Вернуться назад</a>
            <table border="1">
                    <tr>
                        <td>ФИО</td>
                        <td>Адрес</td>
                        <td>Телефон</td>
                        <td>Блюдо</td>
                        <td>Сумма?</td>
                        
                    </tr>
                    <tr>
					
                        <td><?
                                $str = "SELECT * FROM `zakaz`";
                                $result = mysql_query($str);
                            ?><select name="FIO">
                                <?
                                     while($row=mysql_fetch_array($result))
                                {?>
                                    <option value="<?print $row["FIO"];?>"><?print $row["FIO"];?></option>
                                <?}?>
                                </select></td>
                                <td><?
                                $str = "SELECT * FROM `zakaz`";
                                $result = mysql_query($str);
                            ?><select name="Adress">
                                <?
                                     while($row=mysql_fetch_array($result))
                                {?>
                                    <option value="<?print $row["adress"];?>"><?print $row["adress"];?></option>
                                <?}?>
                                </select></td>
                              <td><input type="text" name="phone"></td>
                                <td><input type="tex" name="blydo"></td>
                                <td><input type="text" name="summa"></td>
                                
								<td>
                                </select></td>
                                <td>
                                <td><button type="submit">Оформить заказ</button></td>
                    </tr>
            </table>
            </form>
            <?
                    include("dbinsert.php");
                    $fio = $_POST["fio"];
                    $adress = $_POST["adress"];
                    $phone = $_POST["Phone"];
					$Blydo = $_POST["Blydo"];
                    $summa = $_POST["summa"];
                    
                    if($_POST)
                    {
                        $strSQL ="INSERT INTO `zakaz`(`fio`, `adress`, `phone`, `blydo`, `summa`) VALUES ('".$fio."','".$adress."','".$phone."','".$blydo."','".$summa."')";
                        $result = mysql_query($strSQL) or die("Не могу выполнить запрос1!");
                    }
                ?>
        </div>
    
    </section>
    
    

    <footer>

        
            
            <nav>
        
                <ul class="left">
    
                    <li>
                    
                  
		</li>
                    
                    
                    
                </ul>
            
            </nav>
            
            <div class="clear">
            </div>
        
        </div>
    
    </footer>

    <!--
    facebook SDK
    -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script src="_assets/_libs/jquery.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="_assets/_libs/no-ui-slider/jquery.nouislider.all.min.js"></script>
    <script src="_assets/_libs/smoothscroll.js"></script>
    <script src="_assets/_libs/parallax.js"></script>
    <script src="_assets/_js/functions.js"></script>

</body>
</html>