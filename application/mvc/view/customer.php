<?php

$customer = new CustomerController;
$customers = $customer->getFirstName();

echo $customers['first_name'];
