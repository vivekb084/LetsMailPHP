<!DOCTYPE html> 
<html>
    <style>
        
        .body{
margin-top: -50px;
width: 950px;
margin-left: auto;
margin-right: auto;
height: 500px;
	background-color: #ADADAD;
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index:40;
        opacity: 1;
        background-image: url("images/3.jpg");
}

        .body1{
margin-top: -50px;
width: 950px;
margin-left: auto;
margin-right: auto;
height: 500px;
	background-color: #ADADAD;
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index:45;
        opacity: 1;
        background-image: url("images/3.jpg");
}



.header{
	position: absolute;
        margin-top: -120px;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
        
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
    margin-top: -120px;
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=radio]{
    margin-top: 10px;
	width: 50px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}
.ge{
    width: 250px;
	height: 30px;
	background: transparent;
	
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}


.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
#form1
{
    visibility: hidden;
    z-index: 50;
    margin: auto;
    position:relative;
}
#form2
{
    visibility: hidden;
    z-index: 100;
    margin-left:  auto;
    margin-bottom: auto;
    margin-right: auto;
    margin-top: -500px;
    position:relative;
}
.vefo
{
    display:none;
}

</style>

<head>
  <title>Let's Mail </title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script
  src="js/form.js">
          </script>
 <script>
$(document).ready(function(){
    $(".forms").click(function(){
        $("#form1").css("visibility", 'visible');
    });
        
});
</script>

<script>
$(document).ready(function(){
      
    $(".12").click(function(){
        $(".sifo").css("display", 'none');
      
                
              var nam=document.getElementById("nam").value;
              var user=document.getElementById("user").value;
              var pass=document.getElementById("pass").value;
              var tele=document.getElementById("tele").value;
              var gender=document.getElementById("gender").value;
              
              var return_first = function () {
    var tmp = null;
    $.ajax({
        'async': false,
        'type': "POST",
        'global': false,
        'dataType': 'html',
        'url': "register2.php?first",
        'data': {  nam: nam, user: user,pass:pass,tele:tele,gender:gender, 'target': 'arrange_url', 'method': 'method_target' },
        'success': function (data) {
            tmp = data;
        }
    });
    return tmp;
}();
              
             return_first=$.trim(return_first);
             if(return_first!="OK")
              {
                  alert(return_first);
                  location="index.php";  
              }
              else
              {              
                <?php
       
        include('way2sms-api.php');
       $si = mt_rand(100000, 999999);
       
        ?>
        /*      jQuery.ajax({
   url: 'ab.php',
   data: {status: tele, no:<?php echo $si;?>},
   success :function (data) {
            
        }
          //if code is sent then ok else smething went wrong;
})*/


    var return_firs = function () {
    var tmp = null;
    $.ajax({
        'async': false,
        'type': "POST",
        'global': false,
        'dataType': 'html',
        'url': "ab.php",
        'data': {  status: tele, no:<?php echo $si;?>, 'target': 'arrange_url', 'method': 'method_target' },
        'success': function (data) {
            tmp = data;
        }
    });
    return tmp;
}();
  return_firs=$.trim(return_firs);
             if(return_firs!="true")
              {
                  alert("Something Went Wrong");
                  location="index.php";  
              }
             
else
{

      alert("Verification code has been sent to your phone");
                $(".vefo").css("display", 'inline');
}
                }
    });
        
        $(".123").click(function(){
        var cod=document.getElementById("cod").value;
        var veco=<?php echo $si;?>;
                    

        if(veco==cod)
        {
             var nam=document.getElementById("nam").value;
              var user=document.getElementById("user").value;
              var pass=document.getElementById("pass").value;
              var tele=document.getElementById("tele").value;
              var gender=document.getElementById("gender").value;
              
                $.ajax({
        'async': false,
        'type': "POST",
        'global': false,
        'dataType': 'html',
        'url': "registersql.php",
        'data': {  nam: nam, user: user,pass:pass,tele:tele,gender:gender, 'target': 'arrange_url', 'method': 'method_target' },
        'success': function (data) {
            alert(data);
        }
    });          
          location="index.php";
        }
        else
        {
          alert("Verification Failed Sign Up Again");
          location="index.php";
        }
  });
       
        
        
});
</script>




<script>
$(document).ready(function(){
    $(".formss").click(function(){
        $("#form2").css("visibility", 'visible');
    });
        
});
</script>

</head>
<?php
error_reporting(E_ERROR | E_PARSE);

ini_set('session.cookie_domain', '.letsmail.co.in' );

    ob_start();

session_start();

/*$ip = "";

if (!empty($_SERVER["HTTP_CLIENT_IP"]))
{
 //check for ip from share internet
 $ip = $_SERVER["HTTP_CLIENT_IP"];
}
elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
 // Check for the Proxy User
 $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
 $ip = $_SERVER["REMOTE_ADDR"];
}
$abcde=$_SESSION['login_user'];
include 'connect.php';
$abe="select * from login where user='$abcde'";
$re=mysql_query($abe);
while($rsv=  mysql_fetch_array($re))
{
    $ef=$rsv['ip'];
}

    
if( isset($_SESSION['last_acted_on']) && (time() - $_SESSION['last_acted_on'] > 10*60) ){
 
 header('Location: logout.php');
 }
 else{
 session_regenerate_id(true);
 $_SESSION['last_acted_on'] = time();
 }
  if(isset($_SESSION['login_user']))
{
 if($ef==$ip)
{
 * 
 */
 /* if(isset($_SESSION['login_user']))
{
include 'chat.php';
}*/                                                                                                                                                                                                 
error_reporting(E_ERROR | E_PARSE);
            
