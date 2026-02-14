<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    function sort_2way($nums, $isAscending)
    {
      $array = $nums;

      if ($isAscending) {
        sort($array);
      } else {
        rsort($array);
      }

      return $array;
    }

    // ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10];

    $order = sort_2way($nums, true);
    echo '昇順にソートします。' . '<br>';
    foreach ($order as $element) {
      echo $element . '<br>';
    }
    $order = sort_2way($nums, false);
    echo '降順にソートします。' . '<br>';
    foreach ($order as $element) {
      echo $element . '<br>';
    }
    ?>
  </p>
</body>

</html>