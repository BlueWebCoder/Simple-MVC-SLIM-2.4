<?php

// Exemple for a customer
$customer = new CustomerController;
$customers = $customer->getAllValues();

?>

<p> <?= $customers['my_value']; ?> </p>
