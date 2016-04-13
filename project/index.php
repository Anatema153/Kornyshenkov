
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$test =true;
include_once 'model/Dbh.php';
include_once 'test/testfunction.php';
include_once 'model/ProductModel.php';
include_once 'model/DishModel.php';
include_once 'controller/ProductControllers.php';
include_once 'controller/DishControllers.php';
include_once 'route/routing.php';
?>
<br>
<a href="http://localhost/Project/index.php/product/admin">Admin</a>
<a href="http://localhost/Project/index.php/dish/dish">Dish</a>