<?php

require_once __DIR__ . "/Customer.php";

class CustomerPremium extends Customer{

  function __construct($_name, $_lastname)
  {
    parent::__construct($_name, $_lastname);
    $this->discount = 20;
  }

}