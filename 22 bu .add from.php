<?php
        error_reporting(0)
        session_start();
        if(!$_SESSION["Id]){
          echo"請登入帳號;
          echo"<meta http-equiv=REFRESH content='3,url=logim.html'>";
        }
        else{
            $conn=mysqli_connect("localhost","root","mydb");
            $result=mysqli_query($conn,"select *from bulletin where bid={$_GET[bid]}")
        }    $row=mysqli_fetch_array($result);


          echo"
          <html>
              <head><title>新增布告</title></head>
              <body>
                  <form method=post action=bulletin_add.php>

                      佈告編號{$row[''bid]}<br>
                      標    題: <input type=text name=title><br>
                      內    容: <br><textarea name=content rows=20 colse=20></textarea><br>
                      布告類型: <input tyoe=radio name=type value=1>系上公告
                               <input tyoe=radio name=type value=2>獲獎資訊  
                               <input tyoe=radio name=type value=3>徵才資訊 <br>
                      發布時間: <input type=date name=time>value={$row['time']}<p></p>   
                      <input type=submit value=新增布告> <input type=reset value=清除>      
          
          
          
          
                  </form>
              </body>
          </html>

?>
<!登入帳號，新增布告欄標題類型及其他公告資訊>