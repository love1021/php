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
    $sql="delete from user where id='{$_GET[id]}'";

    if(!mysqli_query($conn,$sql))
    {
        echo "使用者刪除錯誤";

    }
    else
    {
        echo "使用者刪除成功，三秒回到網頁";
    }
    echo "<meta http-equiv=REFRESH content='3, url=user.php'>";

 }
 ?>
 <!---使用者刪除成功，並回到布告欄>