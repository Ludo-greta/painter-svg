<?php

abstract  class  Shape {
   protected $location;
    protected $color;
    protected $opacity;

    public function __construct(){
        
        $this -> color='red';
        $this -> opacity;
        $this -> location = new Point();
        
    }
    public function setLocation(int $x,int $y){

        $this -> location -> moveTo($x,$y);
        

    }

    public function setColor(string $color,float $opacity){
        $this -> color = $color;
        $this -> opacity = $opacity;
    }


    abstract public function draw();
}