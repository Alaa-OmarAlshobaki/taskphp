<?php
function checkbig($num1,$num2){
   if($num1>$num2){
       echo "the bigest : ". $num1;
   }else{
       echo "the bigest : ". $num2;
   }
}
checkbig(5,10);
echo "<br>";


function factorial($number) { 
 
    if ($number < 2) { 
        return 1; 
    } else { 
        return ($number * factorial($number-1)); 
    } 
}
 
echo factorial(5);
echo "<br>";

function strongPass($password){
   

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
if(strlen($uppercase) <2 && strlen($lowercase) <2 && strlen($number)<2 && strlen($specialChars)<2 ) {
    echo 'Password  should include at least 2 upper case letter, 2 number, and 2 special character.';
}
}
echo "strong pass";
}
strongPass("bdpp88@@ppo");


?>