<?php
 class Point{
    protected $x;
    protected $y;

    public function __construct(){
        $this -> x =$x = 10;
        $this -> y =$y = 10;

    }

    public function getX(){
         return $this -> x ;
    }

    public function getY(){
        return $this -> y ;
   }

   function moveTo(int $x,int $y){
    $this -> x =$x ;
    $this -> y =$y ;
   }



 }