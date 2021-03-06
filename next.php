<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>適正体重の計算</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>
    <?php require_once 'functions.php' ?>
    <div class="container text-center">
      <div class="fs-2 mt-4 border rounded">
        <p>
          <?php echo '現在の体重' . str2html($weight) . 'kg <br>' ?>
        </p>
        <?php if ($weight < $round) : ?>
          <p><?php echo 'あと' . str2html($ideal_weight) . 'kg増量すれば適正体重です。' ?></p>
        <?php else : ?>
          <p><?php echo 'あと' . str2html($ideal_weight) . 'kg減量すれば適正体重です。'; ?></p>
        <?php endif; ?>
      </div>
    </div>

  </body>
</html>
