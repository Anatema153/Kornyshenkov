<?php $Code =$row['Id_product']; ?>

<?php ob_start() ?>
	<h2><?php echo $row['Id_product'];?></h2>

	<div class="Id_product"> ID : <?php echo $row['Id_product'];?> </div>
	<div class="Name_produkt">Имя продукта : <?php echo $row['Name_produkt'];?> </div>
	<div class="Kolichestvo"> Количество : <?php echo $row['Kolichestvo'];?> </div>
	<div class="Kalorii">Калории: <?php echo $row['Kalorii'];?> </div>
	<div class="Id_podacategory"> Подкатегория : <?php echo $row['Id_podacategory'];?> </div>
	<div class="Srok_postavki">Срок поставки<?php echo $row['Srok_postavki'];?> </div>
	<div class="Srok_godnosty"> Срок годности : <?php echo $row['Srok_godnosty'];?> </div>
	<div class="Srok_realisats">Срок реализации:<?php echo $row['Srok_realisats'];?> </div>
	<div class="Uslovia"> Условия : <?php echo $row['Uslovia'];?> </div>
	<div class="Id_postavshik">Поставщик :<?php echo $row['Id_postavshik'];?> </div>

<?php $content=ob_get_clean(); ?>
<?php include 'view/template/product/layout.php'; ?>