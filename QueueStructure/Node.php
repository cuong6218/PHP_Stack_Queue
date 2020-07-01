<?php
    class Node{
        public $value;
        public $next;
        function __construct($value)
        {
            $this->value = $value;
            $this->next = NULL;
        }
        public function getNode(){
            return $this->value;
        }
    }