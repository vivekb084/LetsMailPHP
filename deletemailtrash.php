<?php

include 'connect.php';
    ob_start();
session_start();
$b=$_SESSION['login_user'];
if(isset($_SESSION['login_user']))
{
    $st=$_SESSION['login_user'];
    $str="<".$_SESSION['login_user'].">";
    $a=filter_input(INPUT_GET, 'mi');
    $c=filter_input(INPUT_GET, 'b');
if((isset($a))&&(isset($c)))
{
       $dqs=(string)filter_input(INPUT_GET, 'mi');
       $str=(string)filter_input(INPUT_GET, 'b');
$ab="select * from trash where Messageid='$dqs' and trash.toemail like '$st' or trash.toemail like '%$str%'";
       $abs=mysql_query($ab)or die(mysql_error());
       $sst=mysql_num_rows($abs);
     
       if($sst==1)
       {
   $resul="select * from messagefile where Messageid='$dqs' and Box='Trash' and messagefile.email like '$st' or messagefile.email like '%$str%'";
   $s=mysql_query($resul);
   
   while($r=mysql_fetch_array($s))
   {
       unlink($r[Filelocation]);
   }
   $dq1="DELETE  FROM trash where Messageid='$dqs' and trash.toemail like '$st' or trash.toemail like '%$str%'";
   $dq2="DELETE  FROM messagefile where Messageid='$dqs' and Box='Trash' and messagefile.email like '$st' or messagefile.email like '%$str%' ";
   mysql_query($dq1);
   mysql_query($dq2);
   $dir='Message/';
  unlink($dir.$str)or die("cannto delete");
      echo '<script type="text/javascript">alert("Record Deleted Successfully");location="trash.php";</script>';
}
else
{
                    echo '<script type="text/javascript">alert("Not your record");location="trash.php";</script>';
}
}
else
{
                  echo '<script type="text/javascript">alert("Click on Delete to Delete Message");location="trash.php";</script>';
}
}
else
{
    header("location:login.php");
}
