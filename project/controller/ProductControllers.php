<?php
Class ProductControllers
{
	function p_admin_action()
	{
		$row_Model= new ProductModel();
		$rows =$row_Model->get_all_rows();
		require 'view/template/product/admin.php';
	}
	function p_show_action($Id_product)
	{	$row_Model= new ProductModel();
		$row=$row_Model->get_rows_by_id($Id_product);

		require 'view/template/product/show.php';
	}
	function p_delete_action($Id_product)
	{
		$row_Model=new ProductModel();
		$row_Model->delete_rows($Id_product);
		$rows =$row_Model->get_all_rows();
		require"view/template/product/admin.php";
	}
	function p_showedit_action($Id_product)
	{
		$row_Model=new ProductModel();
		$row=$row_Model->get_rows_by_id($Id_product);
		require"view/template/product/edit.php";

	}
	function p_update_action()
	{
		$row_Model=new ProductModel();
		$row_Model->update_row_by_id();
		$rows =$row_Model->get_all_rows();
		require"view/template/product/admin.php";
	}
	function p_add_action()
	{
		$row_Model=new ProductModel();
		$row_Model->p_add_row();
		$rows =$row_Model->get_all_rows();
		//var_dump($rows);
		require 'view/template/product/admin.php';
	}
}