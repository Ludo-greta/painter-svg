<?php
class Square extends Rectangle{
    

    public function __construct(){
        parent::__construct();
       
     
    }

    public function setSize(int $size,int $useless=null){
        $this -> size= $size;
    }


   
    

    public function draw(){
        return '<rect x= "'.  $this -> location -> getX(). '" y= "' . $this -> location -> getY()  . '" size="' . $this -> size . '" fill="' . $this -> color . '" opacity="' .  $this -> opacity . '"/>' ;
    }

}