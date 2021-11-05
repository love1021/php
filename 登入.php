?php
   #mysqli_connect() 建立資料庫鏈接
   $ conn = mysqli_connect ( "localhost" , "root" , "" , "mydb" );
   #mysqli_query() 從資料庫查詢資料
   $ result = mysqli_query ( $ conn , "select * from user" );
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆出來
   $登錄=假；
   while ( $ row = mysqli_fetch_array ( $ result )) {
     if (( $ _POST [ "id" ]== $ row [ "id" ]) && ( $ _POST [ "pwd" ]== $ row [ "pwd" ])) {
       $登錄=真；
     }
   } 
   如果( $登錄== TRUE ) {
    session_start ();
    $ _SESSION [ "id" ]= $ _POST [ "id" ];
    迴聲 “歡迎！！” ;
    echo  "<meta http-equiv=REFRESH content='3, url=bulletin.php'>" ;
   }

  其他{
    echo  "id/pwd 錯誤！！" ;
    echo  "<meta http-equiv=REFRESH content='3, url=login.html'>" ;
  }
?>