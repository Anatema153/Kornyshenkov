<?php ob_start(); ?>
<?php foreach ($rows as $row)
      if($row['Visible']==1)
      {
        ?>
      <ul>
        <li><h3><?php echo $row['Bludo_name'];?></h3>
          <table >
            <tr>
              <td><img class="eda" src="../../img/eda/<?php echo $row['Image']; ?>"></td>
              <td>Ингридиенты:<?php foreach ($rowsd as $rowd)
              {
                echo $rowd['Id_product'];
                echo ", ";
              }
              ?>
              Курица, куриный бульон,<br> грецкие орехи, пряные травы, пряности</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>Каллорийность блюда:  <?php echo $row['Calorii'];?></td>
              <td class="price"><?php echo $row['Price'];?></td>
            </tr>
            <tr>
             	<td><a href="/Project/index.php/dish/editdish?id=<?php echo $row['Id_bludo'];?>">Редактирование</a></td>
            </tr>
          </table
        </li>
      </ul>
<?php
  }      

?>

<?php $content=ob_get_clean();?>
<?php include 'view/template/product/layout.php'; ?>