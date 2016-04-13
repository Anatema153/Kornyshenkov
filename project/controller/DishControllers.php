<?php
Class DishControllers
{
	function p_dish_action()
	{
		$row_Model= new DishModel();
		$rows =$row_Model->get_all_rows();
		$rowsd = $row_Model->get_all_rowsd();
		require 'view/template/dish/dish.php';
	}
	function p_showeditdish_action($Id_bludo)
	{
		$row_Model=new DishModel();
		$row=$row_Model->get_rows_by_id_dish($Id_bludo);
		require"view/template/dish/editdish.php";
	}
	function p_updatedish_action()
	{
		$row_Model=new DishModel();
		$row_Model->update_row_by_id_dish();
		$rows =$row_Model->get_all_rows();
		require"view/template/dish/dish.php";
	}	
}