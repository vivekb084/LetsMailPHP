<?php
include 'connect.php';
       ob_start();
    session_start();
$a=filter_input(INPUT_POST, 'submit');
if(isset($_SESSION['login_user']))
{
    echo '<script type="text/javascript">alert("Already Logged in");location="index.php";</script>';
}
else
{
    

if(isset($a))
{
// To protect MySQL injection (more detail about MySQL injection)

$myusername = (string)filter_input(INPUT_POST, 'user');
$mypassword = (string)filter_input(INPUT_POST, 'pass');

$sql="select * from login where user='$myusername' and pass= '$mypassword'";
$result=mysql_query($sql); 

$count= mysql_num_rows($result);
 /*$ip = "";

if (!empty($_SERVER["HTTP_CLIENT_IP"]))
{
 //check for ip from share internet
 $ip = $_SERVER["HTTP_CLIENT_IP"];
}
elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
 // Check for the Proxy User
 $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
 $ip = $_SERVER["REMOTE_ADDR"];
}*/
// Mysql_num_row is counting table row
// If result matched $myusername and    $mypassword, table row must be 1 row
if($count==1){
  
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['login_user']=$myusername;
$_SESSION['login_pass']=$mypassword; 
$_SESSION['login_name']= mysql_dbname($result, 0, 2);
$ast=mysql_dbname($result, 0, 4);
$as=$ast+1;
$abc="update login set status='Online',logincount='$as' where user='$myusername'";
mysql_query($abc)or die(mysql_error());
//$_SESSION['last_acted_on'] = time();
echo '<script type="text/javascript">alert("Login Successfull");location="index.php";</script>';

}
else {
echo '<script type="text/javascript">alert("Wrong Username or Password");location="index.php";</script>';
}
}
else
{
echo '<script type="text/javascript">alert("Enter Username and Password");location="index.php";</script>';

}
}


      