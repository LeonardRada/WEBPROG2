<?php
class Person{
 public $name;
 protected $age;
 private $address;

 public function introduce(){
   echo '<p>Hello, I am '.$this->name.'</p>';
 }

 public function __construct(){
   echo '<p>Person Constructed!</p>';
 }

 public function setAge($age){
   $this->age = $age;
 }

 public function __get($fieldName){
   return $this->$fieldName;
 }

 public function __set($fieldName, $fieldValue){
   $this->$fieldName = $fieldValue;
 }

 public function getAge(){
   return $this->age;
 }
}
 ?>
