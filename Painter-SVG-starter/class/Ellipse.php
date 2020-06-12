<?php
class Ellipse extends Shape {

    // Déclaration des propriétés avec leur visibilité, la plupart du temps, private
    protected $xRadius;
    protected $yRadius;

    /**
     * Déclaration d'un constructeur (méthode magique) pour initialiser nos propriétés
     */ 
    public function __construct() {
        parent::__construct();
        $this->xRadius = 10;
        $this->yRadius = 5;
    }

    /**
     * Création de 3 méthodes dites "setters" pour modifier 
     * depuis l'extérieur la valeur des propriétés privées 
     * et donc non accessibles directement deûis l'extérieur
     */ 

    public function setRadius(int $xRadius, int $yRadius) {
        $this->xRadius = $xRadius;
        $this->yRadius = $yRadius;
    }

    /**
     * Création de la balise SVG
     */
    public function draw(): string {
        return '<ellipse cx="'. $this -> location -> getX(). '" y= "' . $this -> location -> getY().'" rx="'.$this->xRadius.'" ry="'.$this->yRadius.'" fill="'.$this->color.'" opacity="'.$this->opacity.'" />';
    }
}