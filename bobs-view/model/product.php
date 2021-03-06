<?php

 class Product{
    private $name; //name of input for the form
    private $desc;
    private $price;
    private $quantity;

    public function __constructor(){
      $quantity = 0;
    }

    public function instantiate($desc, $price, $name){
      $this->desc = $desc;
      $this->price = $price;
      $this->name = $name;
    }

    public function __get($fieldName){
      return $this->$fieldName;
    }

    public function __set($fieldName, $fieldValue){
      $this->$fieldName = $fieldValue;
    }
}

?>
