<?php
include 'connect.php';
    ob_start();
session_start();
$b=$_SESSION['login_user'];
if(isset($_SESSION['login_user']))
{

$a=filter_input(INPUT_GET, 'mi');
if(isset($a))
{
       $dqs=(string)filter_input(INPUT_GET, 'mi');

       $ab="select * from drafts where Messageid='$dqs' and drafts.from = '$b'";
       $abs=mysql_query($ab)or die(mysql_error());
       $sst=mysql_num_rows($abs);
     
       if($sst==1)
       {
           
   $resul="select * from messagefile where Messageid='$dqs' and Box='Drafts' and email = '$b'";
   $s=mysql_query($resul);
   
   while($r=mysql_fetch_array($s))
   {
       unlink($r[Filelocation]);
   }
   $dq1="DELETE  FROM drafts where Messageid='$dqs' and drafts.from = '$b'";
   $dq2="DELETE  FROM messagefile where Messageid='$dqs' and Box='Drafts' and email = '$b'";
   mysql_query($dq1);
   mysql_query($dq2);
       echo '<script type="text/javascript">alert("Record Deleted Successfully");location="drafts.php";</script>';
       }
       else
       {
                echo '<script type="text/javascript">alert("Not your record");location="drafts.php";</script>';

       }
}
else
{
                  echo '<script type="text/javascript">alert("Click on Delete to Delete Message");location="drafts.php";</script>';
}
}
else
{
header("location:login.php");
}