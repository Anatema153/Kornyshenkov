<?php
$controllers=new ProductControllers();
echo "<br> uri=".$_SERVER['REQUEST_URI'];

$s=explode('?',$_SERVER['REQUEST_URI']);
$uri=$s[0];
$uri=rtrim($uri,'/');
if ($uri=='/Project/index.php/product/show' && isset($_GET['id'])) 
{
	$controllers->p_show_action($_GET['id']);
}
elseif($uri=='/Project/index.php/product/admin') 
{
	$controllers->p_admin_action();
}
elseif ($uri=='/Project/index.php/product/add') 
{
	$controllers->p_add_action();
}
elseif ($uri=='/Project/index.php/product/delete') 
{
	$controllers->p_delete_action($_GET['id']);
}
elseif ($uri=='/Project/index.php/product/edit') 
{
	$controllers->p_showedit_action($_REQUEST['id']);
}
elseif ($uri=='/Project/index.php/product/update') 
{
	$controllers->p_update_action();
}
$controllers=new DishControllers();
if ($uri=='/Project/index.php/dish/dish') 
{
	$controllers->p_dish_action();
}
elseif ($uri=='/Project/index.php/dish/editdish') 
{
	$controllers->p_showeditdish_action($_REQUEST['id']);
}
elseif ($uri=='/Project/index.php/dish/updatedish') 
{
	$controllers->p_updatedish_action();
}

