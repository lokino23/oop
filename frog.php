<?php
    class frog extends Animal
    {
        public $jump ="hop hop";
        function __construct($name)
        {
            $this->name = $name ;
        }
        function yell() 
        {
            echo $this->jump ;

        }
    }