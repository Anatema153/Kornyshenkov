<?php
Class Dbh
{
	private $dbh;
	private $table;
	private $user ="restoran";
	private $pass ="restoran";
	private $db ="restoran";
	private $charset ="UTF8";
	private $host ="localhost";

	public function Dbh($table)
	{
		$this->table=$table;
		$dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
		$opt = array(
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		);
		try
		{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $opt);
		}
		catch(Exception $e)
		{
			echo"error!";
		}

	}
	public function getDbh()
	{
		return $this->dbh;
	}

	public function get_all_rowsd()
	{
		$sql="SELECT * FROM recept";

		$stmt=$this->getDbh()->query($sql);
		$rowsd = array();
		while ($row =$stmt-> fetch())
		{
			$rowsd[]=$row;
		}

		return $rowsd;
	}
	public function get_all_rows()
	{
		$sql="SELECT * FROM ".$this->table;

		$stmt=$this->getDbh()->query($sql);
		$rows = array();
		while ($row =$stmt-> fetch())
		{
			$rows[]=$row;
		}

		return $rows;
	}
	public function get_rows_by_id($Id_product)
	{
		$sql="SELECT * FROM ".$this->table." WHERE Id_product=?";//запрос в sql
		$stmt = $this->getDbh()->prepare($sql);//подготавливает места для перменных
		$stmt->execute(array($Id_product));//присваевает соответсвующие значение перменных в соответсвующие(подготоваленные)места
		$row = $stmt->fetch();
		return $row;
	}
	public function get_rows_by_id_dish($Id_bludo)
	{
		$sql="SELECT * FROM ".$this->table." WHERE Id_bludo=?";//запрос в sql
		$stmt = $this->getDbh()->prepare($sql);//подготавливает места для перменных
		$stmt->execute(array($Id_bludo));//присваевает соответсвующие значение перменных в соответсвующие(подготоваленные)места
		$row = $stmt->fetch();
		return $row;
	}
	public function delete_rows($Id_product)
	{
		$sql = "DELETE FROM ".$this->table." WHERE Id_product= ?";
		$stmt=$this->getDbh()->prepare($sql);
		$stmt->execute([$Id_product]);
		return;
	}

}