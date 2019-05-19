<html>
  <head>
  <meta charset="utf-8">
  </head>
  <body>
    <?php
      mb_language("Japaneses");
      mb_internal_encoding("UTF-8");

      $to='superstaryuki@gmail.com';
      $iname=$_POST['iname'];
      $idetail=$_POST['idetail'];
      $ireply=$_POST['ireply'];

      if(mb_send_mail($to, $iname,$idetail, $ireply)){
        echo "メールを送信しました"
      }else{
        echo "メール送信に失敗しました"
      };
    ?>
  </body>
</html>
