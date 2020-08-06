<?php
include 'connect.php';
    ob_start();
session_start();
$s=$_SESSION['login_user'];
$az="select * from chat where sender='$s' order by times";
$azx=  mysql_query($az);
while($r=  mysql_fetch_array($azx))
{
    echo '<li class="i"><div class="head"><span class="time">'.$r['times'].'</span>
     </div><div class="message">'.$r['Message'].'</div></li>';
}
