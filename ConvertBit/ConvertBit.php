<?php
class StackBit
{
    public $stack;
    public $arr;
    function __construct()
    {
        $this->stack = [];
        $this->arr = [];
    }
    // function ModNumber($value)
    // {
    //     $result = $value % 2;
    //     return $result;
    // }
    function convertBit($value)
    {
        while ($value > 1) {
            array_push($this->stack,$value%2);
            array_unshift($this->arr,$value%2);
            $value = $value/2;
        }
    }
    function convertDec(){
        $result = 0;
        for ($i = 0; $i < count($this->arr); $i++){
            $result += $this->stack[$i]*2**$i;
        }
        return $result;
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
    function displayBit()
    {
        echo implode("", $this->arr);
    }
}
$stack1 = new StackBit();
$stack1->convertBit(357);
$stack1->displayBit();
$stack1->displayStack();
$stack1->displayArr();
echo $stack1->convertDec();

