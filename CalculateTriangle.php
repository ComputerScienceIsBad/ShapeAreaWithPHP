<?php

$Triangle1 = new Triangle();
$Triangle1->setBase();
$Triangle1->setHeight();
$Triangle1->calculateArea();
$Triangle1->calculatePerimeter();

class Triangle {

    private $_triBase; // Variable declared to store Base from HTML program.
    private $_triHeight; // Variable declared to store Height from HTML program.
    private $_triArea; // Variable declared to store the Area (A=0.5*B*H)
    private $_triPerimeter; // Variable declared to store the Perimeter (P=B + )


    public function setBase() {
        $this->_triBase = $_POST["Base"]; // Gets base from HTML program and stores in "_triBase". 
        echo("The base of the triangle is: ".$this->_triBase); // Outputs the base to the console.
        echo("<br>");   
    }

    public function setHeight() {
        $this->_triHeight = $_POST["Height"]; // Gets the Height from HTML program and stores in "_triHeight". 
        echo("The height of the triangle is: ".$this->_triHeight); // Outputs the height to the console. 
        echo("<br>");
    }

    public function calculateArea(){
        $this->_triArea = (($this->_triBase * $this->_triHeight) / 2); // Calculates the area and stores in _triArea. 
        echo("The area of the triangle is: " .$this->_triArea); // Outputs the area to console. 
        echo("<br>");
    }

    public function calculatePerimeter(){
        $this->_triPerimeter = $this->_triBase + (sqrt((pow($this->_triBase , 2)) + (4*(pow($this->_triHeight ,2))))); // Calculates the perimeter and stores in "_triPerimeter"
        echo("The perimeter of the triangle is: " .$this->_triPerimeter); // Outputs the perimeter to the console.
        echo("<br>");
    }
}
?>