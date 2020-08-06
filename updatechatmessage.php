<?php
include 'connect.php';
ob_start();
session_start();
$q=(string)filter_input(INPUT_GET, 'tex');
$s=$_SESSION['chatuser'];
$r=$_SESSION['login_user'];
$t=date("Y-m-d h:i:sa");
echo '<li class="i"><div class="head"><span class="time">'.$t.'</span>
     </div><div class="message">'.$q.'</div></li>';
$sqque="insert into chat values('$r','$s','$q','$t')";
mysql_query($sqque);

   

