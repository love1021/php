<html>
    <head><title>新增布告</title></head>
    <body>
        <form method=post action=bulletin_add.php>
            標    題: <input type=text name=title><br>
            內    容: <br><textarea name=content rows=20 colse=20></textarea><br>
            布告類型: <input tyoe=radio name=type value=1>系上公告
                     <input tyoe=radio name=type value=2>獲獎資訊  
                     <input tyoe=radio name=type value=3>徵才資訊 <br>
            發布時間: <input type=date name=time><p></p>   
            <input type=submit value=新增布告> <input type=reset value=清除>      




        </form>
    </body>
</html>
<!--在佈告欄新增佈告標題以及時間類型以及公告資訊>