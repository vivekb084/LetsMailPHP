<?php
include 'connect.php';

// To protect MySQL injection (more detail about MySQL injection)

$mynam=(string)filter_input(INPUT_POST, 'nam');
$myusername = (string)filter_input(INPUT_POST, 'user');
$mypassword = (string)filter_input(INPUT_POST, 'pass');
$teles=(string)filter_input(INPUT_POST, 'tele');
$s=strlen($teles);
$ge=(string)filter_input(INPUT_POST, 'gender');


if(($mynam!="")&&($myusername!="")&&($mypassword!="")&&($teles!=""))
{
      // $email = 'shagtv@a.xyz.com';

    $domains = array('letsmail.co.in');

    $pattern = "/^[a-z0-9._%+-]+@[a-z0-9.-]*(" . implode('|', $domains) . ")$/i";
    $mob="/^[1-9][0-9]*$/"; 
    if (preg_match($pattern, $myusername)) {
       // echo 'valid';
        if((preg_match($mob, $teles))&&$s==10)
        {
        
$sql="select * from login where user='$myusername'";
$result=mysql_query($sql); 

$count= mysql_num_rows($result);
$ab="select * from login where phone='$teles'";
$rs=  mysql_query($ab);
$count1=  mysql_num_rows($rs);
if($count==1){
    session_start();
       ob_start();
echo "Username  Already Taken";

}
else {
    if($count1==1)
    {
        echo "Phone no.  Already Taken";

    }
    else
    {
       
        echo "OK";
  //  $sqs="insert into login values('$myusername','$mypassword','$mynam','Offline',0,'$teles','$ge')";
   // mysql_query($sqs)or die(mysql_error());    
    }
}

        }
        else
        {
                    echo "Invalid phone no.";

        }


    } else {
       // echo 'not valid';
        echo "Username must be like example@letsmail.co.in";

        
    }

}
else
{
    echo " Fields can't be empty";
}







      