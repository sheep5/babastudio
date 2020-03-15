<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Latihan 3</title>
</head>

<body>
<?php
  echo "<h2>Proses Matematika Dasar</h2>";
  $nilai1=10;
  $nilai2=5;
  $hasil=$nilai1+$nilai2;
  echo "Hasil <strong>penjumlahan</strong> $nilai1 dan $nilai2 adalah $hasil. <br>";
  $hasil=$nilai1-$nilai2;
  echo "Hasil <strong>pengurangan</strong> $nilai1 dan $nilai2 adalah $hasil. <br>";
  $hasil=$nilai1*$nilai2;
  echo "Hasil <strong>perkalian</strong> $nilai1 dan $nilai2 adalah $hasil. <br>";
  $hasil=$nilai1/$nilai2;
  echo "Hasil <strong>pembagian</strong> $nilai1 dan $nilai2 adalah $hasil. <br>";
  $hasil=$nilai1%$nilai2;
  echo "<h2>Proses Matematika Lebih Lanjut</h2>";
  $hasil=$nilai1%$nilai2;
  echo "Hasil <strong>sisa bagi</strong> $nilai1 dan $nilai2 adalah $hasil. <br>";
?>
</body>
</html>