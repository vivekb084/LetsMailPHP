<?php
/* 
 * File: example.php 
 * Description: Received Mail Example 
 * Created: 01-03-2006 
 * Author: Mitul Koradia 
 * Email: mitulkoradia@gmail.com 
 * Cell : +91 9825273322 
 */ 
    ob_start();
session_start();
   $user=$_SESSION['login_user'];
   $user1="<".$_SESSION['login_user'].">";
if(isset($_SESSION['login_user']))
{

include("receivemail.class.php"); 

include 'connect.php';
$sqq="select * from inbox where inbox.toemail='$user' or inbox.toemail like '%$user1%' order by inbox.Messageid DESC LIMIT 1";
$results=mysql_query($sqq);

       if(mysql_num_rows($results)==0)
            {
            $results=1;
        }
        else
        {
             $results=mysql_dbname($results, 0, 0)+1;
        }
       
// Creating a object of reciveMail Class 
        $a="vivekb085@letsmail.co.in";
        $b="vb02071995";
       
$obj= new ReceiveMail('sg2plcpnl0158.prod.sin2.secureserver.net',$a,$b,'imap','993',true,false); 

//Connect to the Mail Box 
$obj->connect(); //If connection fails give error message and exit 

if($obj->is_connected())
{
	// Get Total Number of Unread Email in mail box 
	//$tot = $obj->get_total_emails(); //Total Mails in Inbox Return integer value 

	//echo "Total Mails:: ".$tot."<br>"; 
	
	//This function will only work with IMAP.. If it is POP3 then you have to use "get_total_emails()".
	$unread = $obj->get_unread_emails();
        $all=$obj->get_all_emails();
	
	if(!$all)
	{
		//echo "No  email found.<br>"; 
	}
	else
	{
		//echo "Total Unread E-Mails:: ".count($unread)."<br>"; 
		
		//Displaying all unread emails.
		for($i=0; $i<count($all); $i++) 
		{ 
			$eml_num = $all[$i]; 
			//Return all email header information such as Subject, Date, To, CC, From, ReplyTo. It also return Serialise object from the IMAP for detail use.
			 $st=$obj->get_email_header($eml_num,$results);
                         if($st!=false)
                         {
                             
                         
			//The below function return email body.. If you want Text body from HTML formated email then pass second parameter i.e. $obj->get_email_body($eml_num,'text');
			$obj->get_email_body($eml_num,$results); 
			
                        
                     
			//The below function will store attachment at the path passed in second argument and return Array of file names received.	
			$arrFiles=$obj->get_attachments($eml_num,"inboxfile/"); 
			                                                            

			
                          if($arrFiles)
			{
				foreach($arrFiles as $key=>$value) 
				{      
                                    echo "hllo";
                                    echo $st;
                                    $filelocation="inboxfile/".$value;
                                        $sqt="insert into messagefile values('Inbox','$results','$filelocation','$value','$st')";
                                        mysql_query($sqt);
				}
			}
			// The below function will mark the email as Read in the mail box but commented in example site...
			//$obj->markas_read_email($eml_num);
			$results=$results+1;
                         
			// The below function will delete the email from mail box but commented in example for accidental deletion...
			//$obj->delete_email($eml_num); 
                         }
		} 
	}
}
$obj->close_mailbox(); //Close Mail Box 

}
else
{
 echo '<script type="text/javascript">alert("You Need To Login First");location="index.php";</script>';}
