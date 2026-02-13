<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>課題_kadai_011</title>
</head>

<body>
  <p>
    <?php
    $vegitable = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
    foreach ($vegitable as $key => $vegi) {
      echo $key . ' : ' . $vegi . '<br>';
    }

    ?>
  </p>
</body>

</html>