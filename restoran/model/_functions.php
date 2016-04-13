<?php
include('model/connect_db.php');
// Функция выполнения запросов на выборку данных
function get_rows($sql){
		$result=mysql_query($sql);
		$rows=array();
		while($row=mysql_fetch_array($result)){
				$rows[]=$row;
			}
		return $rows;
	}
//mysql_close($linf);
?>