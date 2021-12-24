<html>
<head><title>修改使用者</title></head>
<body>
<?php
    $conn=mysqli_connect("localhost","root","","mydb");
    $result=mysqli_query($conn,"select * from user where id='{$_GET[id]}'");
    $row=mysqli_fetch_array($result);
    echo "
    <fotm method=post action=user_edit.php>
    <input type=hidden name=id value={$row[id]}>
    帳號: {$row[id]}<br>
    密碼: <input type=text name=pwd value={$row[pwd]}><p></p>
    <input type=submit value=修改>
    </fotm>";

    ?>


</body>


</html>
    
<!---刪除後新增使用者並修改，將原本帳戶帳號密碼>
    



   
    
    
   