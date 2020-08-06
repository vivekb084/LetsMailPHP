<?php
include 'connect.php';
    ob_start();
session_start();
?>
<style>
     #circle1 {
      width: 8px;
      height: 8px;
      -webkit-border-radius: 25px;
      -moz-border-radius: 25px;
      border-radius: 25px;
      background: green;
    }
       #circle2 {
      width: 8px;
      height: 8px;
      -webkit-border-radius: 25px;
      -moz-border-radius: 25px;
      border-radius: 25px;
      background: grey;
    }
    
 

 img {
  margin: 5px;
}
 .lsi {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin: 0 0 10px 10px;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
 .info {
  -webkit-box-flex: 1;
  -webkit-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
 .user {
  color: #fff;
  margin-top: 12px;
}
.status {
  position: relative;
  margin-left: 14px;
  color: #a8adb3;
}
.off:after,
.on:after {
  content: '';
  left: -12px;
  top: 8px;
  position: absolute;
  height: 7px;
  width: 7px;
  border-radius: 50%;
}
 .off:after {
  background: #fd8064;
}
.on:after {
  background: #62bf6e;
}
</style>
<?php

		$results = mysql_query("SELECT * from login");
		while($row = mysql_fetch_array($results))
		{
			//$msg_time = date('h:i A M d',strtotime($row["date_time"])); //message posted time
			//echo '<div class="shout_msg"><time>'.$msg_time.'</time><span class="username">'.$row["user"].'</span> <span class="message">'.$row["message"].'</span></div>';
                    if($row['user']!=$_SESSION['login_user'])
                    {
                       if($row['status']=='Online')
                       {
                           echo '<li class="lsi">

						<img width="50" height="50" src="http://cs625730.vk.me/v625730358/1126a/qEjM1AnybRA.jpg">
						<div class="info">
							<div class="user">'.$row['name'].'</div>
							<div class="status on"> online</div>
						</div>
					</li>';
                         //echo '<pre><div style="display:inline"><div class="shout_msg"><span class="username" >'.$row['name'].'<div id=circle1 style="margin-left:230px;margin-top:-10px;"></div></span></div><div></pre>';
                       }
                       else
                       {
                           echo '<li class="lsi">

						<img width="50" height="50" src="http://cs625730.vk.me/v625730358/1126a/qEjM1AnybRA.jpg">
						<div class="info">
							<div class="user">'.$row['name'].'</div>
							<div class="status off"> offline</div>
						</div>
					</li>';
                             //echo '<pre><div style="display:inline"><div class="shout_msg"><span class="username" >'.$row['name'].'<div id=circle2 style="margin-left:230px;margin-top:-10px;"></div></span></div><div></pre>';
                       }
                    }

		}
?>