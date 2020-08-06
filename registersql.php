<?php
include 'connect.php';
$mynam=(string)filter_input(INPUT_POST, 'nam');
$myusername = (string)filter_input(INPUT_POST, 'user');
$mypassword = (string)filter_input(INPUT_POST, 'pass');
$teles=(string)filter_input(INPUT_POST, 'tele');
$ge=(string)filter_input(INPUT_POST, 'gender');
if(($mynam!="")&&($myusername!="")&&($mypassword!="")&&($teles!=""))
{
  $sqs="insert into login values('$myusername','$mypassword','$mynam','Offline',0,'$teles','$ge')";
    mysql_query($sqs)or die(mysql_error());    
echo "SignUp Successfully";
}
