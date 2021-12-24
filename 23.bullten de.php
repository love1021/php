<?php

 error_reporting(0);
 session_start();
 if(!$_SESSION["id"])
 {
     echo "please login first";
     echo"<meta http-equiv=REFRESH content='3, ur1=login.html'>"
 }
 else
 {
    $conn=mysqli_connect("localhost","root","","mydb");
    $sql="delete from  bullten 
    
    
    where id='{$_GET[id]}'";

    if(!mysqli_query($conn,$sql))
    {
        echo "佈告刪除錯誤";

    }
    else
    {
        echo "佈告刪除成功"
    }
    echo "<meta http-equiv=REFRESH content='3, url=bullten.php'>";

 }
 ?>
 <!---刪除布告欄位>