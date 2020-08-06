<?php

include 'header.php';
include 'connect.php';

?>
<style>
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
    
    
  ul#nav li.current6 a
{ color: #FFF;
  background: #0043A8;
  background: -moz-linear-gradient(#43A9FF, #0043A8);
  background: -o-linear-gradient(#43A9FF, #0043A8);
  background: -webkit-linear-gradient(#43A9FF, #0043A8);  
  text-shadow: none;}
    
</style>
<br>	
    <table>
    <tr>
    <th style="width:50px;"><b>Sr. No.</b></th>
    <th style="width: 100px"><b>To</b></th>
    <th style="width: 100px"><b>Date</b></th>
    <th style="width: 250px"><b>Subject</b></th>
    <th style="width: 50px"><b>File</b></th>
    <th style="width: 100px"><b>Delete Mail</b></th>
</tr>

   
    <?php
if(isset($_SESSION['login_user']))
{
    
    $i=0;
    $ab=$_SESSION['login_user'];
    $sql="select drafts.Messageid,drafts.to,drafts.date,drafts.subject,drafts.Message,messagefile.Filelocation,messagefile.Filename from drafts LEFT JOIN messagefile  ON drafts.Messageid=messagefile.Messageid and messagefile.Box='Drafts' and drafts.from=messagefile.email where drafts.from='$ab' order by date ";
    $result=mysql_query($sql);
    $dor=1;
while($row=mysql_fetch_array($result))
        {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
    $rst=$row['Messageid'];  
    $abs="select * from drafts LEFT JOIN messagefile  ON drafts.Messageid=messagefile.Messageid and messagefile.Box='Drafts' and messagefile.email like '%$ab%' where drafts.from='$ab' and drafts.Messageid='$rst' order by date ";
    $nus=mysql_query($abs);
    $nu=  mysql_num_rows($nus);
 
?>

        
<tr >
    
    <?php if ($dor==1){?><td style="width:50px;"<?php if($dor==1){   ?> rowspan="<?php echo $nu;?>"<?php } ?>><a href="messageshowdrafts.php?mi=<?php echo $row['Messageid'];?>" target="_blank"><?Php if($dor==1){ echo ++$i;}?></a></td><?php } ?>
        <?php if ($dor==1){?><td style="width: 100px" <?php if($dor==1){   ?> rowspan="<?php echo $nu;?>"<?php } ?>><a href="messageshowdrafts.php?mi=<?php echo $row['Messageid'];?>" target="_blank"><?php if($dor==1){echo $row['to'];}?></a></td><?php } ?>
            <?php if ($dor==1){?><td style="width: 100px" <?php if($dor==1){   ?> rowspan="<?php echo $nu;?>"<?php } ?>><a href="messageshowdrafts.php?mi=<?php echo $row['Messageid'];?>" target="_blank"><?php if($dor==1){echo $row['date'];}?></a></td><?php } ?>
    <?php if ($dor==1){?><td style="width: 250px" <?php if($dor==1){   ?> rowspan="<?php echo $nu;?>"<?php } ?> ><a href="messageshowdrafts.php?mi=<?php echo $row['Messageid'];?>" target="_blank"><?php if($dor==1){ echo $row['subject'];}?></a></td><?php } ?>
<td style="width: 50px" ><a href="<?php echo $row['Filelocation'];?>" target="_blank"><?php echo $row['Filename'];?></a></td>
<?php if ($dor==1){?><td style="width: 100px" <?php if($dor==1){   ?> rowspan="<?php echo $nu;?>"<?php } ?>><?php if($dor==1){?><a href="deletemaildrafts.php?mi=<?php echo $row['Messageid'];?>"><input type="button" name="delete" value="Delete"/></a><?php }?></td><?php } ?>

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

