<?php
include '../koneksi.php';
$nmfas  = count($_POST["nmfas"]);
if ($nmfas > 0) {
    for ($i = 0; $i < $nmfas; $i++) {
        if (trim($_POST["nmfas"][$i] != '')) {
            $sql = "INSERT INTO fasilitas(id_fasperum,nmfas) VALUES('" . mysqli_real_escape_string($koneksi, $_POST["id_fasperum"][$i]) . "','" . $_POST['nmfas'][$i] . "')";
            mysqli_query($koneksi, $sql);
        }
    }
    //jika berhasil input
    echo "Data Inserted";
} else {
    //jika tidak berhasil
    echo "Please Enter Name";
}
