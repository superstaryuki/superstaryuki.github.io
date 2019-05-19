    <?php
    ini_set('display_errors', true);
    error_reporting(E_ALL);
    
    require_once(".\PHPMailer\src\PHPMailer.php");
    use PHPMailer\PHPMailer\PHPMailer;
    
    $to='superstaryuki@gmail.com';
    $subject=$_POST['ireply'];
    $body=$_POST['idetail'];
    $from='superstaryuki@gmail.com';
    $fromname=$_POST['iname'];

    $mail=new PHPMailer();
    
    $mail->CharSet="iso-2022-jp";
    $mail->Encoding="7bit";

    $mail->IsSMTP();      //SMTPサーバの使用
    $mail->SMTPDebug = 1; //デバッグ
    $mail->SMTPAuth = TRUE; //SMTP認証の使用
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'superstaryuki@gmail.com';
    $mail->Password = 'yyuukkii0711'; 
    $mail->Port=465;
    
    $mail->AddAddress($to);
    $mail->From = $from;
    $mail->FromName = mb_encode_mimeheader(mb_convert_encoding($fromname,"JIS","UTF-8"));
    $mail->Subject = mb_encode_mimeheader(mb_convert_encoding($subject,"JIS","UTF-8"));
    $mail->Body = mb_convert_encoding($body,"JIS","UTF-8");

    //メールを送信
    $mail->Send();
    ?>
