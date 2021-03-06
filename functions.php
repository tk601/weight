<?php
  function str2html(string $string) :string {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
  }

  $height = (float)$_POST['height'];
  $weight = (float)$_POST['weight'];

  if (!((0 < $height) && ($height < 300))) {
    echo '身長を正しく入力してください。';
    exit;
  }

  if (!((0 < $weight) && ($weight < 500))) {
    echo '体重を正しく入力してください。';
    exit;
  }

//適正体重の計算
  $appropriate_weight = $height * $height * 22 / 10000;
  $round = round($appropriate_weight,1);

//理想の体重まで
  $ideal_weight = abs($weight - $round);

?>
