<?php
$jumlah_mangga = 5;
$jumlah_sawo = 10;
$jumlah_semangka =6;

$harga_sawo = 13000;
$harga_mangga = 6000;
$harga_semangka = 45000;

echo "Andi Membutuhkan ".$jumlah_mangga. " Kg mangga <br>";
echo "Andi Membutuhkan ".$jumlah_sawo. " Kg sawo <br>";
echo "Andi Membutuhkan ".$jumlah_semangka. " Kg semangka <br>";

echo "<hr>";
echo "<hr>";

echo "Harga Sawo =". $harga_sawo. '<br>';
echo "Harga Mangga =". $harga_mangga. '<br>';
echo "Harga Semangka =". $harga_semangka. '<br>';

$total = ($jumlah_sawo * $harga_sawo) + ($jumlah_mangga * $harga_mangga) + ($jumlah_semangka * $harga_semangka);
echo "Berapa Andi Harus Bayar =". $total ;

130 + 270
?>