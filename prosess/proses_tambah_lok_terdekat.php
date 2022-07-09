<?php
include '../koneksi.php';
$lokasi  = count($_POST["lokasi"]);
if ($lokasi > 0) {
    for ($i = 0; $i < $lokasi; $i++) {
        if (trim($_POST["lokasi"][$i] != '')) {
            $sql = "INSERT INTO lok_terdekat(id_lokperum,lokasi,jarak) VALUES('" . mysqli_real_escape_string($koneksi, $_POST["id_lokperum"][$i]) . "','" . $_POST['lokasi'][$i] . "','" . $_POST['jarak'][$i] . "')";
            mysqli_query($koneksi, $sql);
        }
    }
    //jika berhasil input
    echo "Data Inserted";
} else {
    //jika tidak berhasil
    echo "Please Enter Name";
}
