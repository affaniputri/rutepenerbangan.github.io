<?php
//nendefinisikan array asosiatif dari $bandara_asal
$bandara_asal = [
    "-" => 0,
    "Soekarno-Hatta" => 65000, 
    "Husein Sastranegara" => 50000, 
    "Abdul Rahman Saleh" => 46000,
    "Juanda" => 30000
]; 

//mengurutkan elemen array asosiatif secara ascending order berdasarkan kunci (key)
ksort($bandara_asal);

//mendefinisikan array asosiatif dari Sbandara tujuan
$bandara_tujuan = [
    "-" => 0,
    "Ngurah Rai" => 85000,
    "Hasanuddin" => 78008,
    "Inanwantan" => 98000,
    "Sultan Iskandar Muda" => 60000
];

//mengurutkan elemen array asosiatif secara ascending order berdasarkan kunci (key)
ksort ($bandara_tujuan);

//membuat fungsi pajak tujuan untuk menghitung harga pajak tujuan 
function pajak_tujuan ($bandara_tujuan, $tujuan)
{
    $harga_pajak = $bandara_tujuan [$tujuan]; 
    return $harga_pajak;
}

function pajak_asal($bandara_asal, $asal)
{
    $pajak_asal = $bandara_asal [$asal];
    return $pajak_asal;
}
//membuat fungsi hitung_total_pajak untuk menghitung total pajak 
function hitung_total_pajak ($bandara_asal, $asal, $bandara_tujuan, $tujuan)
{
    $harga_pajak_asal = pajak_asal($bandara_asal, $asal); 
    $harga_pajak_tujuan = pajak_tujuan($bandara_tujuan, $tujuan); 
    $total_pajak = $harga_pajak_asal + $harga_pajak_tujuan; 
    return $total_pajak; 
}

//membuat fungsi hitung_total_harga_tiket untuk menghitung total harga dari tiket 
function hitung_total_harga_tiket($harga_tiket, $total_pajak)
{
    $total_harga_tiket = $harga_tiket + $total_pajak; 
    return $total_harga_tiket;
}

//membuat fungsi untuk mengonversikan angka ke rupiah 
function rupiah($angka)
{
    $hasil = "Rp" . number_format($angka,0,',','.'); 
    return $hasil;
}
?>