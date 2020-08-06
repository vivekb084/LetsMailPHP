<?php include 'header.php';

include 'connect.php';
    unset($SESSION['$rst']);

?>
	<script src="js/recorder1.js"></script>
		<script src="js/Fr.voice.js"></script>
    <script src="js/jquery1.js"></script>
		<script src="js/record1.js"></script>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
<style>
    ul#nav li.current3 a
    { color: #FFF;
      background: #0043A8;
      background: -moz-linear-gradient(#43A9FF, #0043A8);                                                                                                                                                                                                                   
      background: -o-linear-gradient(#43A9FF, #0043A8);
      background: -webkit-linear-gradient(#43A9FF, #0043A8);  
      text-shadow: none;}
   

</style>

<?php
if(isset($_SESSION['login_user']))
{
   $_SESSION['nooffile']=0;
   $b=$_SESSION['login_user'];
    
    ?>
<?php $sql="select * from messagefile where email like '%$b%' and Box='Sent' order by Messageid DESC LIMIT 1";

$results=mysql_query($sql);
       if(mysql_num_rows($results)==0)
            {
            $result1=1;
            }
            else
            {
                $result1=mysql_dbname($results, 0, 1)+1;
            }
        
            $sq2="select * from sent where sent.from like '%$b%' order by Messageid DESC LIMIT 1";
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

        
        $_SESSION['$rst']=$result2;
       
?>

 
<div class="form_settings">
    <h1>Create Your E-mail</h1>
   
    <p style="padding-bottom: 15px;">Use it to send emails with attachment.Type email id to which you need to send email and subject and message in given field and click send.</p>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
    <form method="post" action="sendmail.php" >                                                       
        <p><span>To</span><input class="contact" type="text" name="tos" value="" /></p>
        <p><span>Subject</span><input class="contact" type="text" name="subject" value="" /></p>
        <p><span>Message</span><textarea class="contact textarea" rows="12" cols="50" name="message"></textarea></p>
        <input type="hidden" name="hid" value=<?php echo $_SESSION['$rst']; ?>/>                                                                                                                                                                                                                             
        <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submitted" value="Send" /></p>
    </form>
  

    <link href="css/uploadfilemulti.css" rel="stylesheet">
<script src="js/jquery-1.8.0.min.js"></script>
<script src="js/jquery.fileuploadmulti.min.js"></script>
  

 <div id="mulitplefileuploader" >Attach Files</div>
 
<div id="status"></div>
<script>
   

    $(document).ready(function()
{

var settings = {
	url: "upload.php",

	method: "POST",
	allowedTypes:"jpg,png,gif,doc,pdf,zip,txt,docx,zip,mp4,mp3",
	fileName: "myfile",
	multiple: true,
	onSuccess:function(files,data,xhr)
	{
		$("#status").html("<font color='green'>Upload is success</font>");
		
	},
    afterUploadAll:function()
    {
        alert("All Files Uploaded!!");
    },
	onError: function(files,status,errMsg)
	{		
		$("#status").html("<font color='red'>Upload is Failed</font>");
	}
};
$("#mulitplefileuploader").uploadFile(settings);

});
</script>

<p id="demo"></p>

<a href="record.php" target="_blank"><button style="width:400px;height: 60px;padding: 2px 0 3px 0;  border: none; 
 background: #1A6FFD;color: #FFF;font: 100% arial;-moz-box-shadow: inset 0 0 10px #002C6E;  -webkit-box-shadow: inset 0 0 10px #002C6E;
 box-shadow:   inset 0 0 10px #002C6E; font-size: 25px; ">Voice or Video Mail</button></a>
 

<script>
   
function myFunction() {
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState ===4 && xmlhttp.status === 200) {
                
                document.getElementById("demo").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "check.php", true);
        xmlhttp.send();
}
 window.setInterval(myFunction, 1000);

</script>
 


</div><!--close form_settings-->
</div><!--close content_item-->
</div><!--close content-->   
</div><!--close site_content-->  	
</div><!--close main-->


	


<?php 
}
else
{
    echo '<script type="text/javascript">alert("You Need To Login First");location="index.php";</script>';
}
 include 'footer.php';
