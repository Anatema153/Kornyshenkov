<?php
// Читать комментарии для конкретной новости
function comment_read(){
		$id_n=$_GET['id_n'];// номер новости
		$sql = "SELECT * FROM `comment` WHERE `id_news`=".$id_n." ORDER BY `comment`.`id_comment` DESC";
		$rows=get_rows($sql);
		$com_count=count($rows); // количество комментариев
		$commenT='<hr><h2>Читать комментарии ('.$com_count.')</h2>';
		
		if($com_count>0){ 
				$commenT='<hr><h2>Читать комментарии ('.$com_count.')</h2>'; 
				$commenT.='<table width=60%> 
				<thead> 
				<tr> 
				<th>Date</th> 
				<th>Author</th> 
				<th>Comment</th> 
				</tr> 
				</thead> 
				<tbody>'; 
			foreach($rows as $row){ 
				$commenT.='<tr> 
				<td>'.$row[3].' </td> 
				<td>'.$row[1].' </td> 
				<td>'.$row[2].' </td> 
				</tr>'; 
			} // foreach
		$commenT.='</tbody></table >'; 
		} // if
		else{
			$commenT.='<p>Нет Комментарий</p>';
		}
		$page=$_GET['page'];
		$commenT.='<hr><p><a href="
		'.$_SERVER['PHP_SELF'].'?page='.$page.'
		">К списку новостей</a></p>';
		return $commenT;
	}// function
?>