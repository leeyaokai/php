<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>coockie counter</title>
</head>
<body>

<?php

if(isset($_POST['submit'])){

setcookie('count'," ",time()-3600);
 echo "清除cookie完畢,3秒後轉跳到原本頁面";
 unset($_POST['submit']);
 header("Refresh:3;url=08-11.php");
 

}else{

  if(isset($_COOKIE['count'])){
      $count =1+$_COOKIE['count'];
      setcookie('count',$count,time()+3600);
      echo "您瀏覽次數為".$count."<br/>"; 
  }else{
        setcookie('count',1,time()+3600);
        echo "您是第一次登入"."<br/>";   
  }
}
  if (!file_exists("counter.txt")) {

      $counter = 0;
      $file = fopen("counter.txt","w");
      fputs($file,$counter);
      fclose($file);
  }else {
      $file = fopen('counter.txt','r+');
      $counter = fread($file,filesize("counter.txt"));
      fclose($file);
  }

  $counter +=1;
  $file = fopen("counter.txt","w+");
  fputs($file,$counter);

  fclose($file);
   $file = fopen('counter.txt','r+');
   $counter = fread($file,filesize("counter.txt"));
   fclose($file);
   echo "瀏覽總人數".$counter."<br/>";
?>
<form action="08-11.php" method="post">  
   <input type="submit" name="submit" value="clean">   
</form>    
</body>
</html>