 <?php   
     ob_start();
     session_start();
             if(isset($_SESSION['login_user']))
{?>
<script>
function move(x) {
  var elem = document.getElementById("myBar"+x);
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }                                                                                                                                                                                                                                                               
  }
}


</script> 


    <body>

    <?php for($i=0;$i< $_SESSION['nooffile'];$i++)
    {
        $r=$i+1;?>
        <style>
    
#myProgress<?php echo $i;?> {
  position: relative;
  width: 50%;
  height: 20px;
  background-color: #ddd;
}

#myBar<?php echo $i;?> {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: #4CAF50;
}
    </style>
        
            <div id="myProgress<?php echo $i;?>">
          <div id="myBar<?php echo $i;?>"></div>
        </div>

        <b><p style="font-size: 15px;color: blue;"><?php echo "Recording $r  upload complete"; ?></p></b>
        <br>
        <script>
            move(<?php echo $i;?>);
            </script>
        <?php 
    }
}
else
{
    header("location:index.php");
}
    ?>

</body> 