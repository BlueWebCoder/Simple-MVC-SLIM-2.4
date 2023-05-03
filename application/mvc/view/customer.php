<?php

// Exemple for a customer
$customer = new CustomerController;
$customers = $customer->getMyValueInDb();

?>

<p> <?= $customers['my_value']; ?> </p>
