<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sendmail</title>
</head>

<body>
    <h2>讀取email list(users.txt)</h2>
    <?php
    $file = 'users.txt';
    if(file_exists($file)){
        $fp = fopen($file,"r");
        $contents = fread($fp,filesize($file));
        $splitUser = explode("\r\n",$contents);
        // var_dump($splitUser);
        $userlist = implode(";",$splitUser);  //結合字串
        $userlist = substr($userlist,0,strlen($userlist)-1); //去除最後一位
        echo "<h3>收件者:"." ".$userlist."</h3>";
        fclose($fp);
    }else{
        echo "檔案不存在";
    }
      
    ?>

    <h2>讀取email 信件內容(body.txt)</h2>
     <h2>信件內容 如下:</h2>
     <?php
    $file = 'body.txt';
    if(file_exists($file)){
        $fp = fopen($file,"r");
        $contents = fread($fp,filesize($file));
        $contentstobr = nl2br($contents);
        // echo "<pre>"; //html5 標籤可以直接將/n 轉為 <br/>
        echo "<h2>".$contentstobr."</h2>"; //讀取檔案並顯示
        // echo "</pre>";
        fclose($fp);
    
    }else{
        echo "檔案不存在";
    }

     ?>
<form action="sendmail.php" method="POST">

<input type="hidden" name="userlist" value="<?php echo $userlist; ?>">
<input type="hidden" name="content" value="<?php echo $contentstobr; ?>">
<input type="submit" name="submit" value="確認送出">
    
</form>
    

    

</body>

</html>