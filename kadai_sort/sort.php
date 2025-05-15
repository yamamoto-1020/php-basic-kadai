<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
          $nums = [15, 4, 18, 23, 10 ];

          function sort_2way($array, $order) { //第1引数にソートをかける配列、第2引数にどちらにソートするか

            if($order === TRUE) { //第2引数の文字列が昇順ならば
              echo "昇順にソートします。<br>";
              sort($array); //配列内　昇順にソート
              foreach($array as $val){  
                echo "{$val}<br>";  //配列内表示
              }
            }else { //第2引数の文字列が降順ならば
              echo "降順にソートします。<br>";
              rsort($array);  //配列内　降順にソート
              foreach($array as $val){
                echo "{$val}<br>";  //配列内表示
              }
            }
          }

          echo sort_2way($nums, TRUE);
          echo sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>