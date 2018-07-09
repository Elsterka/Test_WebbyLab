<?php
class Animal {
    
    public $any_name;
 
    public function __construct($name) {
        $this->any_name = $name;
    }
 
    public function getName() {
        return $this->any_name; 
    }
 
}
 
class Cat extends Animal {
    
    public function meow() {
        $catname = $this->getName();
        return "Cat $catname is saying meow";
    }
 
}
 
$cat = new Cat('Garfield');
echo $cat->meow();
