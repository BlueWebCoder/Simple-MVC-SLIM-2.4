<?php

class Pages extends Controller {

     public function index(){
		require 'application/mvc/controller/index.php';
    }

	public function customer(){	
		require 'application/mvc/model/customer.php';
		require 'application/mvc/controller/customer.php';
    }
} 