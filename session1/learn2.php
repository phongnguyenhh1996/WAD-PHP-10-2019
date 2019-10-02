<?php
  echo "<h2>BT2</h2>";
  function dateToString($n) {
    if ($n == 2) {
      $result = "Thứ hai";
    } else if ($n == 3) {
      $result = "Thứ ba";
    } else if ($n == 4) {
      $result = "Thứ tư";
    } else if ($n == 5) {
      $result = "Thứ năm";
    } else if ($n == 6) {
      $result = "Thứ sáu";
    } else if ($n == 7) {
      $result = "Thứ bảy";
    } else if ($n == 8) {
      $result = "Chủ nhật";
    } else {
      $result = "Số nhập vào không hợp lệ";
    }
    echo $result;
  };
  dateToString(8);
  echo "<br>";
  echo "<h2>BT4</h2>";
  for ($i=1; $i < 100; $i++) { 
    if ($i % 6 == 0) {
      echo "$i chia hết cho 6 <br>";
    } else {
      if ($i % 2 == 0) {
        echo "$i chia hết cho 2 <br>";
      } 
      if ($i % 3 == 0) {
        echo "$i chia hết cho 3 <br>";
      }
    }  
    if ($i % 6 !== 0 && $i % 3 !== 0 && $i % 2 !== 0) {
        echo "$i không chia hết cho 2, 3, 6 <br>";
    }
  }
  echo "<h2>BT5</h2>";
  $binh = 27;
  $minh = $binh / 3;
  $count = 0;
  while ($binh != $minh*2) {
    $binh-= 1;
    $minh+= 1;
    $count+= 1;
  }
  echo "Bình chuyển cho Minh $count cuốn sách";
  echo "<h2>BT6</h2>";
  $money = 2000;
  $candy = 0;
  while ($money / 200 >= 1) {
    $money = $money - 200;
    $candy+= 1;
    if ($candy % 2 == 0) {
      $candy+= 1;
    }
  }
  echo "Số kẹo mua được là $candy";
  echo "<h2>BT7</h2>";
  $candy = 0;
  $usd = 250;
  $euro = 0;
  while ($candy < 50) {
    if ($euro == 6 ) {
      $usd += ($euro / 2)*3;
      $candy += $euro / 2;
      $euro = 0;
    } else {
      $usd -= 5;
      $euro += 3;
      $candy += 1;
    }
  }
  echo "Số USD để mua $candy viên kẹo là là :" . (250 - $usd);
  echo "<h2>BT8</h2>";
  $biXanh = 0;
  $biDo = 0;
  while ($biXanh*2/5 + $biDo*3/4 != 27) {
    $biXanh += 1;
    $biDo = 50 - $biXanh;
  }
  echo "Số bi xanh là $biXanh, bi đỏ là $biDo";
  echo "<h2>BT9</h2>";
  $biDo = 120 / 5 ;
  $biXanh = 120 * 30 / 100;
  $biVang = 1;
  $biTrang = 0;
  while (3*$biTrang !== 7*$biVang) {
    $biVang += 1;
    $biTrang = 120 - ($biDo + $biXanh + $biVang);
  }
  echo "Số bi xanh là $biXanh, bi đỏ là $biDo, bi vàng là $biVang, bi trắng là $biTrang";
  echo "<h2>BT10</h2>";
  echo "<table style='border: 1px solid #000'>";
  for ($i=1; $i <=8 ; $i++) { 
    echo "<tr>";
    for ($j=1; $j <= 8 ; $j++) { 
      if (($j - $i % 2) % 2 != 0) {
        $cell = "<td style='background: #000; width: 30px; height: 30px;'></td>";
      } else {
        $cell = "<td style='background: #fff; width: 30px; height: 30px;'></td>";
      }
      echo $cell;
    }
    echo "</tr>";
  }
  echo "</table>";
  echo "<h2>BT11</h2>";
  $count = 0;
  $n = 4;
  for ($i=1; $i <= $n; $i++) { 
    for ($j=1; $j <= $n; $j++) { 
      if ($j <= $i) {
        $count += 1;
        echo "$count ";
      }
    }
    echo "<br/>";
  }
  echo "<h2>BT12 (Chưa xong, ra tào lao)</h2>";
  $n = 5;
  $middle = round($n / 2, 0, PHP_ROUND_HALF_DOWN) + 1;
  for ($i=1; $i <= $n; $i++) { 
    for ($j=1; $j <= $n; $j++) { 
      if ($i == 1 && $j == $middle) {
        echo "*";
      } else if ($j >= $middle - $i && $j <= $middle + $i) {
        echo "*";
      } else {
        echo "&nbsp;";
      }
    }
    echo "<br/>";
  }
?>