
<?php
include "../koneksi.php";
$action = $_POST['action_hapus_data'];
$id_dataperum = $_POST['id_data'];
$ambil_data = mysqli_query($koneksi, "SELECT * FROM fasilitas WHERE id_fasperum = $id_dataperum");
$data_fasil =  mysqli_num_rows($ambil_data);
$ambil_data = mysqli_query($koneksi, "SELECT * FROM lok_terdekat WHERE id_lokperum = $id_dataperum");
$data_lokterdekat =  mysqli_num_rows($ambil_data);
$ambil_data = mysqli_query($koneksi, "SELECT * FROM tipe WHERE id_tipeperum = $id_dataperum");
$data_tipe =  mysqli_num_rows($ambil_data);
$ambil_data = mysqli_query($koneksi, "SELECT * FROM fot_slide WHERE id_fotperum = $id_dataperum");
$data_fotslide_perum =  mysqli_num_rows($ambil_data);
$ambil_data = mysqli_query($koneksi, "SELECT * FROM fot_slide WHERE id_fottipe = $id_dataperum");
$data_fotslide_tipe =  mysqli_num_rows($ambil_data);

if ($action == 'lok_terdekat') {

    // Check record exists
    $checkRecord = mysqli_query($koneksi, "SELECT * FROM lok_terdekat WHERE id_lok=" . $id_dataperum);
    $totalrows = mysqli_num_rows($checkRecord);

    if ($totalrows > 0) {
        // Delete record
        $query = "DELETE FROM lok_terdekat WHERE id_lok=" . $id_dataperum;
        mysqli_query($koneksi, $query);
        echo 1;
        exit;
    } else {
        echo 0;
        exit;
    }

    echo 0;
    exit;
} else if ($action == 'fasilitas') {
    // Check record exists
    $checkRecord = mysqli_query($koneksi, "SELECT * FROM fasilitas WHERE id_fasil=" . $id_dataperum);
    $totalrows = mysqli_num_rows($checkRecord);

    if ($totalrows > 0) {
        // Delete record
        $query = "DELETE FROM fasilitas WHERE id_fasil=" . $id_dataperum;
        mysqli_query($koneksi, $query);
        echo 1;
        exit;
    } else {
        echo 0;
        exit;
    }

    echo 0;
    exit;
} else if ($action == 'hapus-data-perum') {
    // Check record exists
    if ($data_fasil > 0) {
        echo 'Silahkan hapus data fasilitas terlebih dahulu!!';
    } else if ($data_lokterdekat > 0) {
        echo 'Silahkan hapus data lokasi terdekat terlebih dahulu!!';
    } else if ($data_tipe > 0) {
        echo 'Silahkan hapus data tipe terlebih dahulu!!';
    } else {
        $ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan WHERE id_perum ='" . $id_dataperum . "'");
        $row = mysqli_fetch_array($ambil_data);
        $foto_logo = $row['logo'];
        unlink('../assets/img/logo/' . $foto_logo);

        $query = "DELETE FROM perumahan WHERE id_perum =" . $id_dataperum;
        $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
        if ($sql) {
            echo "Proses konfirmasi Berhasil";
        } else {
            echo "Proses konfirmasi gagal";
        }
    }
}
if ($action == 'hapus-data-tipe') {

    if ($data_fotslide_perum > 0) {
        echo 'Silahkan hapus data foto slide perum terlebih dahulu!!';
    } else if ($data_fotslide_tipe > 0) {
        echo 'Silahkan hapus data foto slide tipe terlebih dahulu!!';
    } else {
        $ambil_data = mysqli_query($koneksi, "SELECT *FROM tipe WHERE id_tipe ='" . $id_dataperum . "'");
        $row = mysqli_fetch_array($ambil_data);
        if ($row['fot_lantai2'] == null) {
            $foto_display = $row['fot_display'];
            unlink('../assets/img/foto_display/' . $foto_display);

            $foto_lantai1 = $row['fot_lantai1'];
            unlink('../assets/img/foto_lantai1/' . $foto_lantai1);

            $foto_grid = $row['fot_grid'];
            unlink('../assets/img/foto_grid/' . $foto_grid);
        } else {
            $foto_display = $row['fot_display'];
            unlink('../assets/img/foto_display/' . $foto_display);

            $foto_lantai1 = $row['fot_lantai1'];
            unlink('../assets/img/foto_lantai1/' . $foto_lantai1);

            $foto_lantai2 = $row['fot_lantai2'];
            unlink('../assets/img/foto_lantai2/' . $foto_lantai2);

            $foto_grid = $row['fot_grid'];
            unlink('../assets/img/foto_grid/' . $foto_grid);
        }

        $query = "DELETE FROM tipe WHERE id_tipe=" . $id_dataperum;
        $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
        if ($sql) {
            echo "Proses konfirmasi Berhasil";
        } else {
            echo "Proses konfirmasi gagal";
        }
    }

} else if ($action == 'hapus-data-berita') {
    $ambil_data = mysqli_query($koneksi, "SELECT *FROM berita WHERE id_berita ='" . $id_dataperum . "'");
    $row = mysqli_fetch_array($ambil_data);
    $foto_berita = $row['fot_berita'];
    unlink('../assets/img/foto_berita/' . $foto_berita);

    $query = "DELETE FROM berita WHERE id_berita =" . $id_dataperum;
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    if ($sql) {
        echo "Proses konfirmasi Berhasil";
    } else {
        echo "Proses konfirmasi gagal";
    }
}
