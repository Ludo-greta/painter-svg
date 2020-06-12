<?php
class Polygon extends Shape {
  private $points;
  

  public function __construct() {
    parent::__construct();

    $this->points = [];
    }

  public function setPoints(array $points) {
    $this->points = $points;
    }

    public function setColor(string $color,float $opacity){
        $this -> color = $color;
        $this -> opacity = $opacity;
    }


    function draw(){
        return '<polygon points ="' . implode(' ', $this->points) .'"fill= "' . $this -> color . '"oppacity="'.  $this -> opacity . '"/>'; 
    }
}