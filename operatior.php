<?php
$a=10;
$b=2;
$c=$a+$b;
$d=$a-$b;
$e=$a*$b;
$f=$a/$b;
$g=$a%$b;
$h=$a**$b;

echo "the sum of $c ";
echo "\n";
echo "the sum is $d";
echo "\n";
echo "the sum is $e";
echo "\n";
echo "the sum is $f";
echo "\n";
echo "the sum is $g";
echo "\n";
echo "the sum is $h";
//assignment
$a1=11;
$b1=11;
echo"\n Assignment opr";
$c1=1;
$c2=2;
echo "\n a1 += b1 is ".$a1+=$b1;
echo "\n a1 -= b1 is ".$a1-=$b1;
echo "\n a1 *= b1 is ".$a1*=$b1;
echo "\n a1 /= b1 is ".$a1/=$b1;
echo "\n a1 %= b1 is ".$a1%=$b1;
echo "\n a1 == b1 is $c1==$a1";
echo "\n value after &= ".($a1&=$b1);
// com opr
echo "\n com opr";
$x = 10;
$y = 20;
if($x == $y){
    echo "\n true";
}
else{
    echo "\n false";
}
if($x === $y){
    echo "\n true";
}
else{
    echo "\n false";
}
if($x != $y){
    echo "\n true";
}
else{
    echo "\n false";
}
if($x !== $y){
    echo "\n true";
}
else{
    echo "\n false";
}
if($x > $y){
    echo "\n true";
}
else{
    echo "\n false";
}
if($x < $y){
    echo "\n true";
}
else{
    echo "\n false";
}
if($x >= $y){
    echo "\n true";
}
else{
    echo "\n false";
}
if($x <= $y){
    echo "\n true";
}
else{
    echo "\n false";
}

// inc and dec opr
echo "\n inc and dec opr";
echo ++$x;
echo "\n";
echo $x++;
echo "\n";
echo --$x;
echo "\n";
echo $x--;
//log 
echo "\n log opr";
$x = true;
$y = false;
echo "\n x and y is ".($x and $y);

?>