<?php

use FFI\Exception;

require_once __DIR__ . "/classes/Customer.php";
require_once __DIR__ . "/classes/CustomerPremium.php";
require_once __DIR__ . "/showcase.php";

$cliente = new Customer("Giuseppe", "Verdi");
$cliente->setCreditCard(987987987987,'Giuseppe Verdi',5,2023,987);
$cliente->route = "Via dei platani";
$cliente->town = "Milano";
$cliente->zip = 20100;
$cliente->Country = 'Italia';
$cliente->setCart($product1, $product3);



$cliente_premium = new CustomerPremium("Toto", "Cotugno");
$cliente_premium->setCreditCard(321321321321,'Toto Cotugno',5,2023,987);

var_dump($cliente);

foreach ($cliente->getCart() as $product) {
  echo "<br>" . $product->name;
}
//var_dump($cliente_premium);





?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHOP</title>
</head>
<body>
    <h1>SHOP</h1>
  
</body>
</html>