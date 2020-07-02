<?php
// include_once ('../StackStructure/Stack.php');
class StackR
{
    private $arr;
    private $stack;
    function __construct($arr)
    {
        $this->arr = $arr;
        $this->stack = [];
    }
    function pushToStack($value)
    {
        array_unshift($this->stack, $value);
        array_shift($this->arr);
    }
    function popOutStack(){
        $value = $this->stack[0];
        array_shift($this->stack);
        array_push($this->arr, $value);
    }
    function displayStack(){
        echo '<pre>';
        print_r($this->stack);
        echo '</pre>';
    }
    function displayArr(){
        echo '<pre>';
        print_r($this->arr);
        echo '</pre>';
    }
}

$stackr = new StackR([1, 2, 3, 4, 5]);
$stackr->pushToStack(1);
$stackr->pushToStack(2);
$stackr->pushToStack(3);
$stackr->pushToStack(4);
$stackr->pushToStack(5);

$stackr->popOutStack();
$stackr->popOutStack();
$stackr->popOutStack();
$stackr->popOutStack();
$stackr->popOutStack();
$stackr->displayStack();
$stackr->displayArr();

