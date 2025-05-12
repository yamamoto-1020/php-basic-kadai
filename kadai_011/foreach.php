<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
        $user_names = ['名前' => '玉ねぎ','値段' => '200','産地' => '北海道'];  //連想配列にキーと値を代入

        foreach ($user_names as $key => $value) { //foreach文で連想配列文出力
          echo $key. '：'. $value. '<br>';  //キーと値を出力し改行する。
        }
      ?>
    </p>
  </body>

</html>