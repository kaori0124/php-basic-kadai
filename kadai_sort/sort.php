<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];
        function sort_2way(array $array, bool $order) {
          // ソート処理（昇順 or 降順）
          if ($order) {
              // 昇順ソート
              sort($array); 
          } else {
              // 降順ソート
              rsort($array); 
          }
          
          // 結果を1行ずつ表示
          foreach ($array as $num) {
              echo $num. "<br>";
          }
      }
      
      // テスト用配列
      $array = [15, 4, 18, 23, 10];
      
      // 昇順でソートして表示
      echo "昇順にソートします。<br>";
      sort_2way($array,true);

      
      
      // 降順でソートして表示
      echo "降順にソートします。<br>";
      sort_2way($array, false);
      ?>
    </p>
</body>

</html>