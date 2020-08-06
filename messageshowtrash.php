<?php
include 'connect.php';
    ob_start();
session_start();
if(isset($_SESSION['login_user']))
{
 $st=$_SESSION['login_user'];
    $str="<".$_SESSION['login_user'].">";
    $a=filter_input(INPUT_GET, 'mi');
if(isset($a))
{
    
       $rst=(string)filter_input(INPUT_GET, 'mi');
       $ab="select * from trash where Messageid='$rst' and trash.toemail like '$st' or trash.toemail like '%$str%'";
       $abs=mysql_query($ab)or die(mysql_error());
       $sst=mysql_num_rows($abs);
       if($sst==1)
       {
           $rst=  mysql_db_name($abs, 0, 6);
       $myfile = fopen('Message/'.$rst.'.txt'  , "r");
echo fread($myfile,filesize('Message/'.$rst.'.txt'  ));
fclose($myfile);
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