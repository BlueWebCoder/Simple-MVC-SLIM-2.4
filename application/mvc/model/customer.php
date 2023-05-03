<?php

# MODEL: CUSTOMER

class CustomerModel extends db{      // Exemple page Customer 
		
	public function __construct(){
		
		 $this->db = new db;
	}

    public function getAllValues(){
		$result = $this->db->query("SELECT * FROM `xxxxxxx` ORDER BY `xx` DESC LIMIT xx");
		return $this->db->getResult();
    }
}

