<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       $vegetable_names = ['名前'=>'玉ねぎ','値段'=>200,'産地'=>'北海道'];

       //  配列$vegetable_namesの要素を1つずつ順番に出力する
       foreach ($vegetable_names as $key => $value) {
           echo "{$key}:{$value}<br>";
       }
       ?>
   </p>
</body>

</html>