<?php
// check of student mark
$markOfStud=rand(30,99);
if($markOfStud >= 90){
    echo "Result : A $markOfStud";
}
if($markOfStud <= 90 && $markOfStud >= 89){
    echo "Result : B $markOfStud";
}
if($markOfStud <= 89 && $markOfStud >= 79){
    echo "Result : C $markOfStud";
}
if($markOfStud <= 79 && $markOfStud >= 69){
    echo "Result : C $markOfStud";
}
if($markOfStud <= 69 && $markOfStud < 50){
    echo "Result : Field $markOfStud";
}



?>