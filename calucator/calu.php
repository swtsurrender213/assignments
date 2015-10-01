<?php

class calculator {
	
    public $num1;
	public $num2;

    public function __construct($num1, $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

	
    public function add(){
        return $this->num1 + $this->num2;
    }

    public function subtract(){
        return $this->num1 - $this->num2;
    }

    public function multiply (){
        return $this->num1 * $this->num2;
    }

    public function divide () {
        return $this->num1 / $this->num2;
    }
	

}// end of class

$calc = new calculator(3,4);


echo "<p>3 + 4 = ".$calc->add(). "</p>";

$calc = new calculator (15,12);
echo "<p>15 - 12 = ".$calc->subtract(). "</p>";

$calc = new calculator (20,2);
echo "<p> 20 * 2 = ".$calc->multiply(). "</p>";

$calc = new calculator (20,8);
echo "<p> 20 / 2 = ".$calc ->divide(). "</p>";