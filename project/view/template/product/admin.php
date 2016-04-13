
<?php ob_start(); ?>
			<h1>Админитсратирование странички<h1>

<form action="/Project/index.php/product/add" method="post" name="add form">
	<table>
		<tr>
		<td>Код продукта:</td>
		<td><input type="text" name="add_Id_product"></td>
	</tr>
	<tr>
		<td>Имя продукта:</td>
		<td><input type="text" name="add_Name_produkt"></td>
	</tr>
	<tr>
		<td>Код подкатегории:</td>
		<td><input type="text" name="add_Id_podacategory"></td>
	</tr>
	<tr>
		<td>Количество:</td>
		<td><input type="text" name="add_Kolichestvo"></td>
	</tr>
	<tr>
		<td>Калории:</td>
		<td><input type="text" name="add_Kalorii"></td>
	</tr>	<tr>
		<td>Срок поставки:</td>
		<td><input type="text" name="add_Srok_postavki"></td>
	</tr>
	<tr>
		<td>Срок годности:</td>
		<td><input type="text" name="add_Srok_godnosty"></td>
	</tr>
	<tr>
		<td>Срок реализации:</td>
		<td><input type="text" name="add_Srok_realisats"></td>
	</tr>
	<tr>
		<td>Условия хранения:</td>
		<td><input type="text" name="add_Uslovia"></td>
	</tr>
	<tr>
		<td>Код поставщика:</td>
		<td><input type="text" name="add_Id_postavshik"></td>
	</tr>
	<tr>
		<td><input type="reset" name="reset" value="Очистить"></td>
		<td><input type="submit" name="submit" value="Добавить"></td>
	</tr>
	</table>
</form>


<h1>Список<h1>
			<ul>
				<?php foreach ($rows as $row): ?>
					<li>
						<a href="/Project/index.php/product/delete?id=<?php echo $row['Id_product'];?>">X
						</a>
						<a href="/Project/index.php/product/show?id=<?php echo $row['Id_product'];?>">
							<?php echo $row['Id_product']. '. '. $row['Name_produkt'];?>
						</a>
						<a href="/Project/index.php/product/edit?id=<?php echo $row['Id_product'];?>">Edit
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
<table>
	<tr>
		<td>ID:</td>
		<td>Имя продукта:</td>
		<td>Количество:</td>
		<td>Калории:</td>
		<td>Подкатегория:</td>
		<td>Срок поставки:</td>
		<td>Срок годности:</td>
		<td>Срок реализации:</td>
		<td>Условия хранения:</td>
		<td>Поставщик:</td>
	</tr>
<?php foreach ($rows as $row): ?>
	<form id="edit" action="/Project/index.php/product/update" method="post" name="element_form<?php echo $row ['Id_product']?>">
	<tr >
		<td><input type="hidden" style="width: 30px" name="Id_product" value="<?php echo $row ['Id_product']?>"><?php echo $row ['Id_product']?></td>	
		<td><input type="text" name="update_Name_produkt" value="<?php echo $row ['Name_produkt']?>"></td>
		<td><input type="text" style="width: 90px"name="update_Kolichestvo" value="<?php echo $row ['Kolichestvo']?>"></td>
		<td><input type="text" style="width: 65px"name="update_Kalorii" value="<?php echo $row ['Kalorii']?>"></td>
		<td><input type="text" style="width: 105px"name="update_Id_podacategory" value="<?php echo $row ['Id_podacategory']?>"></td>
		<td><input type="text" style="width: 105px"name="update_Srok_postavki" value="<?php echo $row ['Srok_postavki']?>"></td>
		<td><input type="text" style="width: 105px"name="update_Srok_godnosty" value="<?php echo $row ['Srok_godnosty']?>"></td>
		<td><input type="text" style="width: 120px"name="update_Srok_realisats" value="<?php echo $row ['Srok_realisats']?>"></td>
		<td><input type="text" style="width: 125px"name="update_Uslovia" value="<?php echo $row ['Uslovia']?>"></td>
		<td><input type="text" style="width: 80px"name="update_Id_postavshik" value="<?php echo $row ['Id_postavshik']?>"></td>
		<td><input type="submit" name="submit" value="Изменить"></td>
		<td><a href="/Project/index.php/product/delete?id=<?php echo $row['Id_product'];?>"><input type="button" name="delete" value="Удалить"></a></td>
	</tr>
	</form>
	<?php endforeach; ?>
</table>




<?php $content=ob_get_clean();?>

<?php include 'view/template/product/layout.php'; ?>

<style type="text/css">
a{
	color: blue;
	text-decoration: none;
}

</style>