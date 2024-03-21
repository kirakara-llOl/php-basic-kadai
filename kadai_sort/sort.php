<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>
  <body>
    <p>
      <?php
        // 第2引数に指定したソート方向（昇順／降順）で、第1引数の配列をソートする関数を定義
        function sort_2way($array, $order) {            
          // 引数$orderはTRUE(昇順)か？
          if ($order) {
            // メッセージを表示する
            echo '昇順にソートします。<br>';
            // 引数$arrayを昇順にソート
            sort($array);
          } else {
            // メッセージを表示する
            echo '降順にソートします。<br>';
            // 引数$arrayを降順にソート
            rsort($array);
          }
          // ソートした配列のデータを1行ずつ表示
          foreach ($array as $value) {
            echo $value . '<br>';
          }
        }
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];
        // 昇順ソート
        sort_2way($nums, TRUE);
        // 降順ソート
        sort_2way($nums, FALSE);
      ?>
    </p>
  </body>
</html>
