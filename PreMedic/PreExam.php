<?php
include_once('Patient.php');
class PreExam
{
    private $pre;
    private $count;
    function __construct()
    {
        $this->pre = array();
        $this->count = 0;
    }
    function addPatient($name, $code)
    {
        $patient = new Patient($name, $code);
        array_push($this->pre, $patient->showInfo());
        $this->count++;
    }
    function curePatient()
    {
        $patient = $this->pre[0];
        array_shift($this->pre);
        echo 'this patient with info ' . $patient . ' is cured<br/>';
    }
    function displayPre()
    {
        usort($this->pre, function($first,$second){
            return $first->number > $second->number;});
        foreach($this->pre as $key => $value){
            echo "$key: $value<br/>";
        }
        // echo implode(' , ', $this->pre);
    }
    // function cmp($a, $b)
    // {
    //     if ($a == $b) {
    //         return 0;
    //     }
    //     return ($a < $b) ? -1 : 1;
    // }
}
$prexam = new PreExam();
$prexam->addPatient('Smith', 5);
$prexam->addPatient('Jones', 4);
$prexam->addPatient('Fehrenbach', 6);
$prexam->addPatient('Brown', 1);
$prexam->addPatient('Ingram', 1);
$prexam->curePatient();
$prexam->displayPre();
    // $prexam->sortPre();
    // $prexam->displayPre();