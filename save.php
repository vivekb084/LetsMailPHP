<?php
ini_set('upload_max_filesize', '15M');
include 'connect.php';
    ob_start();
session_start();
$r=$_SESSION['login_user'];
$results=$_SESSION['$rst'];

foreach(array('video', 'audio') as $type) {
    if (isset($_FILES["${type}-blob"])) {

        $fileName = $_POST["${type}-filename"];
        $uploadDirectory = "uploads/$fileName";

        if (!move_uploaded_file($_FILES["${type}-blob"]["tmp_name"], $uploadDirectory)) {
            echo("problem moving uploaded file");
        }
        else
        {
              $sql = "INSERT INTO messagefile VALUES ('Sent','$results','$uploadDirectory', '$fileName','$r')";
                            mysql_query($sql);
                            $_SESSION['nooffile']=$_SESSION['nooffile']+1;
        }

    }
}
