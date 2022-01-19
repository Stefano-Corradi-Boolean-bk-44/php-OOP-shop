<?php 

    class Product {

        public $name;
        public $ean;
        public $price;
        public $description;

        public function getInfoProduct(){
            
            return "<ul><li> Nome Prodotto : " . $this->name ."</li> <li> Ean: " . $this->ean ."</li> <li> Prezzo: " . $this->price ."€ </li> <li> Descrizione: " . $this->description . "</li></ul>";
    
        }
    }