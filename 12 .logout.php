<?php
  session_start();
  unset($_SESSION["id"]);
  echo "登出成功~~~"
  echo"<meta http-equiv=REFRESH content='3, ur1=login.html'>"
  ?>
  <!--上面例子會讓網頁在載入 3 秒後，自動跳轉到login.html-->