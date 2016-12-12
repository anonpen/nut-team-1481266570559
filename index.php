<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>HTML+CSS</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <h1>HTML+CSS Graph</h1>
    <div class="bar">
      <p class="bar_over"></p>
      <p class="bar_under"></p>
    </div>
  </body>
</html>

<?php

echo "Hello PHP!";　

$link = mysql_connect('us-cdbr-iron-east-04.cleardb.net:3306', 'b56f633bf4a00f', 

'079a2d1a');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

print('<p>接続に成功しました。</p>');

// MySQLに対する処理

$close_flag = mysql_close($link);

if ($close_flag){
    print('<p>切断に成功しました。</p>');
}

?>
