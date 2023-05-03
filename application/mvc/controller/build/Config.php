<?php

class Pages extends Controller {

     public function index(){
		require 'application/mvc/controller/index.php';
    }

	public function customer(){	
		require 'application/mvc/model/customer.php';       // New page exemple model
		require 'application/mvc/controller/customer.php';  // New page exemple controller
    }
} 
