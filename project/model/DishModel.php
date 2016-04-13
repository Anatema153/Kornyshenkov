<?php
Class DishModel extends Dbh
{
	public function DishModel()
	{
		parent::Dbh('bludo');
	}
		
	public function update_row_by_id_dish()
	{
		$Id_bludo=$_REQUEST['Id_bludo'];
		$update_Bludo_name=$_REQUEST['update_Bludo_name'];		
		$update_Id_razdel=$_REQUEST['update_Id_razdel'];
		$update_Calorii=$_REQUEST['update_Calorii'];
		$update_Price=$_REQUEST['update_Price'];
		$sql ="UPDATE `bludo` SET `Bludo_name`=?,`Id_razdel`=?,`Calorii`=?,`Price`=? WHERE `Id_bludo`=?";		
		$stmt=$this->getDbh()->prepare($sql);
		$stmt->execute(array($update_Bludo_name,$update_Id_razdel,$update_Calorii,$update_Price,$Id_bludo));
	}
}

?>