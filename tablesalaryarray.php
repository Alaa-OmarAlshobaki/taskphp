<?php
echo "<h1>task 1 table salary</h1>";
echo "<hr>";
echo "<table border='1px'>";
echo "<tr>
     <td><h2>id</h2></td>
     <td><h2>name</h2></td>
     <td><h2>salary</h2></td>
     <td><h2>net salary</h2></td>
     </tr>";
   
      $myArray = array( array("id" => 1, "name" => "alaa" , "salary" => 600),
                 array("id" => 1, "name" => "wlaa" , "salary" => 700),
                 array("id" => 1, "name" => "hnaa" , "salary" => 200) 
    ); 
    printValues($myArray);
echo "</table>";


function printValues($arr) {
  
    if(!is_array($arr)){
        die("ERROR: Input is not an array");
    }
    echo "<tr>";
  
    foreach($arr as $key=>$value){
        if(is_array($value)){
            printValues($value);
        } else{     
            echo "<td>". $value."</td>";
        }
        if ($key ==='salary' ) {
            echo  "<td>";
            echo ($value-($value* 16) / 100 * 100 / 100) ;
            echo  "</td>";
        }
    }
    echo "</tr>"; 
}
echo "<hr>";
echo "<h1>task2</h1>";
echo "<p>1-​​Write a PHP script which decodes the following JSON string. Sample JSON code :</p>";
$json='{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown" }}';

function printValues2($arr) {
    global $count;
    global $values;
 
    if(!is_array($arr)){
        die("ERROR: Input is not an array");
    }
  
    foreach($arr as $key=>$value){
        if(is_array($value)){
            printValues2($value);
        } else{
            echo $key.' : ';
            echo $value.' . ';
            echo '<br>';
        }
    }

    return array('total' => $count, 'values' => $values);
}
$arr = json_decode($json, true);
 

$result = printValues2($arr);


echo "<hr>";
echo "<h1>task3</h1>";
echo "<p>2-​​Write a PHP script to sort the following associative array :<br>ascending order sort by value</p>";

$array= array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($array);
foreach($array as $key=>$value){
    echo "age of $key : $value <br>";

}
echo "<p>ascending order sort by Key:</p>";
krsort($array);
foreach($array as $key=>$value){
    echo "age of $key : $value <br>";

}
echo "<p>descending order sorting by Value :</p>";

arsort($array);
foreach($array as $key=>$value){
    echo "age of $key : $value <br>";

}
echo "<p>descending order sorting by Key :</p>";

krsort($array);
foreach($array as $key=>$value){
    echo "age of $key : $value <br>";

}
echo "<hr>";
echo "<h1>task4</h1>";
echo "<p>​Write a PHP script to calculate and display average temperature, five lowestand highest temperatures.</p>";
$tem=" 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$tem_array=explode(',', $tem);
$count_array=count($tem_array);
$sum_array=0;
foreach($tem_array as $tem){
    $sum_array+=$tem;
}
$avg_arr=$sum_array/$count_array;
echo "avg array : $avg_arr";
echo "<br>";
echo "low temp:";
sort($tem_array);
for($i=1;$i<=5;$i++){
    echo $tem_array[$i] . " , ";
}
echo "<br>";
echo "high temp :";
// arsort($tem_array);
for($j=($count_array-5); $j<=$count_array ;$j++){
    echo $tem_array[$j] . " , ";

}

echo "<hr>";
echo "<h1>task5</h1>";
echo "<p>​Write a php variable to calculate occurrences of value in array</p>";
$alph="a,b,c,d,a,a,a,b,b,d,d,c,c,c,c";
$alph_arr=explode(',',$alph);
array_count_values($alph_arr);
echo "<pre>";
print_r($alph_arr);
echo "</pre>";
$arr = array("a","b","c","d","a","a","a","b","b","d","d","c","c","c","c");
print_r(array_count_values($arr));

echo "<hr>";
echo "<h1>task 6</h1>";
echo "<p>make script to make password generator from existing array contains these:</p>";

    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 32; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    echo "password :<h3>". implode($pass). "</h3>"; //turn the array into a string

?>

