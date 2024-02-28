<!-- tugas -->

<?php
$nilai = 200;
if ($nilai >= 85) {
    echo 'A,lulus';
} elseif ($nilai >= 68) {
    echo 'B,lulus';
} elseif ($nilai >= 56) {
    echo 'C,lulus';
} elseif ($nilai >= 45) {
    echo 'D,tidak lulus';
} else {
    echo 'E,tidak lulus';
}

?>