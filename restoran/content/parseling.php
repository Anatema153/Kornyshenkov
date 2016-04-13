<?php 
//распределение страниц по пунктам меню 
$page=$_GET['page']; 
	if(isset($page)){ 
		$sql="SELECT * FROM `menu` WHERE `order_menu`= ".$page; 
	} 
	else{ 
		$sql = "SELECT * FROM `menu` WHERE `order_menu` IS NULL"; 
		$page=""; 
	} 
	$rows=get_rows($sql);//запрос, в таблицу menu 
	
	foreach($rows as $row){ 
		if($row[2]!="" && file_exists("content/".$row[2])/*проверка файла на наличие*/ && $row[3]==$page) 
	include("content/".$row[2]); 
	
	else 
	echo '<h3>NO FILE!</h3>'; 
	} 
?>