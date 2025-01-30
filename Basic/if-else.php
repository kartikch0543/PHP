<?php
$t=10;
$a=10;
$b=20;
if($a<"20"){
    echo "Have agood day";
}
else{
    echo "Good Night";
}
$t=6;
if($t<"10"){
    echo "Good Mornig!!!!!!";
}   
elseif($t<"20"){
    echo "Good Afternoon";
    
}
else{
    echo "Good night";
}
echo "\n";
//Switcch case
//vowel or consonant
$char="a";
switch($char){
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        echo "Vowel";
        break;
    default:
        echo "Consonant";
}
?>