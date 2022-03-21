<?php

class CustomerController {

    public function __construct(){
		
        $this->customerModel = new CustomerModel;  
   }

   public function getFirstName(){

    return $this->customerModel->getFirstName();
   }
}
 
 $this->app->render('customer.php');
 
