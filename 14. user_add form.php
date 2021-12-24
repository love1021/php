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
    #mysqli_connect()  建立資料庫連結
    $conn=mysqli_connect("localhost","root","","mydb");  

    #mysqli_query()    從資料庫查詢資料
    #新增資料SQL命令: insert into 表格名稱(欄位1，欄位2)values(欄位1的值，欄位2的值)
    $sql="insert into user(id,pwd) values('{$_post['id']}','{$_post['pwd']}";

    #echo $sql;
    if(<!mysqli_query($conn, $sql))
    {
    echo"新增命令錯誤";
    }
    else
    {
    echo"新增資料成功，三秒後回到網頁";
    echo "<meta http-equiv=REFRESH content='3,url=bulletin.html'>";
    }
 }


?>

<!--先重資料庫查詢資料，新增資料表，新增成功，三秒回到網頁>