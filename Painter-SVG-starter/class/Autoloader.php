<?php
class Autoloader{

  static  function autoload($classname){
        require 'class/'. $classname . '.php';
    }

   static function register(){
        spl_autoload_register([__CLASS__,'autoload']);
    }
}
