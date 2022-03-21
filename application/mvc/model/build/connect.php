<?php

	class Db{
		
	  private $host   = 'localhost';
	  private $dbName = 'test_stych';
	  private $user   = 'root';
	  private $pass   = ''; 
	  private $dbh;
	  private $error;
	  private $stmt;
	  
	  public function __construct(){
		  //dsn for mysql
		$dsn = "mysql:host=".$this->host.";dbname=".$this->dbName;
		$options = array(
			PDO::ATTR_PERSISTENT    => true,
			PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
			);
		
		try{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
			$this->dbh->exec("set names utf8"); //evite les probleme d'encodage type points d'interrogation 
		}
		//catch any errors
		catch (PDOException $e){
			$this->error = $e->getMessage();
		}
		
	  }
	  
	  public function query($query){
		  $this->stmt = $this->dbh->prepare($query);
		  return $this->stmt->execute();
	}
	
	  public function getResult(){
		  
		  return $this->stmt->fetch(PDO::FETCH_ASSOC);
	  }
	  
	  public function getAllResults(){
		  
		  return $this->stmt->fetchAll();
	  }
	  
	  public function closeCursor(){
		   return $this->stmt->closeCursor();
	  }
}
  ?>