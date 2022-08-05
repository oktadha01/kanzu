<?php
include '../koneksi.php';
$ambil_data = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '2'");
$row = mysqli_fetch_array($ambil_data);
$kontak = $row['kontak'];
$action_wa = $_POST['action_wa'];
if ($action_wa == 'wa-detail') {
    $wa_nmperum   = $_POST['wa_nmperum'];
    $wa_tipeperum          = $_POST['wa_tipeperum'];
    $nm_kastemer          = $_POST['nm_kastemer'];
    $no_wa          = $_POST['no_wa'];
    $email          = $_POST['email'];
    $status_kstmr          = '-';
    $daftar = mysqli_query($koneksi, "INSERT INTO kastemer (nm_kastemer, no_wa, email, wa_nmperum, wa_tipeperum, status_kstmr) values ('$nm_kastemer', '$no_wa', '$email', '$wa_nmperum', '$wa_tipeperum', '$status_kstmr')");
    if ($daftar) {
        header("location:https://wa.me/$kontak?text=Saya $nm_kastemer No Wa $no_wa Email $email' Ingin tau lebih lanjut tentang perumahan  $wa_nmperum' dengan tipe $wa_tipeperum");
    } else {
        echo 'Proses gagal';
    }
} else if ($action_wa == 'wa-dashboard') {

    $wa_nmperum   = $_POST['wa_nmperum'];
    $nm_kastemer          = $_POST['nm_kastemer'];
    $no_wa          = $_POST['no_wa'];
    $email          = $_POST['email'];
    $wa_tipeperum          = '-';
    $status_kstmr          = '-';

    $daftar = mysqli_query($koneksi, "INSERT INTO kastemer (nm_kastemer, no_wa, email, wa_nmperum, wa_tipeperum, status_kstmr) values ('$nm_kastemer', '$no_wa', '$email', '$wa_nmperum',  '$wa_tipeperum', '$status_kstmr')");
    if ($daftar) {
        header("location:https://wa.me/$kontak?text=Saya $nm_kastemer No Wa $no_wa Email $email Ingin tau lebih lanjut tentang perumahan  $wa_nmperum");
    } else {
        echo 'Proses gagal';
    }
}
