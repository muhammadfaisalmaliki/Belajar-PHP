<!-- no2 -->
<?php
$angka = 3;

for ($j = 1; $j <= 3; $j++) {
    echo "<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<br>";
        $hasil = $i * $j;
        echo "$i x $j = $hasil";
    }
}
echo "<br>";
?>

<!-- no3 -->

<?php
echo "<br>";
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

// $result = [];
foreach ($data as $item) {
    $years = (($item['tahun'] % 4 == 0) && (($item['tahun'] % 100 !== 0) && ($item['tahun'] % 400 == 0))) ? 'lahir pada tahun kabisat' : 'lahir bukan tahun Kabisat';
    $result[] = "<br> {$item['nama']} : {$years} ({$item['tahun']})";
// echo $years;
echo implode($result);
echo "<br>";
}
?>

<!-- no4 -->

<?php
echo "<br>";
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];

$total_harga = 0;

foreach ($barang as $item ) {
    $total_harga += $item['harga_barang'] * $item['jumlah_beli']
;}

echo "total harga keseluruhan yang harus dibayar adalah " .number_format($total_harga);
?>

<!-- soal kompeten dan gak kompeten -->
<?php
echo "<br>";

$nilai = 75;
if($nilai < 75){
    echo "<p style = 'color : red;'>Nilai kamu dibawah 75 maaf belum kompeten</p>";
}elseif($nilai >= 75){
    echo "<p style = 'color : green;'>Bagusss nilai kamu sudah 75 keatas nilaimu sudah kompeten</p>";
}
?>