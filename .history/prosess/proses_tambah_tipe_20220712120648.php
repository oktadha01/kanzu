<?php
include '../koneksi.php';
$nm_foto_lantai2 = $_POST['nm-foto-lantai2'];
$id_tipeperum = $_POST['id-tipeperum'];
$lantai = $_POST['lantai'];
$luas_t = $_POST['luas-t'];
$luas_p = $_POST['luas-p'];
$balkon = $_POST['balkon'];
$taman = $_POST['taman'];
$carportr = $_POST['carportr'];
$ru_tamu = $_POST['ru-tamu'];
$ru_keluarga = $_POST['ru-keluarga'];
$ka_tidur = $_POST['ka-tidur'];
$ka_mandi = $_POST['ka-mandi'];
$ru_makan = $_POST['ru-makan'];
$dapur = $_POST['dapur'];
$harga = $_POST['harga'];
$promo = $_POST['promo'];
$url_vr = $_POST['url-vr'];

if ($nm_foto_lantai2 == "") {
    $fot_display = $_FILES['in-foto-display']['name'];
    $tmp_fot_display = $_FILES['in-foto-display']['tmp_name'];
    $new_fot_display = date('dmYHis') . $fot_display;
    // Set path folder tempat menyimpan fotonya
    $path_fot_display = "../assets/img/foto_display/" . $new_fot_display;

    $fot_grid = $_FILES['in-foto-grid']['name'];
    $tmp_fot_grid = $_FILES['in-foto-grid']['tmp_name'];
    $new_fot_grid = date('dmYHis') . $fot_grid;
    // Set path folder tempat menyimpan fotonya
    $path_fot_grid = "../assets/img/foto_grid/" . $new_fot_grid;
    $fot_lantai1 = $_FILES['in-foto-lantai1']['name'];
    $tmp_fot_lantai1 = $_FILES['in-foto-lantai1']['tmp_name'];
    $new_fot_lantai1 = date('dmYHis') . $fot_lantai1;
    // Set path folder tempat menyimpan fotonya
    $path_fot_lantai1 = "../assets/img/foto_lantai1/" . $new_fot_lantai1;

    $upload_fot_display = move_uploaded_file($tmp_fot_display, $path_fot_display);
    $upload_fot_grid = move_uploaded_file($tmp_fot_grid, $path_fot_grid);
    $upload_fot_lantai1 = move_uploaded_file($tmp_fot_lantai1, $path_fot_lantai1);
    if ($upload_fot_display && $upload_fot_grid && $upload_fot_lantai1) {
        $daftar = mysqli_query($koneksi, "INSERT INTO tipe (id_tipeperum, lantai, luas_t, luas_p, balkon, taman, carportr, ru_tamu, ru_keluarga, ka_tidur, ka_mandi, ru_makan, dapur, fot_display, fot_grid, fot_lantai1, harga, promo, url_vr)
         values ('$id_tipeperum', '$lantai', '$luas_t', '$luas_p', '$balkon', '$taman', '$carportr', '$ru_tamu', '$ru_keluarga', '$ka_tidur', '$ka_mandi', '$dapur', '$ru_makan', '$new_fot_display', '$new_fot_grid', '$new_fot_lantai1', '$harga', '$promo', '$url_vr')");
        if ($daftar) { // Cek jika proses simpan ke database sukses atau tidak
            // Jika Sukses, Lakukan :
            echo 'Proses Berhasil';
            // $_SESSION["sukses"] = 'News Data Saved Successfully';
            // header("location:../index.php?p=news");
        } else {
            echo 'Proses gagal';
            // header("location:../index.php?p=news");
        }
    }
} else {
    $fot_lantai1 = $_FILES['in-foto-lantai1']['name'];
    $tmp_fot_lantai1 = $_FILES['in-foto-lantai1']['tmp_name'];
    $new_fot_lantai1 = date('dmYHis') . $fot_lantai1;
    // Set path folder tempat menyimpan fotonya
    $path_fot_lantai1 = "../assets/img/foto_lantai1/" . $new_fot_lantai1;

    $fot_display = $_FILES['in-foto-display']['name'];
    $tmp_fot_display = $_FILES['in-foto-display']['tmp_name'];
    $new_fot_display = date('dmYHis') . $fot_display;
    // Set path folder tempat menyimpan fotonya
    $path_fot_display = "../assets/img/foto_display/" . $new_fot_display;

    $fot_grid = $_FILES['in-foto-grid']['name'];
    $tmp_fot_grid = $_FILES['in-foto-grid']['tmp_name'];
    $new_fot_grid = date('dmYHis') . $fot_grid;
    // Set path folder tempat menyimpan fotonya
    $path_fot_grid = "../assets/img/foto_grid/" . $new_fot_grid;

    $fot_lantai2 = $_FILES['in-foto-lantai2']['name'];
    $tmp_fot_lantai2 = $_FILES['in-foto-lantai2']['tmp_name'];
    $new_fot_lantai2 = date('dmYHis') . $fot_lantai2;
    // Set path folder tempat menyimpan fotonya
    $path_fot_lantai2 = "../assets/img/foto_lantai2/" . $new_fot_lantai2;

    $upload_fot_display = move_uploaded_file($tmp_fot_display, $path_fot_display);
    $upload_fot_grid = move_uploaded_file($tmp_fot_grid, $path_fot_grid);
    $upload_fot_lantai1 = move_uploaded_file($tmp_fot_lantai1, $path_fot_lantai1);
    $upload_fot_lantai2 = move_uploaded_file($tmp_fot_lantai2, $path_fot_lantai2);
    if ($upload_fot_display && $upload_fot_grid && $upload_fot_lantai1 && $upload_fot_lantai2) {
        $daftar = mysqli_query($koneksi, "INSERT INTO tipe (id_tipeperum, lantai, luas_t, luas_p, balkon, taman, carportr, ru_tamu, ru_keluarga, ka_tidur, ka_mandi, ru_makan, dapur, fot_display, fot_grid, fot_lantai1, fot_lantai2, harga, promo, url_vr) 
        values ('$id_tipeperum', '$lantai', '$luas_t', '$luas_p', '$balkon', '$taman', '$carportr', '$ru_tamu', '$ru_keluarga', '$ka_tidur', '$ka_mandi', '$ru_makan', '$dapur', '$new_fot_display', '$new_fot_grid', '$new_fot_lantai1', '$new_fot_lantai2', '$harga', '$promo', '$url_vr')");
        if ($daftar) { // Cek jika proses simpan ke database sukses atau tidak
            // Jika Sukses, Lakukan :
            echo 'Proses Berhasil';
            // $_SESSION["sukses"] = 'News Data Saved Successfully';
            // header("location:../index.php?p=news");
        } else {
            echo 'Proses gagal';
            // header("location:../index.php?p=news");
        }
    }
}
