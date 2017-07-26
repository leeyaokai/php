<?php
//   var_dump($_POST['ans']);
//   var_dump($_POST['interest']);
  $data = explode(",",$_POST['ans']);

  echo "<h1>名字:".$data[0]."</h1><br/>";
  echo "<h1>密碼:".$data[1]."</h1><br/>";
  echo "<h1>日期:".$data[2]."</h1><br/>";
  echo "<h1>職業:".$data[3]."</h1><br/>";


  foreach ($_POST['interest'] as $key => $value){
      if ($key==0) {
          echo "<h1>興趣:".$value;
      }else {
          echo ",".$value;
      }
  }
  echo "</h1>";

?>