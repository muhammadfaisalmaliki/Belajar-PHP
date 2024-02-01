<!-- $age = 23;
jika $age >= 17 maka buat ktp selain itu belum cukup umur

$umur = 45;
jika $umur >= 25, maka dewasa
jika $umur >= 12, maka remaja
jika $umur >= 5, maka anak2,selain itu balita -->

<!-- no 1 -->
<?php
$umur = 20;
$boleh = $umur >= 17 ? "boleh buat ktp" : "gak boleh";

echo "$boleh";
echo "<hr>";

?>

<!-- no2 if else-->
<?php

$umur = 50;

if($umur >= 25){

    echo "maka dewasa";

}else if ($umur >= 12){

    echo "maka remaja";

}else if ($umur >= 5){

    echo "masih anak2";

}else {

    echo "maka balita";
    echo "<hr>";
}

?>

<!-- no 2 turnery -->
<?php
echo "<hr>";
$umur = 5;
$boleh = $umur >= 25 ? "maka dewasa" : ($umur >= 12 ? "maka remaja" : ($umur >= 5 ? "masih anak2" : "masih balita"));

echo "$boleh";
echo "<hr>";

?>

<!-- $grade = 85;
jika $grade > 90 maka grade a
jika $grade > 80 maka grade b
jika $grade > 70 maka grade c
jika $grade <= 70 maka grade d -->

<!-- no3 ternary -->
<?php

$grade = 95;
$hasil = $grade > 90 ? "maka grade a" : ($grade > 80 ? "maka grade b" : ($grade > 70 ? "maka grade c" : "maka grade d"));

echo "$hasil";
echo "<hr>";

?>

<!-- dpk 70
mtk 87
agama 80
jika $mean >= 90 maka sangat bagus
jika $mean >= 85 maka bagus
jika $mean >= 80 maka sangat baik
jika $mean >= 70 maka baik
jika $mean < maka kurang baik -->

<!-- no4 turnery -->
<?php

$dpk = 90;
$mtk = 90;
$agama = 95;

$totalnya = $dpk + $mtk + $agama;
$totalnyaa = $totalnya / 3;
$totalnyaaa = $totalnyaa >= 90 ? "maka sangat bagus" : ($totalnyaa >= 85 ? "maka bagus" : ($totalnyaa >= 80 ? "maka sangat baik" : ($totalnyaa >= 70 ? "maka baik" : "maka kurang baik")));

echo "$totalnyaaa";
echo "<hr>";

?>

<!-- no 5 -->
<?php

$x =20 ;
$y =20 ;

$hasilnya= $x == $y ? "Nilai Sama" : ($x > $y ?"Lebih besar x" : "Lebih besar y" );

echo"$hasilnya";

?>
