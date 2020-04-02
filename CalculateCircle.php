<?php

$Circle1 = new Circle(); // Creates object "$Circle1" from class "Circle"
$Circle1->setRadius(); // Calls method "setRadius()" so object is encapsulated. 
$Circle1->calculateArea(); // Calls method "calculateArea()". 
$Circle1->calculateCircumference(); // Calls method "calculatePerimeter". 

class Circle { // Creating class called "Circle" 

    private $_circRadius; // Created variable to store the radius - got from HTML Program
    private $_circArea; // Variable to store the area (Area = R^2 * PI)
    private $_cirCircumference; // Variable to store the circumference (Circum. = 2*R*PI)


    public function setRadius() {
        $this->_circRadius = $_POST["Radius"]; // Gets the Radius from the HTML program and stores in "_circRadius". 
        echo("The radius of the circle is: ".$this->_circRadius); // Outputs the Radius to the console. 
        echo("<br>");   
    }

    public function calculateArea(){
        $this->_circArea = M_PI * pow($this->_circRadius ,2); // Calculates the Area and stores in "_circArea"
        echo("The area of the circle is: " .$this->_circArea); // Outputs to the console.
        echo("<br>");
    }

    public function calculateCircumference(){
        $this->_cirCircumference = M_PI * ($this->_circRadius * 2); // Calculates the Circumference and stores in "_circCircumference"
        echo("The perimeter of the circle is: " .$this->_cirCircumference); // Outputs to the console. 
        echo("<br>");
    }
}
?>