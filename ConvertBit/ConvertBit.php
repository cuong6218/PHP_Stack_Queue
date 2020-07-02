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
        while ($value > 0) {
            array_push($this->stack, $value % 2);
            array_unshift($this->arr, $value % 2);
            $value = (int)($value / 2);
        }
    }
    function convertDec()
    {
        $result = 0;
        for ($i = 0; $i < count($this->arr); $i++) {
            $result += $this->stack[$i] * 2 ** $i;
        }
        echo 'Decimal is: ' . $result;
    }
    function displayStack()
    {
        print_r($this->stack);
    }
    function displayArr()
    {
        print_r($this->arr);
    }
    function displayBit()
    {
        echo 'Bit is: ';
        echo implode("", $this->arr);
    }
}
$stack1 = new StackBit();
$stack1->convertBit(256);
$stack1->displayBit();
echo '<br/>';
$stack1->displayStack();
echo '<br/>';
$stack1->displayArr();
echo '<br/>';
$stack1->convertDec();
