<?php

# MODEL: CUSTOMER

class CustomerModel extends db{      // Exemple page Customer 
		
	public function __construct(){
		
		 $this->db = new db;
	}

    public function getAllValues(){
		$query = $this->db->query("SELECT * FROM `xxxxxxx` ORDER BY `xx` DESC LIMIT xx");
		return $query->getResult();
    }
}

