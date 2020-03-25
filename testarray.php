<?php
$json='{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown" }}';

function printValues($arr) {
    global $count;
    global $values;
 
    if(!is_array($arr)){
        die("ERROR: Input is not an array");
    }
  
    foreach($arr as $key=>$value){
        if(is_array($value)){
            printValues($value);
        } else{
            echo $key.' : ';
            echo $value.' . ';
            echo '<br>';
        }
    }

    return array('total' => $count, 'values' => $values);
}
$arr = json_decode($json, true);
 

$result = printValues($arr);



?>