<!DOCTYPE HTML PUBLIC>
<html>

<head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Ресторан</title>	
</head>

    <body>
<?php 
// Файл функции
include ('model/_functions.php')
?>
        <header>
            <div id="logo"></div><!-- end id="logo"  Логотип -->
            <div id="lan-sea"></div><!-- end id="lan-sea"  Часить, где располагается переклюяение языков и окно поиска -->
        </header><!-- end header   Голова сайта --> 

        <div id="content">
            <div id="menu">
                <!--<ul>
                    <li><a href="index.html" class="select">Главная</a></li>
                    <li><a href="index2.html">Меню</a></li>
                    <li><a href="#">Контакты</a></li>                        
                </ul> -->

        <?php
      	$sql = "SELECT * FROM `menu` ORDER BY `order_menu` ASC";
    	$rows=get_rows($sql);

    	include ('controller/menyy_nav.php');
    	?>
       
            </div><!-- end id="menu" Боковое меню. Размер контента меню и логотип по ширине одинаковые -->
        <?php 
       	include("content/parseling.php"); ?><!-- end id="sisu" Здесь находится текст -->
        </div><!-- end id="content"   Контент содержания  -->
        
        <footer></footer><!-- end footer    Нижняя часть -->
       
    </body>

</html>