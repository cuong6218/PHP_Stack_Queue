<?php
    class Patient{
        public $name;
        public $code;
        function __construct($name, $code)
        {
            $this->name = $name;
            $this->code = $code;
        }
        function showInfo(){
            return $this->name.' - '.$this->code;
        }
        // function showCode(){
        //     return $this->code;
        // }
    }