<?php


class CreditCard{

  private $number;
  private $name;
  private $cvv;
  private $expired_date_m;
  private $expired_date_y;

  function __construct($_number,$_name, $_expired_date_m, $_expired_date_y, $_cvv)
  {
    // controllo la validità del numero prima dellinserimento
    $this->number = $this->checkValidNumber($_number);
    $this->name = $_name;
    // controllo la validità della data prima dellinserimento
    $this->cvv = $this->checkCvv($_cvv);
    // controllo la validità della data prima dellinserimento
    $this->checkValidExiredDate($_expired_date_y,$_expired_date_m);
    $this->expired_date_m = $_expired_date_m;
    $this->expired_date_y = $_expired_date_y;
  }

  /*********************** 
   SETTER
  ***********************/

  // verificare sempre se occorre un controllo di validità quendo viene inserito il dato

  public function setNumber($_number){
    $this->number = $this->checkValidNumber($_number);
  }
  public function setName($_name){
    $this->name = $_name;
  }
  public function setExipredMounth($_m){
    $this->checkValidExiredDate($this->expired_date_y,$_m);
    $this->expired_date_m = $_m;
  }
  public function setExpiredYear($_y){
    $this->checkValidExiredDate($_y,$this->expired_date_m);
    $this->expired_date_y = $_y;
  }

  /*********************** 
   GETTER
  *************************/
  public function getNumber(){
    return $this->number;
  }
  public function getName(){
    return $this->name;
  }
  public function getExpiredMounth(){
    return $this->expired_date_m;
  }
  public function getExpiredYear(){
    return $this->expired_date_y;
  }


  private function checkValidNumber($number){

    // controllo la validità del dato
    //se non è corretto blocco l'inserimento
    if(!is_int($number) || strlen($number) != 12){
      throw new Exception('Numero carta di credito non valido');
    }
    // se è tutto ok restituisco il dato
    return  $number;
  }


  /*********************** 
   PRIVATE
  *************************/
  private function checkCvv($cvv){

    // controllo la validità del dato
    //se non è corretto blocco l'inserimento
    if(!is_int($cvv) || strlen($cvv) != 3){
      throw new Exception('Numero CVV non valido');
    }
    // se è tutto ok restituisco il dato
    return  $cvv;
  }

  private function checkValidExiredDate($y,$m){
    // settare la data di oggi
    $today = date("Y-n-j");

    // verifico la validità della data inserita
    // controllo se sono numeri
    if(!is_int($y) || !is_int($m)){
      throw new Exception('Mese e anno devono essere dei numeri');
    }
    if($m > 12 || $m < 1){
      throw new Exception('Mese non valido');
    }
    // controlle se la data esiste
    $expired_date = $this->generateExpiredDate($y, $m);

    // è valida se la data della carta è uguale o superiore a quella di oggi
    if($today >= $expired_date){
      throw new Exception('Carta di credito scaduta');
    }
  }

  private function generateExpiredDate($y, $m){
    $m_exp = $m + 1;
    $y_exp = $y;

    if($m_exp > 12){
      $m_exp = 1;
      $y_exp = $y + 1;
    }

    if(!checkdate($m_exp,1,$y_exp)){
      throw new Exception('La data non è valida');
    }

    return date("$y_exp-$m_exp-1");
  }


}