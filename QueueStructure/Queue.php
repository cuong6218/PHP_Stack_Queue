<?php
include_once ('Node.php');
    class Queue{
        private $front;
        private $back;
        function __construct()
        {
            $this->front = NULL;
            $this->back = NULL;
        }
        function isEmpty(){
           if ($this->front == NULL) return false;
           else return true;
        }
        function enQueue($data){
            $node = new Node($data);
            if ($this->back == NULL) {
                $this->front = $this->back = $node;
                return;
            }
            $this->back->next = $node;
            $this->back = $node;
        }
        function deQueue(){
            if ($this->front == NULL) return;
            // $node = $this->front;
            $this->front = $this->front->next;
            if ($this->front == NULL) $this->back = NULL;
            // $node = NULL;
        }
        function display(){
            $queue = array();
            $current = $this->front;
            while ($current != NULL){
                array_push($queue, $current->getNode());
                $current = $current->next;
            }
            return $queue;
        }
}
$que1 = new Queue();
$que1->enQueue('Start');
$que1->enQueue(1);
$que1->enQueue(2);
$que1->enQueue(3);
$que1->enQueue(4);
$que1->enQueue('End');
$que1->enQueue('5');
$que1->deQueue();

echo implode('--', $que1->display());