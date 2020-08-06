<?php
error_reporting(E_ERROR | E_PARSE);

include 'connect.php';
    ob_start();
session_start();
$b=$_SESSION['login_user'];
if(isset($_SESSION['login_user']))
{
$st=$_SESSION['login_user'];
    $str="<".$_SESSION['login_user'].">";
$a=filter_input(INPUT_GET, 'mi');
if(isset($a))
{
               

       $dqs=(string)filter_input(INPUT_GET, 'mi');
 $ab="select * from inbox where inbox.Messageid='$dqs' and   inbox.toemail like '$st' or inbox.toemail like '%$str%'";
       $abs=mysql_query($ab)or die(mysql_error());
       $sst=mysql_num_rows($abs);
     
       if($sst==1)
       {
         $sqr="select * from messagefile where messagefile.Messageid='$dqs' and  messagefile.email like '$st' or messagefile.email like '%$str%' and messagefile.Box=Inbox and  order by messagefile.Messageid DESC LIMIT 1";

$results=mysql_query($sqr);
       /*if(mysql_num_rows($results)==0)
            {
            $result1=1;
            }
            else
            {
                $result1=mysql_dbname($results, 0, 1)+1;
            }
        */
            $sq2="select * from trash where  trash.toemail like '$st' or trash.toemail like '%$str%' order by trash.Messageid ";
            $rs2= mysql_query($sq2);
             if(mysql_num_rows($rs2)==0)
            {
            $result2=1;
            }
             else
            {
                $result2=mysql_dbname($rs2, 0, 0)+1;
            }
            

           
            
        
       
   $resul="update messagefile set Box='Trash',Messageid='$result2' where Messageid='$dqs' and Box='Inbox' messagefile.email='$st' or messsagefile.email like '%$str%'";
   $s=mysql_query($resul)or die("cannt");
   
  
   while($v=  mysql_fetch_array($abs))
   {

       $from=$v['fromname'];
       $fromem=$v['fromemail'];
       $to=$v['toemail'];
       $da=$v['date'];
       $subject=$v['subject'];
       $message=$v['message'];
     
      
          $sq = "INSERT INTO trash VALUES ('$result2','$from','$fromem','$to', '$da' ,'$subject','$message')";
          mysql_query($sq)or die("Error");

   }
   $dq1="DELETE  FROM inbox where Messageid='$dqs' and  inbox.toemail like '$st' or inbox.toemail like '%$str%'";
   mysql_query($dq1);
      echo '<script type="text/javascript">alert("Record Deleted Moved To Trash Successfully");location="inbox.php";</script>';
}
 else
       {
                echo '<script type="text/javascript">alert("Not your record");location="inbox.php";</script>';

       }
}
else
{
                  echo '<script type="text/javascript">alert("Click on Delete to Delete Message");location="inbox.php";</script>';
}
}
else
{
header("location:login.php");
}
