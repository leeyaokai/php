<?php
//   var_dump($_POST['ans']);
//   var_dump($_POST['interest']);
 

  echo "<h1>名字:".$_COOKIE['Name']."</h1><br/>";
  echo "<h1>密碼:".$_COOKIE['password']."</h1><br/>";
  echo "<h1>日期:".$_COOKIE['date']."</h1><br/>";
  echo "<h1>職業:".$_COOKIE['Job']."</h1><br/>";


  foreach ($_POST['interest'] as $key => $value){
      if ($key==0) {
          echo "<h1>興趣:".$value;
      }else {
          echo ",".$value;
      }
  }
  echo "</h1>";

?>