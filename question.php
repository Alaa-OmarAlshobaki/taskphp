<?php
// task 1+2
// print even and odd num
echo "<h1>task1+2</h1>";
for($i=1;$i<=100;$i++){
    if($i%2 == 0){
        echo "even num $i</br>";
    }else if($i%2 == 1){
        echo "odd num $i";
    }
}
echo "<hr>";
//task 4
echo "<h1>task3</h1>";
$num = 5;
$m=0;  

for ($x=1; $x<=20; $x++)   
{  
  $m = $x * $num ;  
}  
echo " $num is $m";  

echo "<hr>";
//task 5
echo "<h1>task4</h1>";
$num = 10;
$mn=0;  

for ($x=1; $x<=100; $x++)   
{  
  $mn = $x * $num ;  
}  
echo " $num is $mn";
echo "<hr>";
//task5
echo "<h1>task 5</h1>"; 
$day=0;
for($i=477.75;$i>0;$i-=0.25){
    $day++;
}
echo $day;

echo "<hr>";
//task6
echo "<h1>task 6</h1>";
echo "<table border='2px' width='500px'>";
echo "<tr>
      <td>id</td>
      <td>letter</td>
      <td>code</td>
     </tr>";
   $code=65;
     for($i=1;$i<=26;$i++){
         echo "<tr>";
         echo "<td>$i</td>";
         echo"<td>".chr($code)."</td>";
         echo "<td>".str_repeat($i,$i).str_repeat(chr($code),$i)."</td>";
         $code++;
         echo "</tr>";

     }
echo "</table>";
echo "<hr>";
//task7
echo "<h1>task 7</h1>";
$sum=0;
$count=0;

for($i=1;$i<=1000;$i++){
    $sum+=$i;
    $count++;
 
 if($sum>=100){
     echo "sum = ". $sum;
     echo  "<br>";
     echo "count = ". $count;
 break;
 }


}

echo "<hr>";










//task8
echo "<h1>task 8</h1>";

for($i=1;$i<=5;$i++){
    echo "<br>";
    echo str_repeat("*",$i);
}









//task9
echo "<h1>task 9</h1>";

for($i=1;$i<=5;$i++){
    echo "<br>";
    echo str_repeat("*",$i);
}

for($i=5;$i>0;$i-=1){
    echo "<br>";
    echo str_repeat("*",$i);

 }









 
 echo "<hr>";
//task10
echo "<h1>task 10</h1>";
$count=0;
for($i=1;$i<=1000;$i++){
if ($i%17 == 0) {
    echo $i;
    $count++;
    echo "<br>";

}

}
echo "count = ". $count;

echo "<hr>";
//task10
echo "<h1>task 10</h1>";
echo str_repeat("*",5);
for($i=1;$i<=5;$i++){

    if ($i==3) {
        for($j=1;$j<=5;$j++){
            echo "<br>";
            echo "&nbsp;&nbsp;&nbsp;*";    
        }  
    }
}
echo "<br>";
echo str_repeat("*",5);

echo "<hr>";
//task11
echo "<h1>task 11</h1>";


echo "<table border='2px' width='500px'>";
echo "<tr>
      <td>num</td>
      <td>time</td>
 
     </tr>";
    $t=100;
     for($i=1;$i<=100;$i++){
        
         echo "<tr>";
         echo "<td>$t</td>";
         $start_time = microtime(true); 
        $val=1; 
       
        // Start loop 
        for($j = 1; $j <=$t; $j++) 
        { 
            if ($val == 120000000) {
            
            break;
            } else {
                $val++;  
            }
           
        }  
        $t*=10;
        
        // End the clock time in seconds 
        $end_time = microtime(true); 
        
        // Calculate the script execution time 
        $execution_time = ($end_time - $start_time); 
        

         echo"<td>$execution_time</td>";
        
      
         echo "</tr>";

     }
echo "</table>";
echo "<hr>";





$start_time = microtime(true); 
$val=1; 
  
// Start loop 
for($i = 1; $i <=99999; $i++) 
{ 
    $val++; 
}  
  
// End the clock time in seconds 
$end_time = microtime(true); 
  
// Calculate the script execution time 
$execution_time = ($end_time - $start_time); 
  
echo " It takes ".$execution_time." seconds to execute the script"; 


















?>





