<?php
$a=10;
$b=20;
$exp1=true;
echo $exp1 ? "true" : "false";
echo "\n";
echo $a>$b ? "a is greater" : "b is greater";
echo "\n";
//null coalesciing
echo $status= $user??'anonymous';
echo "\n";
$user="kartik";
echo $status= $user?? 'anonymous';
$input=readline("Enter your name: ");
$input1=trim(fgets(STDIN));
echo "\n You entered ".$input;
echo "\n You entered ".$input1;
?>