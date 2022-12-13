<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
      echo "不正なリクエストです";
      echo '<a href="http://localhost:3000/index.php">トップへ</a>';
      exit;
    }

    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    if ($email == "taro@example.com" && $password == "Hogeh0ge") {
      echo "ログイン成功";
    } else {
      header('Location: http://localhost:3000/index.php');
    }
  ?>
  <a href="http://localhost:3000/index.php">トップへ</a>
  </body>
</html>