?>

                <body>
                    <div id='form1'>

                        <div class="body"  style=" opacity: 1 "></div>  

                    <div class="header" style="opacity:1;">
                                    <div>Login  <span>Form  </span></div>                                                                                                                                                                                                                                                                                                                                           
                            </div>
                    <br>
                <div class="login">
                                       
                    <form method="post" action="login.php">
                        
                        <input type="text" placeholder="Username" name="user"/><br>
				<input type="password" placeholder="Password" name="pass"/><br>
                                <input type="submit" name="submit" value="Login"/>
                        
				
                    </form>
           
                    
                </div>        
		</div>

    
     <div id="form2">
        <div class="body1" style="opacity:1;"></div>  
		
        <div class="header" style="opacity:1">
			<div>SignUp  <span>Form  </span></div>
		</div>
		<br>
		<div class="login">
                                       
                    <form method="post">
                        <div class="sifo">
                        <input type="text" name="nam" placeholder="Name" id="nam"/><br><br>
                        <input type="text" placeholder="Username" name="user" id="user"/><br>
                        <input type="password" placeholder="Password" name="pass" id="pass"/><br><br>
                        <input type="text" name="tele" placeholder="Enter 10 Digit Phone no." id="tele"/><br>
                        <div class="ge">
                            <input type="radio" name="gender" value="male" checked="true" id="gender">Male                      
                        <input type="radio" name="gender" value="female" id="gender">Female</div><br>
                        <input type="text" name="no" value="<?php echo $si;?>" hidden="true"/>
                        <div class="12"><input type="button" name="sub" value="Submit"/></div>
                        </div>
                        <div class="vefo">
                            <input type="text" placeholder="Enter 6 digit Verification code" name="cod" id="cod"/><br>

                        <div class="123"><input type="button" name="submit" value="Submit"/></div>
                        </div>
                        
				
                    </form>
           
                    
                    
		</div>
</div>
    
    
                
  <div id="main" style="margin-top:-490px;">
    <header>
	  <div id="banner">
               
	    <div id="welcome">
	      <h3>Let's Mail<span> YourMailService</span></h3>
             </div><!--close welcome-->
             
	    <div id="welcome_slogan">
	      <h3>Better way of Communication</h3>
              <div style="font-size: 30px;color: blue;margin-left: 500px;margin-top: -80px;">
             <?php     
             if(isset($_SESSION['login_user']))
{?>
Welcome 
           <?php       
           echo ($_SESSION['login_name']);
}
?>
              </div>
	    </div><!--close welcome_slog    an-->			
	  </div><!--close banner-->
    </header>

	<nav>
	  <div id="menubar">
        <ul id="nav">
          <li class="current1"><a href="index.php">Home</a></li>
         <?php if(!isset($_SESSION['login_user']))
{
    ?>
          <li class="forms"><a>Login</a></li>
          <li class="formss"><a>Register</a></li>
          <?php
                   }
                   else
{

                ?>
          <li class="current2"><a href="inbox.php">Inbox</a></li>
          <li class="current3"><a href="compose.php">Compose</a></li>
          <li class="current6"><a href="drafts.php">Drafts</a></li>
          <li class="current4"><a href="sent.php">Sent</a></li>
          <li class="current7"><a href="trash.php">Trash</a></li>
          <li class="current8"><a href="chatroom.php">Chat Room</a></li>
          <li class="current5"><a href="logout.php">LogOut</a> </li>

       
                <?php

                }
                ?>
         
        </ul>
      </div><!--close menubar-->	
    </nav>	
    
	<div id="site_content">	

      <div class="slideshow">
	    <ul class="slideshow">
                <li><img  class="abcd" width="100%" height="250" src="images/1.jpg" alt="" style=" opacity: 1   ;" /></li>
                <li><img  class="abcd" width="100%" height="250" src="images/8.jpg" alt="" style=" opacity: 1   ;" /></li>
                <li><img  class="abcd" width="100%" height="250" src="images/2.jpg" alt="" style=" opacity: 1;" /></li>
                <li><img  class="abcd" width="100%" height="250" src="images/5.jpg" alt="" style=" opacity: 1   ;" /></li>
                <li><img  class="abcd" width="100%" height="250" src="images/7.jpg" alt="" style=" opacity: 1   ;" /></li>


        </ul> 
	  </div>	
	<style>
.abcd {display:none;}
</style>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("abcd");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1;}  
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
	  <div id="content">
        <div class="content_item">
		  <h1>Welcome To Let's Mail</h1> 
                  <p>Tired of  Other Mail Services.<br>Try Let's Mail.<br>Lets' Mail help you to send Video Mails, Voice Mails and Files. All you have to do is just Login.<br>
                  We Provide a secure method of sending mails and focus on your privacy.</p>   		
		  
		  
	<!---<?php/*
}
else
{
    session_start();
session_unset(); 
unset($_SESSION['login_user']);
unset($_SESSION['login_pass']);
unset($_SESSION['login_name']);
unset($SESSION['$rst']);
unset($SESSION['$nooffile']);
// destroy the session 
session_destroy();     
}
}*/
?>--->


