<?php
        include('way2sms-api.php');
if(!empty($_POST['status'])) {
   $x = $_POST['status'];
   $z=$_POST['no'];
  // $y="Hello";
 $res = sendWay2SMS('8502022862', 'vb02071995', $x, $z);
if (is_array($res))
        echo $res[0]['result'] ? 'true' : 'false';
    else
        echo $res;
  
   
}
  //sendWay2SMS('8502022862', 'vb02071995', '8502022862', 'Hello');
