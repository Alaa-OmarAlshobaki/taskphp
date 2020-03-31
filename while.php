<?php
$odd=array();
$even=array();
$fiveNum=array();
$tenNum=array();
$mod17=array();
for($i=1;$i<=1000;$i++){
  if ($i %2==0) {
    array_push($even,$i );
  }if ($i%2!=0) {
    array_push($odd,$i );
  }if ($i%5==0) {
    array_push($fiveNum,$i );
  }if ($i%10==0) {
    array_push($tenNum,$i );
  }if ($i%17==0) {
    array_push($mod17,$i );
  }

}
echo"<pre>";
foreach($odd as $val){
  echo "odd is $val";
}
echo "</pre>";
echo"<pre>";
print_r($odd);
echo "</pre>";
echo"<pre>";
print_r($even);
echo "</pre>";
echo"<pre>";
print_r($fiveNum);
echo "</pre>";
echo"<pre>";
print_r($tenNum);
echo "</pre>";
echo"<pre>";
print_r($mod17);
echo "</pre>";
?>