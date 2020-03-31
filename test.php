<?php
echo __FILE__;
echo  "<h5>return path of file</h5>";
echo "<br>";
echo __DIR__;
echo  "<h5>return path of folder</h5>";
echo "<br>";
echo __LINE__;
echo  "<h5>return num of line i do in it</h5>";
define("SITE_STATUS","open");

// check in page and return file style according states page
if("SITE_STATUS"=="close"){
   echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
     echo "close";
}else{
   echo "<link rel='stylesheet' type='text/css' href='css/styleAr.css'>";
    echo "open";
}


//date
echo "<br>";
// $str = strtotime('next month');
// $str = strtotime('next day');
// $str = strtotime('next year');
// $str = strtotime('next week');
$str = strtotime('next hour');//make the time i need it according what i need next week,month,year..ect

echo "copyright &copy; made by alaa "; echo Date('y-m-d H:i:s',$str)//formate for date and what date i needed it

?>