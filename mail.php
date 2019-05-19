<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
  //Gmail 認証情報
  $host = 'smtp.gmail.com';
  $username = 'superstaryuki@gmail.com'; // アカウント
  $password = '**********'; //パスワード

  //差出人
  $username = 'superstaryuki@gmail.com';
  $fromname = '$_POST['iname']';

  //宛先
  $to = 'superstaryuki@gmail.com';
  $toname = '管理人へ';

  //件名・本文
  $subject=$_POST['ireply'];
  $body=$_POST['idetail'];

  //メール設定
  $mail->SMTPDebug = 2; //デバッグ用
  $mail->isSMTP();//SMTPサーバの使用
  $mail->SMTPAuth = true;//SMTP認証の使用
  $mail->Host = $host;
  $mail->Username = $username;
  $mail->Password = $password;
  $mail->SMTPSecure = 'tls';//暗号化
  $mail->Port = 465;//SMTP ポート
  $mail->CharSet = "utf-8";
  $mail->Encoding = "base64";
  $mail->setFrom($from, $fromname);
  $mail->addAddress($to, $toname);
  $mail->Subject = $subject;
  $mail->Body    = $body;

  //メール送信
  $mail->send();
  echo '成功';

} catch (Exception $e) {
  echo '失敗: ', $mail->ErrorInfo;
}
?>
