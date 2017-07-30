<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    this is my first time use github
</body>
</html>

<?php

$userlist = "a@google.com,b@google.com,c@google.com";
$splitUser = explode(",",$userlist);
$data=[];
foreach ($splitUser as $key => $value){
  $data["$value"] = substr($value,0,strpos($value,'@'));
};

// $data["appl1"] ='1a';
// $data["lii"] ='2a';

var_dump($data);
?>
