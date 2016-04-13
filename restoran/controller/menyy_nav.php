 <?php
$text="";
	foreach($rows as $row)
	{
			if($row[3]=="")
			{
				$text.='<li>
				<a href="'.$_SERVER['PHP_SELF'].'">'.$row[1].'</a></li>';
			}
			else
			{
				$text.='<li >
				<a href="'.$_SERVER['PHP_SELF'].'?page='.$row[3].'">'.$row[1].'</a></li>';
			}//if $row[3] - order menyy 
	}// foreach
	echo '<ul>'.$text.'</ul>';
?>