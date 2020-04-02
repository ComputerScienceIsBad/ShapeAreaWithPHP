<?php

$Rectangle1 = new Rectangle(); // Creates the object "$Rectangle1", which has all the properties of class "Rectangle".
$Rectangle1->setWidth(); // Calls the method "setWidth", which is so the object is encapsulated. 
$Rectangle1->setLength(); // Calls method "setLength"
$Rectangle1->calculateArea(); // Calls method "calculateArea", which uses the $_POST - the variables from the HTML code. 
$Rectangle1->calculatePerimeter(); // Calls method "calculatePerimeter" which uses the $_POST - the variables sent over from the HTML program. 

// Creating the class, so the variables and models can be stored. 
class Rectangle {

    private $_rectLength; // Variable to store Length
    private $_rectWidth; // Variable to store Width
    private $_rectArea; // Variable to store Area
    private $_rectPerimeter; // Variable to store Perimeter


    public function setLength() { 
        $this->_rectLength = $_POST["Length"]; // Gets the length from the HTML program and stores in "_rectLength"
        echo("The length of the rectangle is: ".$this->_rectLength); // Outputs the length to the console
        echo("<br>");
    }


    public function setWidth() {
        $this->_rectWidth = $_POST["Width"]; // Gets the width from the HTML program and stores in "_rectWidth"
        echo("The width of the rectangle is: ".$this->_rectWidth);  // Outputs the width to the console
        echo("<br>");   
    }


    public function calculateArea(){
        $this->_rectArea = $this->_rectLength * $this->_rectWidth; // Gets the area from multiplying "_rectWidth" and "_rectLength"
        echo("The area of the rectangle is: " .$this->_rectArea); // Outputs the area to the console
        echo("<br>");
    }


    public function calculatePerimeter(){
        $this->_rectPerimeter = (2 * $this->_rectLength) + (2 * $this->_rectWidth); // Gets the perimeter from multiplying "_rectWidth" by two, "_rectLength" by two, and adding. 
        echo("The perimeter of the rectangle is: " .$this->_rectPerimeter); // Outputs the perimeter to the console
        echo("<br>");
    } 
}
?>