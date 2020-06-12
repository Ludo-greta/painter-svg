<?php
class Rectangle extends Shape{
    protected $width;
    protected $height;

    public function __construct(){
        parent::__construct();
        $this -> width;
        $this -> height;
    }

    public function setSize(int $width,int $height){
        $this -> width = $width;
        $this -> height = $height;
    }


    public function draw(){
        return '<rect x= "'. $this -> location -> getX(). '" y= "' . $this -> location -> getY()  . '" width="' . $this -> width . '" height="' . $this -> height . '" fill="' . $this -> color . '" opacity="' .  $this -> opacity . '"/>' ;
    }

}
