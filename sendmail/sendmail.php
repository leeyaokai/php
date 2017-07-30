<?php
require_once ("PHPMailer-master/PHPMailerAutoload.php"); //引入phpMailer
$mail = new PHPMailer(); //初始化一個phpMail 物件
$mail -> Host = "smtp.gmail.com"; //SMTP mail 主機 以google 為例
$mail -> IsSMTP(); //設定使用SMTP方式寄信
$mail -> SMTPAuth = true; //啟用SMTP驗證
$mail -> Username ="lyaokai@gmail.com"; //申請gmail 的帳號
$mail -> Password = '********'; //申請gmail 帳號密碼
$mail -> SMTPSecure ="ssl"; //使用SSL 連線
$mail -> Port = 465; //Gmail 的SMTP 主機的port 為 465
$mail -> CharSet = "utf-8"; //郵件編碼
$mail -> From = "lyaokai@gmail.com"; //寄件者信箱
$mail -> FromName = "test"; //寄信者名字

$splitUser = explode(";",$_POST['userlist']);
$mailUserdata=[];
foreach ($splitUser as $key => $value){
  $mailUserdata["$value"] = substr($value,0,strpos($value,'@'));
};

foreach ($mailUserdata as $item => $mailUser){
    $mail -> AddAddress($item,$mailUser);
}

$mail -> IsHTML(true); //是否可以使用html方式寄信

$mail -> Subject = "測試"; //主址
$mail -> Body = $_POST['content']; //內容
$mail -> AltBody = "當收件人不支援電子信箱為Html 時會顯示這串 ~~"; //註解
if(!$mail -> send()){
    echo "信件發送失敗";
    echo "Mailer Error:". $mail -> ErrorInfo;
}else{
    echo "信件已發送";
}
?>
 