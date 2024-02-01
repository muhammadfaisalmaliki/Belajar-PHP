<?php
echo "hello world";
echo "<hr>";
?>

<?php

$a = 6;
$b = 4;

// Penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

//Pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

//Perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

//Pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

//Sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

//Pangkat
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";

?>

<?php

// aritmatika
$a = 20;
$a = $a + 20;

echo "$a";
echo "<hr>";

?>

<?php

// operator penugasan
$b = 20;
$b += 30;

echo "$b";
echo "<hr>";

?>

<!-- operator Operator Increment & Decrement -->
<?php

$score = 0;

$score++;
$score++;
$score++;

echo $score;
echo "<hr>";

?>

<?php

$a = 6;
$b = 2;

//lebih besar
$c = $a > $b;
echo "$a > $b: $c";
echo "<hr>";

//lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";

1 > 10;

$A = "21";
$B = 21;
$A === $B;

//lebih sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<hr>";

//lebih tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<hr>";

//lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";

//lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<hr>";

?>

<!--  -->
<?php

$first = true;
$second = false;
$third = $first && $second;
$third1 = $first || $second;
$third2 = $first;

echo "$third";
echo "$third1";
echo "$third2";
echo "<hr>";

?>

<?php

$alas = 10;
$tinggi = 24;
$hasil = 1/2 * $alas * $tinggi;
echo "jadi luas segitiga Adalah alas $alas cm dan tinggi $tinggi adalah $hasil cm";
echo "<hr>";

?>

<!--soal baru
    
$age = 23;
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
$umur = 50;
$boleh = $umur >= 25 ? "maka dewasa" : ($umur >= 12 ? "maka remaja" : ($umur >= 5 ? "masih anak2" : "masih balita"));

echo "$boleh";

?>


