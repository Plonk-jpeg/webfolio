<?php
class Database {
	protected $connect;
	protected $servername = 'localhost';
	protected $username = 'u152013123_voz_admin';
	protected $password = '5psTJ5uF3UH94iZvm7bk3HE7';
	protected $dbname ='u152013123_art';
	public function __construct(){
		try{
			$this->connect = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username, $this->password);
			$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			echo "Erreur : " . $e->getMessage();
		}
	}
	public function getConnect() {
  		return $this->connect;
	}
}
