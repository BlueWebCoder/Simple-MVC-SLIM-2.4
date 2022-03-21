<?php

 class Home{
	 
	public $db;
	
	public function __construct(){
		
		 $this->db = new db;
		
	}
	
	
	public function renderInfos(){
		echo 'toto';
	 }
															 
}

$this->app->render('home.php');
