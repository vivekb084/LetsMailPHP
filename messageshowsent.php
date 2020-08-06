<?php
include 'connect.php';
    ob_start();
session_start();
if(isset($_SESSION['login_user']))
{
    $b=$_SESSION['login_user'];
$a=filter_input(INPUT_GET, 'mi');
if(isset($a))
{
    
       $rst=(string)filter_input(INPUT_GET, 'mi');
       $ab="select * from sent where Messageid='$rst' and sent.from = '$b'";
       $abs=mysql_query($ab)or die(mysql_error());
       $sst=mysql_num_rows($abs);
       while($r=  mysql_fetch_array($abs))
       {
           $s=$r['Message'];
       }
       if($sst==1)
       {
      echo $s;
       }
       else
       {
                           echo '<script type="text/javascript">alert("Not your record");window.close();</script>';

       }
    ?>


<?php
}
else
{
                           echo '<script type="text/javascript">window.close();</script>';

}
}
else {
                           echo '<script type="text/javascript">window.close();</script>';
}