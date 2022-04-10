<?php

//Controller temporario
$i1 = DateInterval::createFromDateString('9 hours');
$i2 = DateInterval::createFromDateString('6 hours');

$r1 = sumIntervals($i,$i2);

print_r($r1);