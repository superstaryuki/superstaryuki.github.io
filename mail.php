<html>
  <head>
  <meta charset="utf-8">
  </head>
  <body>
    <?php
    require_once(".\PHPMailer\src\PHPMailer.php");
    mb_internal_encoding("UTF-8");

    $to='superstaryuki@gmail.com';
    $subject=$_POST['ireply'];
    $body=$_POST['idetail'];
    $from='superstaryuki@gmail.com';
    $fromname=$_POST['iname'];

    $mail=new PHPMailer();
    $mail->CharSet="iso-2022-jp";
    $mail->Encoding="7bit";

    $mail->IsSMTP();      //SMTPサーバの使用
    $mail->SMTPAuth=TRUE; //SMTP認証の使用
    $mail->Host='smtp.gmail.com:465';
    $mail->Username='superstaryuki@gmail.com';
    $mail->Username='yyuukkii0711';

    $mail->AddAddress($to);
    $mail->From = $from;
    $mail->FromName = mb_encode_mimeheader(mb_convert_encoding($fromname,"JIS","UTF-8"));
    $mail->Subject = mb_encode_mimeheader(mb_convert_encoding($subject,"JIS","UTF-8"));
    $mail->Body = mb_convert_encoding($body,"JIS","UTF-8");

    //メールを送信
    $mail->Send();
    ?>




  </body>
</html>
