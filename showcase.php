<?php 
    require_once __DIR__ . "/classes/Product.php";
    
    $product1=new Product;
    $product1->name=("Iphone12");
    $product1->ean=(65465165);
    $product1->price=(1300);
    $product1->description=("telefono che costa fin troppo");
    
    $product2=new Product;
    $product2->name=("Rowenta Powe XXL");
    $product2->price=(120);
    $product2->ean=(16516514);
    $product2->description=("per chi non si accontenta!");

    $product3=new Product;
    $product3->name=("Samsung Galaxy 12");
    $product3->price=(900);
    $product3->ean=(68465186);
    $product3->description=("uno dei pochi che ha un prezzo onesto");