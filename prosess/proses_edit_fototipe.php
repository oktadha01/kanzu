<?php
include '../koneksi.php';
$id_tipegambar = $_POST['id-gambar'];
$ambil_datafoto = mysqli_query($koneksi, "SELECT *FROM tipe WHERE id_tipe = '$id_tipegambar'");
$data = mysqli_fetch_array($ambil_datafoto);

$id_tipeperum = $data['id_tipeperum'];
$lantai = $data['lantai'];
$luas_t = $data['luas_t'];
$luas_p = $data['luas_p'];
$balkon = $data['balkon'];
$taman = $data['taman'];
$carportr = $data['carportr'];
$ru_tamu = $data['ru_tamu'];
$ru_keluarga = $data['ru_keluarga'];
$ka_tidur = $data['ka_tidur'];
$ka_mandi = $data['ka_mandi'];
$dapur = $data['dapur'];
$harga = $data['harga'];
$promo = $data['promo'];

$edit_gambar = $_POST['edit-gambar'];

if ($edit_gambar == 'display') {

    // $foto_display = $data['fot_display'];
    $fot_lantai1 = $data['fot_lantai1'];
    $fot_lantai2 = $data['fot_lantai2'];
    $fot_grid = $data['fot_grid'];

    $fot_editdisplay = $_FILES['in-gambar-editdisplay']['name'];
    $tmp_fot_editdisplay = $_FILES['in-gambar-editdisplay']['tmp_name'];
    $new_fot_editdisplay = date('dmYHis') . $fot_editdisplay;
    // Set path folder tempat menyimpan fotonya
    $path_fot_editdisplay = "../assets/img/foto_display/" . $new_fot_editdisplay;

    $upload_fot_editdisplay = move_uploaded_file($tmp_fot_editdisplay, $path_fot_editdisplay);
    
    if ($upload_fot_editdisplay) {
        $query1 = "UPDATE tipe SET fot_display = '" . $new_fot_editdisplay . "', id_tipeperum = '" . $id_tipeperum . "', lantai = '" . $lantai . "', luas_t = '" . $luas_t . "', luas_p = '" . $luas_p . "', balkon = '" . $balkon . "', taman = '" . $taman . "', carportr = '" . $carportr . "', ru_tamu = '" . $ru_tamu . "', ru_keluarga = '" . $ru_keluarga . "', ka_tidur = '" . $ka_tidur . "', ka_mandi = '" . $ka_mandi . "', dapur = '" . $dapur . "', harga = '" . $harga . "', promo = '" . $promo . "', fot_lantai1 = '" . $fot_lantai1 . "', fot_lantai2 = '" . $fot_lantai2 . "', fot_grid = '" . $fot_grid . "' WHERE id_tipe ='" . $id_tipegambar . "'";
        $sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
        if ($sql) {
            echo "Proses konfirmasi Berhasil";
        } else {
            echo "Proses konfirmasi gagal";
        }
    }
} else if ($edit_gambar == 'lantai1') {

    $foto_display = $data['fot_display'];
    // $fot_lantai1 = $data['fot_lantai1'];
    $fot_lantai2 = $data['fot_lantai2'];
    $fot_grid = $data['fot_grid'];

    $fot_editlantai1 = $_FILES['in-gambar-editlantai1']['name'];
    $tmp_fot_editlantai1 = $_FILES['in-gambar-editlantai1']['tmp_name'];
    $new_fot_editlantai1 = date('dmYHis') . $fot_editlantai1;
    // Set path folder tempat menyimpan fotonya
    $path_fot_editlantai1 = "../assets/img/foto_lantai1/" . $new_fot_editlantai1;

    $upload_fot_editlantai1 = move_uploaded_file($tmp_fot_editlantai1, $path_fot_editlantai1);

    if ($upload_fot_editlantai1) {
        $query1 = "UPDATE tipe SET fot_lantai1 = '" . $new_fot_editlantai1 . "', id_tipeperum = '" . $id_tipeperum . "', 
        lantai = '" . $lantai . "', luas_t = '" . $luas_t . "', luas_p = '" . $luas_p . "', balkon = '" . $balkon . "', 
        taman = '" . $taman . "', carportr = '" . $carportr . "', ru_tamu = '" . $ru_tamu . "', ru_keluarga = '" . $ru_keluarga . "', 
        ka_tidur = '" . $ka_tidur . "', ka_mandi = '" . $ka_mandi . "', dapur = '" . $dapur . "', harga = '" . $harga . "', 
        promo = '" . $promo . "', fot_display = '" . $fot_display . "', fot_lantai2 = '" . $fot_lantai2 . "', 
        fot_grid = '" . $fot_grid . "' WHERE id_tipe ='" . $id_tipegambar . "'";
        $sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
        if ($sql) {
            echo "Proses konfirmasi Berhasil";
        } else {
            echo "Proses konfirmasi gagal";
        }
    }
} else if ($edit_gambar == 'lantai2') {

    $foto_display = $data['fot_display'];
    $fot_lantai1 = $data['fot_lantai1'];
    // $fot_lantai2 = $data['fot_lantai2'];
    $fot_grid = $data['fot_grid'];

    $fot_editlantai2 = $_FILES['in-gambar-editlantai2']['name'];
    $tmp_fot_editlantai2 = $_FILES['in-gambar-editlantai2']['tmp_name'];
    $new_fot_editlantai2 = date('dmYHis') . $fot_editlantai2;
    // Set path folder tempat menyimpan fotonya
    $path_fot_editlantai2 = "../assets/img/foto_lantai2/" . $new_fot_editlantai2;

    $upload_fot_editlantai2 = move_uploaded_file($tmp_fot_editlantai2, $path_fot_editlantai2);

    if ($upload_fot_editlantai2) {
        $query1 = "UPDATE tipe SET fot_lantai2 = '" . $new_fot_editlantai2 . "', id_tipeperum = '" . $id_tipeperum . "', 
        lantai = '" . $lantai . "', luas_t = '" . $luas_t . "', luas_p = '" . $luas_p . "', balkon = '" . $balkon . "', 
        taman = '" . $taman . "', carportr = '" . $carportr . "', ru_tamu = '" . $ru_tamu . "', ru_keluarga = '" . $ru_keluarga . "', 
        ka_tidur = '" . $ka_tidur . "', ka_mandi = '" . $ka_mandi . "', dapur = '" . $dapur . "', harga = '" . $harga . "', 
        promo = '" . $promo . "', fot_display = '" . $fot_display . "', fot_lantai1 = '" . $fot_lantai1 . "', 
        fot_grid = '" . $fot_grid . "' WHERE id_tipe ='" . $id_tipegambar . "'";
        $sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
        if ($sql) {
            echo "Proses konfirmasi Berhasil";
        } else {
            echo "Proses konfirmasi gagal";
        }
    }
} else if ($edit_gambar == 'grid') {

    $foto_display = $data['fot_display'];
    $fot_lantai1 = $data['fot_lantai1'];
    $fot_lantai2 = $data['fot_lantai2'];
    // $fot_grid = $data['fot_grid'];

    $fot_editgrid = $_FILES['in-gambar-editgrid']['name'];
    $tmp_fot_editgrid = $_FILES['in-gambar-editgrid']['tmp_name'];
    $new_fot_editgrid = date('dmYHis') . $fot_editgrid;
    // Set path folder tempat menyimpan fotonya
    $path_fot_editgrid = "../assets/img/foto_grid/" . $new_fot_editgrid;

    $upload_fot_editgrid = move_uploaded_file($tmp_fot_editgrid, $path_fot_editgrid);

    if ($upload_fot_editgrid) {
        $query1 = "UPDATE tipe SET fot_grid = '" . $new_fot_editgrid . "', id_tipeperum = '" . $id_tipeperum . "', 
        lantai = '" . $lantai . "', luas_t = '" . $luas_t . "', luas_p = '" . $luas_p . "', balkon = '" . $balkon . "', 
        taman = '" . $taman . "', carportr = '" . $carportr . "', ru_tamu = '" . $ru_tamu . "', ru_keluarga = '" . $ru_keluarga . "', 
        ka_tidur = '" . $ka_tidur . "', ka_mandi = '" . $ka_mandi . "', dapur = '" . $dapur . "', harga = '" . $harga . "', 
        promo = '" . $promo . "', fot_display = '" . $fot_display . "', fot_lantai1 = '" . $fot_lantai1 . "', 
        fot_lantai2 = '" . $fot_lantai2 . "' WHERE id_tipe ='" . $id_tipegambar . "'";
        $sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
        if ($sql) {
            echo "Proses konfirmasi Berhasil";
        } else {
            echo "Proses konfirmasi gagal";
        }
    }
} else {
    echo 'slah';
}
