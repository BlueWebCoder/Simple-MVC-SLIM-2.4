<?php

# MODEL: HOME

class CustomerModel extends db{      // Exemple page Customer 
		
	public function __construct(){
		
		 $this->db = new db;
	}

    public function getMyValueInDb(){
		$resultats = $this->db->query("SELECT * FROM `xxxxxxx` WHERE xxxxx ORDER BY `xx` DESC LIMIT xx");
		return $this->db->getResult();
    }
}

