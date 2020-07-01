<?php
    class Stack{
        public $stack;
        public $limit;
        function __construct($stack, $limit)
        {
            $this->stack = [];
            $this->limit = 0;
        }
        function add($data){
            array_unshift($this->stack, $data);
            $this->limit++;
        }
        function remove(){
            array_shift($this->stack);
            $this->limit--;
        }
        function top(){
            print_r($this->stack[0]) ;
        }
        function countItem(){
            return $this->limit;
        }
        function isEmpty(){
            if ($this->countItem() == 0) echo 'this stack is empty';
            else echo 'this stack is not empty';
        }
        function display(){
            return $this->stack;
        }
    }
    $stack1 = new Stack([1,2,3], 10);
    $stack1->add(1);
    $stack1->add(2);
    $stack1->add(3);
    $stack1->add(4);
    $stack1->add(5);
    $stack1->remove();
    $stack1->remove();
    $stack1->remove();
    echo $stack1->countItem();
    $stack1->top();
    $stack1->isEmpty();
    echo "<pre>";
    print_r($stack1->display());
    echo "</pre>";
    