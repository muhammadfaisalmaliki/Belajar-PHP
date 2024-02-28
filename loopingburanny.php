<?php
// looping dengan mencetak 1-50 dengan do while
echo "<h3>Looping Do While<h3>";
$angka = 1;
do {
    echo "$angka";
    $angka++;
    
} while ($angka <= 50);
echo "<hr>";
?>

<?php
// looping dengan mencetak 1-50 dengan for
echo "<h3>Looping For<h3>";
for($Angka = 1; $Angka <= 50; $Angka++) {
    echo $Angka;
}
echo "<hr>";
?>

<?php
//looping ganjil genap for
echo "<h3>Looping for ganjil genap<h3>";
for($ANgka = 1; $ANgka <= 50; $ANgka++) {
    echo $ANgka;

if ($ANgka % 2 == 0) {
    echo " genap";
}else {
    echo " ganjil";
} echo "<br>";
} echo "<hr>";
?>

<?php
//looping genap for
echo "<h3>Looping for genap<h3>";
for($ANgka = 1; $ANgka <= 50; $ANgka++) {

if ($ANgka % 2 == 0) {
    echo "$ANgka genap";
    echo "<br>";
}
}
echo "<hr>";
?>

<?php
//looping kelipatan 5 cara 1
echo "<h3>Looping kelipatan 5 cara 1<h3>";
for($ANgka = 5; $ANgka <= 100; $ANgka += 5) {
    echo "$ANgka";
    echo "<br>";
} 
echo "<hr>";
?>

<?php
// looping kelipatan 5 cara 2
echo "<h3>looping kelipatan 5 cara 2<h3>";
for($AngkA = 1; $AngkA  <= 100; $AngkA++) {
    if($AngkA % 5 == 0){
        echo "$AngkA";
        echo "<br>";
    }
}
echo "<hr>";
?>

<?php
echo "<h3>looping while<h3>";
// loopoing mencetak 1-50 dengan while
$q = 1;
while ($q <= 30) {
    echo $q;
$q++;
}
echo "<hr>";
?>