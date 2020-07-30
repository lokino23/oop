<?php
class Ape extends Animal
{
    public $suara = "Auooo"

    function __construct($name)
    {
        $this->name = $name ;
    }
    function yell() 
    {
        echo$this->sounds;
    }
}