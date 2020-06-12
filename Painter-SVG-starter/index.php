<?php

//////////////////////////////
// Inclusion des dépendances /
//////////////////////////////

//premier test de la fonction autoloader

/*function autoload($classname){
    require 'class/'. $classname . '.php';
}
spl_autoload_register('autoload');*/

//test 2
 
 require 'autoload.php';
 include 'function.php';






///////////////////////
// Traitement PHP ici /
///////////////////////
$rect = genRectangle(10,50,100,50,'blue',1);
$square = genSquare(150,50,50,50,'red',1);
$circle = genCircle(300,30,15,"green",1);
$ellipse = genEllipse(150,120,20,10,"darkgoldenrod",1);
$triangle = genTriangle(500, 120, 350, 180, 600, 20, 'silver', 0.3);

////////////////////////////

// Création d'un second rectangle en utilisant la classe Rectangle
$objRect = new Rectangle();
$objRect->setLocation(100,250);
$objRect->setSize(50, 30);

// Création d'une seconde ellipse en utilisant la classe Ellipse
$objEllipse = new Ellipse();
$objEllipse->setLocation(450, 100);
$objEllipse->setRadius(45, 20);
$objEllipse->setColor('blue', 0.7);

// Création d'un second cercle en utilisant la classe Circle
$objCircle = new Circle();
$objCircle->setLocation(300, 250);
$objCircle->setRadius(120);
$objCircle->setColor('pink', 0.3);

// Création d'un second carré en utilisant la classe Square
$objSquare = new Square();
$objSquare->setLocation(550, 600);
$objSquare->setSize(60);
$objSquare->setColor('orange', 0.9);

// Création d'un second triangle en utilisant la classe Triangle
$objTriangle = new Triangle();
$objTriangle->setCoordinate(550, 600, 150, 12, 487, 96, 789, 48, 51, 520);
$objTriangle->setColor('orange', 0.9);

// CRéation d'un polygone avec la classe Polygon
$objPolygon = new Polygon();
$objPolygon->setPoints([150,200,522,54,144,300,63,587,452,100]);
$objPolygon->setColor('grey', 0.1);

// Construction du code SVG
//$svg = $svg.$rect; pour éviter de répéter $svg pour la concaténation on fait $svg.= $variable
$svg = '';
$svg .= $rect;
$svg .= $square;
$svg .= $ellipse;
$svg .= $circle;
$svg .= $triangle;
$svg .= $objSquare->draw();
$svg .= $objEllipse->draw();
$svg .= $objCircle->draw();
$svg .= $objRect->draw();
$svg .= $objTriangle->draw();
$svg .= $objPolygon->draw();


//////////////////////////////////////
// Affichage : inclusion du template /
//////////////////////////////////////
include 'index.phtml';