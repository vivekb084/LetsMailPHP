
<?php/*
 *     ob_start();    
session_start();
if(isset($_SESSION['login_user']))
{*/
    ?>

<!--<link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style2.css">

            
<script>
   
function myFunctiona() {
     var tx= document.getElementById("texxt").value;
document.getElementById("texxt").value="";
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              // $("#demoe").append("<li class=\"i\"><div class=\"head\"><span class=\"time\">" + (new Date().getHours()) + ":" + (new Date().getMinutes()) + " AM, Today</span></div><div class=\"message\">Hello</div></li>");
$(".messages").getNiceScroll(0).resize();
                //  document.getElementById("demoe").innerHTML = xmlhttp.responseText;
                $("#demoe").append(xmlhttp.responseText);
               
            }
        };
        xmlhttp.open("GET", "updatechatmessage.php?tex="+tx, true);
        xmlhttp.send();
}

</script>

<script>
   
function myFunction() {
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
                document.getElementById("demo").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "chatuser.php", true);
        xmlhttp.send();
}
 window.setInterval(myFunction, 1000);

</script>

<script>
 /*
function myFunction() {
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
                document.getElementById("demoes").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "getchatmessage.php", true);
        xmlhttp.send();
}
 window.setInterval(myFunction, 100);
*/
</script>


<script src="js/chat3.js"></script>

---->
<?php /*
session_start();
 * */
 
?>

   <!---- <p id="result"></p>
    	<div class="ui">
		<div class="left-menu">
				<form action="#" class="search">
					<input  placeholder="search..." type="search" name="">
					<input type="submit" value="&#xf002;">
				</form>
                                                               

				<menu class="list-friends">
                                     <p id="demo"></p>
				<!----	<li>
                                            <p id="demo"></p>

						<img width="50" height="50" src="http://cs625730.vk.me/v625730358/1126a/qEjM1AnybRA.jpg">
						<div class="info">
							<div class="user">A</div>
							<div class="status on"> online</div>
						</div>
					</li>
					
					<li>
						<img width="50" height="50" src="http://lorempixel.com/50/50/people/2">
						<div class="info">
							<div class="user">Name Fam</div>
							<div class="status off">left 3 min age</div>
						</div>
					</li>
					--->
				<!---</menu>
		</div>
		<div class="chat">  
			<div class="top">
				<div class="avatar">
					<img width="50" height="50" src="http://cs625730.vk.me/v625730358/1126a/qEjM1AnybRA.jpg">
				</div>
				<div class="info">
					<div class="name"><?php/* echo $_SESSION['login_name'];*/?></div>
					<div class="count">already 1 902 messages</div>
				</div>
				<!----<i class="fa fa-star"></i>-->
			<!---</div>
			<ul class="messages">--->
<?php/*
include 'connect.php';
session_start();
$s=$_SESSION['login_user'];
$az="select * from chat where sender='$s' order by times";
$azx=  mysql_query($az);
while($r=  mysql_fetch_array($azx))
{
    */
?><!----
          <li class="i">
					<div class="head">
						<span class="time"><?php //echo $r['times'];?></span>
						<!----<span class="name">dsfds</span>--->
                                            
					<!---</div>
					<div class="message"><?php //echo $r['Message'];?></div>
				</li>-->
                          <?php/*
}*/
?>
                    <!----                                                <p id="demoe"></p>

				
			</ul>
			<div class="write-form">
                            
                            <textarea placeholder="Type your message" name="e" id="texxt"  rows="2" ></textarea>
				<!----<i class="fa fa-picture-o"></i>
				<i class="fa fa-file-o"></i>---->
                          <!---  <span class="send" onclick="myFunctiona();" >Send</span>
			</div>
		</div>
	</div>
        <br>
        <br>
  
 
       <script src='js/chat1.js'></script>
       <script src='js/chat2.js'></script>
       <script src="js/index.js"></script>--->

<?php
//}
//else
//{
  //  header("location:index.php");
    
//}

session_start();
if(isset($_SESSION['login_user']))
{
    ?>

<img src="images/con.jpeg" style="margin:auto; height: 640px; width: 1350px;"> 

<?php
}
else {
   header("location:index.php"); 
}