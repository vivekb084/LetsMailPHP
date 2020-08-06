<?php
// remove all session variables
include 'connect.php';
    ob_start();
session_start();
$stp=$_SESSION['login_user'];
$asdf="select * from login where user='$stp'";
$ase=  mysql_query($asdf);
while($rse= mysql_fetch_array($ase))
{
    $qe=$rse['logincount'];
    if($qe==1)
    {
        $abcd="update login set status='Offline',logincount=0 where user='$stp'";
mysql_query($abcd)or die(mysql_error());
    }   
 else {
            $qe=$qe-1;
 $abcd="update login set logincount='$qe' where user='$stp'";
mysql_query($abcd)or die(mysql_error());
    }
    
}

session_unset(); 
unset($_SESSION['login_user']);
unset($_SESSION['login_pass']);
unset($_SESSION['login_name']);
unset($SESSION['$rst']);
unset($SESSION['$nooffile']);
// destroy the session 
session_destroy(); 
header("location:index.php");
