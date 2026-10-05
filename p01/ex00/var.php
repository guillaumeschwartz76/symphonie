<?php

$variable = "hello";
$a = 10;
$b = "10";
$c = "ten";
$d = 10.0;

// . concatene des chaines + attention "" entre ''
echo "a contains : $a", " and has type : " . gettype($a) . "\n";
echo "b contains : $b", " and has type : " . gettype($b) . "\n";
echo "c contains : ", $c, " and has type : ", gettype($c), "\n";
echo "d contains : ", $d, " and has type : ", gettype($d), "\n";

?>