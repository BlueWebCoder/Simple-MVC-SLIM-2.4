<?php

class CustomerController {

    public function __construct(){
		
        $this->customerModel = new CustomerModel;  
   }

   public function getAllValues(){

    return $this->customerModel->getAllValues();
   }
}
 
 $this->app->render('customer.php');
 
