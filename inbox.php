<style>
      ul#nav li.current2 a
    { color: #FFF;
      background: #0043A8;
      background: -moz-linear-gradient(#43A9FF, #0043A8);
      background: -o-linear-gradient(#43A9FF, #0043A8);
      background: -webkit-linear-gradient(#43A9FF, #0043A8);  
      text-shadow: none;}
    
    
     table,th,td{
        border: 2px solid black;
        text-align: center;
        color: black;
        font-size: 16px;
    }
    
    table{
        border-collapse:collapse;
        width: 100%;
    }
    
    th{
        height: 50px;
        
    }
    
</style>
<?php
error_reporting(E_ERROR | E_PARSE);

include 'example.php';
include 'header.php';
include 'connect.php';
?>
<br>
    <table>
    <tr>
    <th style="width:50px;"><b>Sr. No.</b></th>
    <th style="width: 100px"><b>From</b></th>
    <th style="width: 100px"><b>Date</b></th>
    <th style="width: 250px"><b>Subject</b></th>
    <th style="width: 50px"><b>File</b></th>
    <th style="width: 100px"><b>Options</b></th>
</tr>

   
    <?php
if(isset($_SESSION['login_user']))
{
    $st=$_SESSION['login_user'];
    $str='<'.$_SESSION['login_user'].'>';
?>

<?php

    $i=0;
    $ab=$_SESSION['login_user'];
    $sql="select inbox.Messageid,inbox.fromemail,inbox.fromname,inbox.date,inbox.subject,inbox.message,messagefile.Filelocation,messagefile.Filename from inbox LEFT JOIN messagefile  ON inbox.Messageid=messagefile.Messageid and messagefile.Box='Inbox' and inbox.toemail=messagefile.email where inbox.toemail = '$st' or inbox.toemail like '%$str%' order by date ";
    $result=mysql_query($sql);
    
    $dor=1;
while($row=mysql_fetch_array($result))
        {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
    $rst=$row['Messageid'];  
    $abs="select * from inbox LEFT JOIN messagefile  ON inbox.Messageid=messagefile.Messageid and messagefile.Box='Inbox' and inbox.toemail=messagefile.email where inbox.toemail = '$st' or inbox.toemail like '%$str%' and inbox.Messageid='$rst' order by date ";
    $nus=mysql_query($abs);
    $nu=  mysql_num_rows($nus);
 
?>

        
<tr >
    
<?php if ($dor==1){?><td style="width:50px;"<?php if($dor==1){   ?> rowspan="<?php echo $nu;?>"<?php } ?>><a href="messageshow.php?mi=<?php echo $row['Messageid'];?>" target="_blank"><?Php if($dor==1){ echo ++$i;}?></a></td><?php } ?>
<?php if ($dor==1){?><td style="width: 100px" <?php if($dor==1){   ?> rowspan="<?php echo $nu;?>"<?php } ?>><a href="messageshow.php?mi=<?php echo $row['Messageid'];?>" target="_blank"><?php if($dor==1){echo $row['fromname'];echo "\n";  echo $row['fromemail']; }?></a></td><?php } ?>
<?php if ($dor==1){?><td style="width: 100px" <?php if($dor==1){   ?> rowspan="<?php echo $nu;?>"<?php } ?>><a href="messageshow.php?mi=<?php echo $row['Messageid'];?>" target="_blank"><?php if($dor==1){echo $row['date'];}?></a></td><?php } ?>
    <?php if ($dor==1){?><td style="width: 250px" <?php if($dor==1){   ?> rowspan="<?php echo $nu;?>"<?php } ?> ><a href="messageshow.php?mi=<?php echo $row['Messageid'];?>" target="_blank"><?php if($dor==1){ echo $row['subject'];}?></a></td><?php } ?>
<td style="width: 50px" ><a href="<?php echo $row['Filelocation'];?>" target="_blank"><?php echo $row['Filename'];?></a></td>

    <?php if ($dor==1){?><td style="width: 100px" <?php if($dor==1){   ?> rowspan="<?php echo $nu;?>"<?php } ?>><?php if($dor==1){?><a href="deletemailinbox.php?mi=<?php echo $row['Messageid'];?>"><input type="button" name="delete" value="Delete"/></a><a href="reply.php?mi=<?php echo $row['Messageid'];?>&Box=inbox"  style="margin-left: 10px;"><input type="button" name="reply" value="Reply"/></a><?php }?></td><?php } ?>

</tr>   

<?php
$dor++;
if($dor>=$nu+1)
{
    $dor=1;
}
}
?>
  </table>
        
</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
        
  <?php
  
}
else
{
          echo '<script type="text/javascript">alert("You Need To Login First");location="index.php";</script>';
}
include 'footer.php';