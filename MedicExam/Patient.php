<?php
    class Patient{
        public $name;
        public $code;
        function __construct($name, $code)
        {
            $this->name = $name;
            $this->code = $code;
        }
        function getName(){
            return $this->name;
        }
        function getCode(){
            return $this->code;
        }
    }