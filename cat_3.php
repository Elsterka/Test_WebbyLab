<?php
class Animal {
 
    public $any_name;
 
    public function getName($name) {
        return $this->any_name = $name; 
    }
 
}
 
class Cat extends Animal {
    
    public function meow($name) {
        parent::getName($name);
        print "Cat $name is saying meow";
    }
 
}
 
$cat = new Cat();
$cat->meow('Garfield');
