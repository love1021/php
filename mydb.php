<?php
#mysqli_connect()建立資料庫連結
$conn=mysqli_connect("localhost","root""mydb");

#mysql_query() 從資料庫查詢資料
$result=mysql_query($conn,"select*from user");

#mysql_fetch_array() 從查詢出來的資料一筆筆都出來ㄌ
$row=mysql_fetch_array($result)){
    echo $row["id"]"".Srow["pwd"]
}
?>
<!-----建立資料庫連結以及查詢>