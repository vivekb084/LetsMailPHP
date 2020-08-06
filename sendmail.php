<?php

$a=filter_input(INPUT_POST, 'submitted');
if(isset($a))
{
    ob_start();
 session_start();
 include 'connect.php';
 include 'smtpsetter.php';
 $mid = $_SESSION['$rst'];
$sql="select Filelocation from messagefile where messagefile.Messageid='$mid' and messagefile.email = '$s' and messagefile.Box='Sent'";
$result=mysql_query($sql); 
    $users=$_SESSION['login_user'];
    
     $sqr="select * from messagefile where email = '$b' and Box='Drafts' order by Messageid DESC LIMIT 1";

$results=mysql_query($sqr);
       if(mysql_num_rows($results)==0)
            {
            $result1=1;
            }
            else
            {
                $result1=mysql_dbname($results, 0, 1)+1;
            }
        
            $sq2="select * from drafts where drafts.from = '$b' order by Messageid DESC LIMIT 1";
            $rs2= mysql_query($sq2);
             if(mysql_num_rows($rs2)==0)
            {
            $result2=1;
            }
             else
            {
                $result2=mysql_dbname($rs2, 0, 0)+1;
            }
            

            if($result1>$result2)
            {
                $result2=$result1;
            }
            
        
        
       


while($rs= mysql_fetch_array($result))
{
    $mail->addAttachment($rs['Filelocation']);

}

$mail->addAddress((string)filter_input(INPUT_POST, 'tos'));
$tos=(string)filter_input(INPUT_POST, 'tos');
$mail->From=$_SESSION['login_user'];
$mail->FromName = $_SESSION['login_name'];
$mail->Subject = (string)filter_input(INPUT_POST, 'subject');
$sub=(string)filter_input(INPUT_POST, 'subject');
$msg;
if(((string)filter_input(INPUT_POST, 'message'))=="")
{
    $msg="No Text";
}
else
{
    $msg=(string)filter_input(INPUT_POST, 'message');
}
$mail->Body=$msg;
$da=   date('Y-m-d H:i:s');
?>
<p style="font-size: 40px; color: black;text-align: center; margin-left: auto;margin-right: auto;">Sending...</p>
<p style="font-size: 40px; color: black;text-align: center; margin-left: auto;margin-right: auto;">Do Not Back or Refresh Page</p>

<?php 
if(!$mail->send()) {
     $sq = "INSERT INTO drafts VALUES ('$result2','$users','$tos','$da', '$sub' ,'$msg')";
        mysql_query($sq)or die(mysql_error());
        $r="update messagefile set Box='Drafts', Messageid='$result2' where Messageid='$mid' and Box='Sent' and email = '$users'";
        $rstu=mysql_query($r)or die(mysql_error());
     
   echo '<script type="text/javascript">window.alert("Message Cannot Sent")</script>';
   echo "<script >window.alert('$mail->ErrorInfo')</script>";
   echo '<script type="text/javascript">location="index.php";</script>';
    unset($SESSION['$rst']);
   exit;
}
else
{
       $sq = "INSERT INTO sent VALUES ('$mid','$users','$tos','$da', '$sub' ,'$msg')";
        mysql_query($sq)or die(mysql_error());
    unset($SESSION['$rst']);
    unset($SESSION['$nooffile']);
    echo '<script type="text/javascript">alert("Message Sent");location="index.php";</script>';
    
}
}
 else {
    header("location:index.php");
    
 }


