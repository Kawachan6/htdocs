<html>
<head>
<meta charset="utf-8">
<title>データ表示</title>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid black;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
}
</style>
</head>
<body>

<h1>登録データ一覧</h1>

<table>
  <tr>
    <th>日時</th>
    <th>お名前</th>
    <th>EMAIL</th>
    <th>配送先住所</th>
    <th>サイズ</th>
  </tr>

<?php
$lines = file("data/data.txt"); // ファイルを行ごとに配列に読み込む

foreach ($lines as $line) {
  $data = explode(",", $line); // 行をカンマで分割してデータを配列にする

  // データがすべて揃っている場合のみ表示
  if (count($data) === 5) {
    $datetime = $data[0];
    $name = $data[1];
    $mail = $data[2];
    $adress = $data[3];
    $size = $data[4];

    echo "<tr>";
    echo "<td>" . $datetime . "</td>";
    echo "<td>" . $name . "</td>";
    echo "<td>" . $mail . "</td>";
    echo "<td>" . $adress . "</td>";
    echo "<td>" . $size . "</td>";
    echo "</tr>";
  }
}
?>

</table>

<ul>
<li><a href="post.php">データ入力に戻る</a></li>
</ul>

</body>
</html>
