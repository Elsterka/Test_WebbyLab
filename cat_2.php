<?php
class Animal {
 
    public $any_name;
 
    public function __construct($name) {
        $this->any_name = $name;
    }
}
 
class Cat extends Animal {
    
    public function __construct($name) {
        parent::__construct($name);
        echo "Cat $name is saying meow";
    }
 
}
 
$cat = new Cat('Garfield');
