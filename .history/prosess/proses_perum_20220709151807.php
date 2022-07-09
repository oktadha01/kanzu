<?php
include '../koneksi.php';
$action_perum = $_POST['action-perum'];

if ($action_perum == 'simpanperum') {
    $nm_perum = $_POST['in-foto-logo'];
    $nm_perum = $_POST['nm-perum'];
    $alamat = $_POST['alamat'];
    $map = $_POST['map'];
    $deskripsi = $_POST['deskripsi'];
    $video = $_POST['video'];
    $status = $_POST['cheklis-rekomendasi-produk'];

    $fot_logo = $_FILES['in-foto-logo']['name'];
    $new_fot_logo = date('dmYHis') . $fot_logo;
    $tmp_fot_logo = $_FILES['in-foto-logo']['tmp_name'];
    // Set path folder tempat menyimpan fotonya
    $path_fot_logo = "../assets/img/logo/" . $new_fot_logo;
    $upload_fot_logo = move_uploaded_file($tmp_fot_logo, $path_fot_logo);

    if ($upload_fot_logo) {
        $simpanperum  = mysqli_query($koneksi, "INSERT INTO perumahan (logo)
         values ('$new_fot_logo')");
        if ($simpanperum) { // Cek jika proses simpan ke database sukses atau tidak
            // Jika Sukses, Lakukanlllllllldggdhhfhfh :
            echo 'Proses Berhasil';
        } else {
            echo 'Proses gagal';
        }
    } else {
        echo "Foto Logo Harus Di Isi";
    }
} else if ($action_perum == 'simpaneditperum') {
    $id_perum = $_POST['edit-id-perum'];
    $nm_perum = $_POST['edit-nm-perum'];
    $alamat = $_POST['edit-alamat'];
    $video = $_POST['edit-video'];
    $map = $_POST['edit-map'];
    $deskripsi = $_POST['edit-deskripsi'];
    $status = $_POST['edit-rekomendasi-produk'];

    $query1 = "UPDATE perumahan SET nm_perum ='" . $nm_perum . "', alamat ='" . $alamat . "', video ='" . $video . "', map ='" . $map . "', deskripsi ='" . $deskripsi . "', status_perum ='" . $status . "' WHERE id_perum='" . $id_perum . "'";
    $sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
    if ($sql) {
        // $_SESSION["edit-sukses"] = 'Watchlist data has been successfully changed';
        // header("location:../index.php?p=watchlist");
        echo "Proses konfirmasi Berhasil";
    } else {
        echo "Proses konfirmasi gagal";
    }
} else if ($action_perum == 'editlogo') {
    $id_logoperum = $_POST['id-logoperum'];
    $fot_editlogo = $_FILES['edit-foto-logo']['name'];
    $tmp_fot_editlogo = $_FILES['edit-foto-logo']['tmp_name'];
    $new_fot_editlogo = date('dmYHis') . $fot_editlogo;
    // Set path folder tempat menyimpan fotonya
    $path_fot_editlogo = "../assets/img/logo/" . $new_fot_editlogo;

    $upload_fot_editlogo = move_uploaded_file($tmp_fot_editlogo, $path_fot_editlogo);

    if ($upload_fot_editlogo) {
        $query1 = "UPDATE perumahan SET logo = '" . $new_fot_editlogo . "' WHERE id_perum ='" . $id_logoperum . "'";
        $sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
        if ($sql) {
            echo "Proses konfirmasi Berhasil";
        } else {
            echo "Proses konfirmasi gagal";
        }
    }
} else if ($action_perum == 'hapuslogo') {
    $id_logoperum = $_POST['id-logoperum'];
    $ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan WHERE id_perum ='" . $id_logoperum . "'");
    $row = mysqli_fetch_array($ambil_data);
    $hapus_foto_logo = $row['logo'];
    unlink('../assets/img/logo/' . $hapus_foto_logo);

    $query1 = "UPDATE perumahan SET logo ='' WHERE id_perum ='" . $id_logoperum . "'";
    $sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
    if ($sql) {
        echo "Proses konfirmasi Berhasil";
    } else {
        echo "Proses konfirmasi gagal";
    }
} else {
    echo "salah";
}
