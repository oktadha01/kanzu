<?php
include '../koneksi.php';
$action = $_POST['action'];
if ($action == 'input') {
    echo "<option value='0'>Pilih Tipe</option>";
    $id_pilih_perum = $_POST['id-pilih-perum'];
    $ambil_data = mysqli_query($koneksi, "SELECT * FROM perumahan, tipe WHERE perumahan.id_perum = '$id_pilih_perum' AND tipe.id_tipeperum = perumahan.id_perum");
    while ($row = mysqli_fetch_array($ambil_data)) {

        echo "<option value='" . $row['id_tipe'] . "'>Tipe " . $row['luas_p'] . "</option>";
    }
} else if ($action == 'tabel-perum') {
    echo "<option value='0'>Pilih Tipe</option>";
    $id_pilih_perum_tabel = $_POST['id-pilih-perum-tabel'];
    $ambil_data = mysqli_query($koneksi, "SELECT * FROM perumahan, tipe WHERE perumahan.id_perum = '$id_pilih_perum_tabel' AND tipe.id_tipeperum = perumahan.id_perum");
    while ($row = mysqli_fetch_array($ambil_data)) {

        echo "<option value='" . $row['id_tipe'] . "'>Tipe " . $row['luas_p'] . "</option>";
    }
} else if ($action == 'hapus-fotslide-tipe') {
    $id_fotslide = $_POST['id_fotslide'];

    $checkRecord = mysqli_query($koneksi, "SELECT * FROM fot_slide WHERE id_fotslide='" . $id_fotslide . "'");
    $totalrows = mysqli_num_rows($checkRecord);

    if ($totalrows > 0) {
        $action_tabel = $_POST['action-tabel'];
        $ambil_data = mysqli_query($koneksi, "SELECT * FROM fot_slide WHERE id_fotslide='" . $id_fotslide . "'");
        $row = mysqli_fetch_array($ambil_data);
        if ($action_tabel == 'action-perum') {
            $foto = $row['file_slideperum'];
            unlink('../assets/img/foto_slideperum/' . $foto);
        } else if ($action_tabel == 'action-tipe') {
            $foto = $row['file_slidetipe'];
            unlink('../assets/img/foto_slidetipe/' . $foto);
        } else if ($action_tabel == 'action-dashboard') {
            $foto = $row['file_slidedashboard'];
            unlink('../assets/img/foto_slidedashboard/' . $foto);
        }
        // Delete record
        $query = "DELETE FROM fot_slide WHERE id_fotslide=" . $id_fotslide;
        mysqli_query($koneksi, $query);
        echo 1;
        exit;
    } else {
        echo 0;
        exit;
    }

    echo 0;
    exit;
}
