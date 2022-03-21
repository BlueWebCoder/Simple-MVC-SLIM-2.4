<?php

# MODEL: HOME

class CustomerModel extends db{
		
	public function __construct(){
		
		 $this->db = new db;
	}

    public function getFirstName(){
		
		$resultats = $this->db->query("SELECT * FROM `customer` ORDER BY `id` DESC LIMIT 1");
		return $this->db->getResult();
    }
}

