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
        <title>Admin</title>
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
                    <a href="index.php" class="brand">
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
                $str = "SELECT fio, adress, phone, blydo, summa FROM zakaz";
                $result = mysql_query($str) or die("Не могу выполнить запрос1!");
            ?>
                <h1><font color="black">Заказы</font></h1><a href="zakaz.php" type="button">Все заказы</a>
                <table align="center" border="1">
                    <tr>
						<td>#</td>
                        <td>ФИО</td>
                        <td>Адрес</td>
                        <td>Телефон</td>
                        <td>Блюдо</td>
                        <td>Сумма</td>
                       
                    </tr>
                    <?
                        while($row=mysql_fetch_array($result))
                    {?>
                    <tr>
						<td><?print $row["fio"];?></td>
                        <td><?print $row["adress"];?></td>
                        <td><?print $row["phone"];?></td>
                        <td><?print $row["blydo"];?></td>
                        <td><?print $row["summa"];?></td>
               
                        <td><a href="admin.php?&fio=<?print $row["fio"];?>">Удалить</a></td>
                    </tr>
                    <?}?>
                </table>
               
               
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