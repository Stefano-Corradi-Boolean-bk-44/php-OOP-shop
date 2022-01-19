<?php

require_once __DIR__ . "/Address.php";

class User {

  // tutte le proprietà e i i metodi del trait Address diventano metodi e proprietà della classe User
  use Address;

  // proprietà
  private $name;
  private $lastname;
  private $age;
  protected $discount = 0;
  public $email;
  private static $counter = 0;

  // CONSTRICTOR
  function __construct($_name, $_lastname)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
    // con self:: accedo a una proprietà statica
    self::$counter++;
  }

  // SETTER
  public function setName($_name){
    $this->name = $_name;
  }

  public function setDiscount($_discount){
    // prima faccio i controlli e poi inserisco..... 
    // ... controlli ....
    $this->discount = $_discount;
  }

  public function setLastname($_lastname){
    $this->lastname = $_lastname;
  }

  public function setAge($_age){
    if(is_int($_age)) {
      $this->age = $_age;
      return true;
    }
    return false;
  }

  // GETTER
  public function getName(){
    return $this->name;
  }

  public function getLastname(){
    return $this->lastname;
  }

  public function getDiscount(){
    return $this->discount;
  }

  public function getFullName(){
    return "$this->name $this->lastname";
  }

  public static function getCounter(){
    return static::$counter;
  }

}