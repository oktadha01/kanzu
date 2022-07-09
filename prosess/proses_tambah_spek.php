<?php
include '../koneksi.php';

$id_spekperum = $_POST['id-spekperum'];
$pondasi = $_POST['pondasi'];
$struktur = $_POST['struktur'];
$rangka_atap = $_POST['rangka-atap'];
$plafon = $_POST['plafon'];
$penutup_atap = $_POST['penutup-atap'];
$dinding = $_POST['dinding'];
$lantai_utama = $_POST['lantai-utama'];
$lantai_ka_mandi = $_POST['lantai-ka-mandi'];
$dinding_ka_mandi = $_POST['dinding-ka-mandi'];
$kramik_dapur = $_POST['kramik-dapur'];
$kun_pin_utama = $_POST['kun-pin-utama'];
$pin_utama = $_POST['pin-utama'];
$pin_kamar = $_POST['pin-kamar'];
$kusen_pin = $_POST['kusen-pin'];
$kusen_daun_jen = $_POST['kusen-daun-jen'];
$tangga = $_POST['tangga'];
$cat_eks = $_POST['cat-eks'];
$cat_int = $_POST['cat-int'];
$sanitair = $_POST['sanitair'];
$lantai = $_POST['lantai'];
$spek_ka_mandi = $_POST['spek-ka-mandi'];
$listrik = $_POST['listrik'];
$air_bersih = $_POST['air-bersih'];
$spek_carport = $_POST['spek-carport'];
$jl_komplek = $_POST['jl-komplek'];


$daftar = mysqli_query($koneksi, "INSERT into spesifikasi (id_spekperum, pondasi, struktur, rangka_atap, plafon, penutup_atap, dinding, lantai_utama, lantai_ka_mandi, dinding_ka_mandi, kramik_dapur, kun_pin_utama, pin_utama, pin_kamar, 
tangga, cat_eks, cat_int, sanitair, kusen_pin, kusen_daun_jen, lantai, spek_ka_mandi, listrik, air_bersih, spek_carport, jl_komplek) 
values ('$id_spekperum', '$pondasi', '$struktur', '$rangka_atap', '$plafon', '$penutup_atap', '$dinding', '$lantai_utama', '$lantai_ka_mandi', '$dinding_ka_mandi', '$kramik_dapur', '$kun_pin_utama', '$pin_utama', '$pin_kamar', 
'$tangga', '$cat_eks', '$cat_int', '$sanitair', '$kusen_pin', '$kusen_daun_jen', '$lantai', '$spek_ka_mandi', '$listrik', '$air_bersih', '$spek_carport', '$jl_komplek')");
// --   
// -- 
if ($daftar) { // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "Proses Berhasil";
    // $_SESSION["sukses"] = 'News Data Saved Successfully';
    // header("location:../index.php?p=news");
} else {
    echo "Proses gagal";
    // header("location:../index.php?p=news");
}
