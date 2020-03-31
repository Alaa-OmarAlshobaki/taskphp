<?php
session_start();
include("header.html");
// include("form1.html");
// require("form1.html");
// echo "<h1>دالة require() شبيهة بدالة include() باستثناء أن كل دالة تقوم بالتعامل مع الأخطاء بشكل مختلفة، فإذا حدث خطأ أثناء الاستدعاء، فستقوم include() بطباعة الخطأ لكن سيبقى السكربت يعمل بشكل طبيعي أما في حالة require() فعند حدوث خطأ فسيتم طباعة رسالة الخطأ ومن ثم يتوقف السكربت عن العمل.</h1>";
echo "<h3>Q1 : website counter? (when refresh increment the website counter)</h3>";
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}


echo "<pre>";
print_r($_SESSION);
echo "visitor :". $_SESSION['count'] ;

echo "</pre>";

echo "<hr>";
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<h3>Q2  form / enter your website you want to go? </h3>";

if(isset($_POST["save"])){
 
  $_SESSION["email"]=$_POST["email"];
  if( $_SESSION["email"]=="alo2.omar92@gmail.com"){
    header("location:https://jo.linkedin.com/in/ala-a-omar-al-shobaki-1b4059186");
  }else{
  header("location:errorpage.php");
  }
  
}

?>
<div class="container">
<form action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="save" class="btn btn-primary">Submit</button>
</form>
</div>
<hr>
<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<h3>َQ3:when you open a script :
- time when you open this page 
- you open it from mobile or laptop 
- browser type (FF,CH,OP)
- project name , script name, server name </h3>";
echo "<br>";
echo "path of file" . __FILE__;
echo "<br>";
echo "folder of project" . __DIR__;
echo "<br>";
echo "line i do it  :   " . __LINE__;
echo "<br>";
$_SESSION['time']     = time();
echo "time open this page  " .(date("F d, Y h:i:s A", $_SESSION['time'] )); 
echo "<br>";

    function getBrowser($agent = null){
      $u_agent = ($agent!=null)? $agent : $_SERVER['HTTP_USER_AGENT']; 
      $bname = 'Unknown';
      $platform = 'Unknown';
      $version= "";

      //First get the platform?
      if (preg_match('/linux/i', $u_agent)) {
          $platform = 'linux';
      }
      elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
          $platform = 'mac';
      }
      elseif (preg_match('/windows|win32/i', $u_agent)) {
          $platform = 'windows';
      }

      // Next get the name of the useragent yes seperately and for good reason
      if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
      { 
          $bname = 'Internet Explorer'; 
          $ub = "MSIE"; 
      } 
      elseif(preg_match('/Firefox/i',$u_agent)) 
      { 
          $bname = 'Mozilla Firefox'; 
          $ub = "Firefox"; 
      } 
      elseif(preg_match('/Chrome/i',$u_agent)) 
      { 
          $bname = 'Google Chrome'; 
          $ub = "Chrome"; 
      } 
      elseif(preg_match('/Safari/i',$u_agent)) 
      { 
          $bname = 'Apple Safari'; 
          $ub = "Safari"; 
      } 
      elseif(preg_match('/Opera/i',$u_agent)) 
      { 
          $bname = 'Opera'; 
          $ub = "Opera"; 
      } 
      elseif(preg_match('/Netscape/i',$u_agent)) 
      { 
          $bname = 'Netscape'; 
          $ub = "Netscape"; 
      } 

      // finally get the correct version number
      $known = array('Version', $ub, 'other');
      $pattern = '#(?<browser>' . join('|', $known) .
      ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
      if (!preg_match_all($pattern, $u_agent, $matches)) {
          // we have no matching number just continue
      }

      // see how many we have
      $i = count($matches['browser']);
      if ($i != 1) {
          //we will have two since we are not using 'other' argument yet
          //see if version is before or after the name
          if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
              $version= $matches['version'][0];
          }
          else {
              $version= $matches['version'][1];
          }
      }
      else {
          $version= $matches['version'][0];
      }

      // check if we have a number
      if ($version==null || $version=="") {$version="?";}

      return array(
          'userAgent' => $u_agent,
          'name'      => $bname,
          'version'   => $version,
          'platform'  => $platform,
          'pattern'    => $pattern
      );
  } 
  echo "<pre>";
 print_r(getBrowser()) ;
 echo "</pre>";
 echo "<br>";

echo "server name :  " . $_SERVER['SERVER_NAME'];
echo "<br>";

echo $_SERVER['REQUEST_URI'];
echo "<br>";

$project = explode('/', $_SERVER['REQUEST_URI'])[1];
echo "name of project : " . $project;//1
echo  basename(__DIR__);//2
echo "<br>";
$script = explode('/', $_SERVER['REQUEST_URI'])[2];
echo "name of script : " . $script;//1
echo "<br>";
echo  basename(__FILE__, '.php');//2

require_once 'C:\xampp\htdocs\alaa\Mobile-Detect\Mobile_Detect.php';
$detect = new Mobile_Detect();
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
echo "<br>";
echo $deviceType;













?>
