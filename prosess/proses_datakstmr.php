<?php
include "../koneksi.php";
$action = $_POST['action'];
$post_ids = $_POST['post_id'];
if ($action == 'update') {
   
    foreach ($post_ids as $id) {
        // Delete record
        $query = "DELETE FROM kastemer WHERE id=".$id;
        $query = "UPDATE kastemer SET status_kstmr = 'siap-dieksport' WHERE id_kastemer =" . $id;
        mysqli_query($koneksi, $query);
    }
} else if ($action == 'batal') {
   
    foreach ($post_ids as $id) {
        // Delete record
        $query = "DELETE FROM kastemer WHERE id=".$id;
        $query = "UPDATE kastemer SET status_kstmr = 'belum-dieksport' WHERE id_kastemer =" . $id;

        mysqli_query($koneksi, $query);
    }
} else if ($action == 'sudah') {
   
    foreach ($post_ids as $id) {
        // Delete record
        $query = "DELETE FROM kastemer WHERE id=".$id;
        $query = "UPDATE kastemer SET status_kstmr = 'sudah-dieksport' WHERE id_kastemer =" . $id;

        mysqli_query($koneksi, $query);
    }
}
