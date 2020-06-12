<?php
class Circle extends Ellipse{
  
    public function setRadius(int $radius, int $useless = null) {
        $this->xRadius = $radius;
        $this->yRadius = $radius;
    }

    
   

}