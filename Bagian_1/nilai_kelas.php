<?php
$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";

function nilaiRataRata($nilai)
{
  $array = explode(" ", $nilai);
  if (count($array)) {
    $average = array_sum($array) / count($array);
    return $average;
  }
}

function rangkingNilaiTertinggi($nilai)
{
  $array = explode(" ", $nilai);
  $nilai_int = array_map('intval', $array);
  rsort($nilai_int);
  echo "2. 7 Nilai Tertinggi = <br>";
  for ($i = 0; $i < 7; $i++) {
    echo '&nbsp&nbsp&nbsp&nbsp';
    echo $i + 1 . '. ' . $nilai_int[$i] . '<br>';
  }
}

function rangkingNilaiTerendah($nilai)
{
  $array = explode(" ", $nilai);
  $nilai_int = array_map('intval', $array);
  sort($nilai_int);
  echo "2. 7 Nilai Terendah = <br>";
  for ($i = 0; $i < 7; $i++) {
    echo '&nbsp&nbsp&nbsp&nbsp';
    echo $i + 1 . '. ' . $nilai_int[$i] . '<br>';
  }
}

// 1. Nilai Rata-rata
echo "1. Nilai Tertinggi = " . nilaiRataRata($nilai);
echo '<br />';
// 2. 7 Nilai Tertinggi
rangkingNilaiTertinggi($nilai);
echo '<br />';
// 3. 7 Nilai Terendah
rangkingNilaiTerendah($nilai);
