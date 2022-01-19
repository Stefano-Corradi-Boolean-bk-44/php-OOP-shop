<?php

require_once __DIR__ . "/User.php";
require_once __DIR__ . "/CreditCard.php";

class Customer extends User{

  private $card;
  private $cart;

  public function setCreditCard($_number,$_name, $_expired_date_m, $_expired_date_y, $_cvv){
    // se la generazione della carta di credito ristituisce un'eccezione stamp il messaggio
    try {
      $this->card = new CreditCard($_number,$_name, $_expired_date_m, $_expired_date_y, $_cvv);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  public function setCart(...$products){
    // prendendo i valori del rest $this->cart diventa un array
    $this->cart = $products;
  }

  public function getCreditCard(){
    return $this->card;
  }

  public function getCart(){
    // restituisco un array
    return $this->cart;
  }

}