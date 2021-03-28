<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
  </head>

  <body>
      <?php 
      $isFilledAll = 
      isset($_POST['name']) && $_POST['name'] != '' &&
      isset($_POST['section']) && $_POST['section'] != '' &&
      isset($_POST['card']) && $_POST['card'] != '' &&
      isset($_POST['card_type']) && $_POST['card_type'] != '';

      if($isFilledAll){
        include("success.php");
      }else {
        include("error.php");
      }
      ?>
  </body>
</html>