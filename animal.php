<?php
class Animal{
    public $cry = "bowbow!";
    function bow(){
        echo $this->cry. PHP_EOL;
    }
}

class cat extends Animal{
public $cry = "にゃー";
}
    
    
$animal1_1= new cat();
$animal1_1->bow();
?>

