<?php
$conn=mysqli_connect("localhost","root","","mydb");
$sql="insert into user(id,pwd) values('{$_POST[id]}','{$_POST[id]}')";
mysqli_query($conn, $sql);

echo"新增使用著成功";

?>
<!--在資料表中新增使用者成功>