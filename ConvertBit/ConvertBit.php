<?php
class StackBit
{
    public $stack;
    function __construct()
    {
        $this->stack = [];
    }
    // function ModNumber($value)
    // {
    //     $result = $value % 2;
    //     return $result;
    // }
    function convertBit($value)
    {
        while ($value > 1) {
            array_unshift($this->stack,$value%2);
            $value = $value/2;
        }
    }
    function convertDec($value){

    }
    function displayBit()
    {
        echo implode("", $this->stack);
    }
}
$stack1 = new StackBit();
$stack1->convertBit(357);
$stack1->displayBit();
// $a = 2;
// $c = exp()
