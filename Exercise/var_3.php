<?php
$int = 1;
echo $int,"<br/>";
$int = -12;
echo $int,"<br/>";
$int = 0x123;
echo $int,"<br/>";
$int = 0.001;
echo $int;
var_dump($int);
$float = 3e-2;
var_dump($float,$int);
echo '<br />';
$string="string";
var_dump($string);
$array=array();
var_dump($array);
$objecj = new stdClass();
var_dump($objecj);
$handle = fopen('test_2.php','r');
var_dump($handle);
var_dump($king);