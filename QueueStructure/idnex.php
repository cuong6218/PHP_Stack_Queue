<?php
include_once ('Queue.php');
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
