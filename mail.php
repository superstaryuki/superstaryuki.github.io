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

      mail($to, $iname,$idetail, $ireply);
    ?>
  </body>
</html>
