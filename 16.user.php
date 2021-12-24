<html>
    <head><title>使用者管理</title></head>

    <body>
    <?php    
    error_reporting(0);
    session_start();
    if(!$_SESSION["id"])
    {
        echo "please login first";
        echo"<meta http-equiv=REFRESH content='3, ur1=login.html'>";


    }
    else
    {
        echo"
        <h1>使用者管理</h1>
        [<a href=bulletin.php>回布告欄列表</a>]<br>
        <table border=1>
         <tr><td></td><td>帳號</td><td>密碼</td></tr>

         ";



       

        
            $conn=mysqli_mysqli_connect("localhost","root","",mydb);
            $result=mysqli_query($conn,"select * from user");
            while ($row=mysqli_fetch_array($result))
            {
                echo "<tr><td><a href=delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo"</table>";

            
    }
    


    ?>


    

    </body>


</html>

<!---建立使用者管理和密碼，並增加刪除功能，並回布告欄>