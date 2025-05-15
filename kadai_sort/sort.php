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
          $ascending = "昇順にソートします。";
          $descending = "降順にソートします。";

          function sort_2way($array, string $order) { //第1引数にソートをかける配列、第2引数にどちらにソートするか
            echo "{$order}<br>";

            if($order === "昇順にソートします。") { //第2引数の文字列が昇順ならば
              sort($array); //配列内　昇順にソート
              foreach($array as $val){  
                echo "{$val}<br>";  //配列内表示
              }
            }else if($order === "降順にソートします。") { //第2引数の文字列が降順ならば
              rsort($array);  //配列内　降順にソート
              foreach($array as $val){
                echo "{$val}<br>";  //配列内表示
              }
            }else { //第2引数の文字列が正しくなければ
              echo "引数の文章が正しくありません。";
            }
          }

          echo sort_2way($nums, $ascending);
          echo sort_2way($nums, $descending);
        ?>
    </p>
</body>

</html>