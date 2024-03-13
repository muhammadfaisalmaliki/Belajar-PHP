<?php

$nilai= array (80,78,72,84,92,88);
$angka= implode(',' ,$nilai);
echo "nilai saya : $angka";
echo "<br>";

$nilaiterkecil= min($nilai);
echo "nilai terkecil : $nilaiterkecil";
echo "<br>";

$nilaiterbesar= max($nilai);
echo "nilai terbesar : $nilaiterbesar";
echo "<br>";

function nilaiterkecil ($nilai){
asort($nilai);
$terkecil= implode(',' ,$nilai);
echo "diurutkan dari yang terkecil : $terkecil";
echo "<br>";
}
nilaiterkecil ($nilai);

function nilaiterbesar ($nilai){
arsort($nilai);
$terbesar= implode(',' ,$nilai);
echo "diurutkan dari yang terbesar : $terbesar";
echo "<br>";
}
nilaiterbesar ($nilai);

$rata= array_sum ($nilai);
$count= count($nilai);
$hitung= $rata / $count;
echo "rata rata : $hitung";
echo "<br>";

$nilai[2] = 75;
$nilaiterbaru = implode (',' ,$nilai);
echo "nilai sekarang : $nilaiterbaru";

?>