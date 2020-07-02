<?php
include_once ('Patient.php');
    class PQueue{
        private $size;
        private $queue;
        function __construct($size)
        {
            $this->size = $size;
            $this->queue = array();
        }
        function isEmpty(){
            return empty($this->queue);
        }
        function addPatient($patient){
            array_push($this->queue, $patient);
        }
        function curePatient(){
            $patient = $this->queue[0];
            array_shift($this->queue);
            echo ('This patient name "'.$patient->name.'" is cured');
        }
        function display(){
            usort($this->queue, function($a, $b){
                if ($a->code == $b->code) return -1;
                return ($a->code > $b->code)? 1 : -1;
            });
            echo '<pre>';
            print_r($this->queue);
            echo '</pre>';
        }
    }
    $queue1 = new PQueue(10);
    $patient1 = new Patient('Smith', 1);
    $patient2 = new Patient('John', 2);
    $patient3 = new Patient('Conor', 8);
    $patient4 = new Patient('Cena', 5);
    $patient5 = new Patient('Catek', 4);
    $queue1 = new PQueue(10);
    $queue1->addPatient($patient1);
    $queue1->addPatient($patient2);
    $queue1->addPatient($patient3);
    $queue1->addPatient($patient4);
    $queue1->addPatient($patient5);
    $queue1->curePatient();
    $queue1->display();