<?php
include '../koneksi.php';
$action = $_POST['action-berita'];
if ($action == 'tambah-berita') {
    $judul = $_POST['judul'];
    $tgl = $_POST['tgl'];
    $desk_berita = $_POST['desk-berita'];
    $status = '-';
    $fot_berita = $_FILES['in-foto-berita']['name'];
    $tmp_fot_berita = $_FILES['in-foto-berita']['tmp_name'];
    $new_fot_berita = date('dmYHis') . $fot_berita;
    // Set path folder tempat menyimpan fotonya
    $path_fot_berita = "../assets/img/foto_berita/" . $new_fot_berita;
    $upload_fot_berita = move_uploaded_file($tmp_fot_berita, $path_fot_berita);
    if ($upload_fot_berita) {
        $daftar = mysqli_query($koneksi, "INSERT INTO berita (judul, tgl, desk_berita, fot_berita, status_berita) values ('$judul', '$tgl', '$desk_berita', '$new_fot_berita', '$status')");
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
} else if ($action == 'edit-berita') {
    $id_berita = $_POST['id-berita'];
    $edit_judul = $_POST['edit-judul'];
    $edit_tgl = $_POST['edit-tgl'];
    $edit_desk_berita = $_POST['edit-desk-berita'];
    $status_berita = $_POST['status-berita'];
    $query1 = "UPDATE berita SET judul ='" . $edit_judul . "', tgl ='" . $edit_tgl . "', desk_berita ='" . $edit_desk_berita . "', status_berita ='" . $status_berita . "' WHERE id_berita='" . $id_berita . "'";
    $sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
    if ($sql) {
        // $_SESSION["edit-sukses"] = 'Watchlist data has been successfully changed';
        // header("location:../index.php?p=watchlist");
        echo "Proses konfirmasi Berhasil";
    } else {
        echo "Proses konfirmasi gagal";
    }
} else if ($action == 'hapus-gambarberita') {
    $id_berita = $_POST['id-berita'];
    $ambil_data = mysqli_query($koneksi, "SELECT *FROM berita WHERE id_berita ='" . $id_berita . "'");
    $row = mysqli_fetch_array($ambil_data);
    $foto_berita = $row['fot_berita'];
    unlink('../assets/img/foto_berita/' . $foto_berita);

    $query = "UPDATE berita SET fot_berita ='' WHERE id_berita ='" . $id_berita . "'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    if ($sql) {
        echo "Proses konfirmasi Berhasil";
    } else {
        echo "Proses konfirmasi gagal";
    }
} else if ($action == 'simpan-edit-gambarberita') {
    $id_berita = $_POST['id-berita'];
    $fot_editberita = $_FILES['edit-foto-berita']['name'];
    $tmp_fot_editberita = $_FILES['edit-foto-berita']['tmp_name'];
    $new_fot_editberita = date('dmYHis') . $fot_editberita;
    // Set path folder tempat menyimpan fotonya
    $path_fot_editberita = "../assets/img/foto_berita/" . $new_fot_editberita;

    $upload_fot_editberita = move_uploaded_file($tmp_fot_editberita, $path_fot_editberita);

    if ($upload_fot_editberita) {
        $query1 = "UPDATE berita SET fot_berita = '" . $new_fot_editberita . "' WHERE id_berita ='" . $id_berita . "'";
        $sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
        if ($sql) {
            echo "Proses konfirmasi Berhasil";
        } else {
            echo "Proses konfirmasi gagal";
        }
    }
}
