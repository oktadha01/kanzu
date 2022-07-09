<?php
include '../koneksi.php';

$id_tipegambar = $_POST['id-gambar'];
$edit_gambar = $_POST['edit-gambar'];
// $id_perum = $_POST['edit-id-perum'];

if ($edit_gambar == 'display') {

	$ambil_data = mysqli_query($koneksi, "SELECT *FROM tipe WHERE id_tipe ='" . $id_tipegambar . "'");
	$row = mysqli_fetch_array($ambil_data);
	$foto_display = $row['fot_display'];
	unlink('../assets/img/foto_display/' . $foto_display);

	$query1 = "UPDATE tipe SET fot_display ='' WHERE id_tipe ='" . $id_tipegambar . "'";
	$sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		echo "<script>alert('Proses konfirmasi Berhasil')</script>";
	} else {
		echo "<script>alert('Proses konfirmasi gagal')</script>";
	}
} else if ($edit_gambar == 'lantai1') {

	$ambil_data = mysqli_query($koneksi, "SELECT *FROM tipe WHERE id_tipe ='" . $id_tipegambar . "'");
	$row = mysqli_fetch_array($ambil_data);
	$foto_lantai1 = $row['fot_lantai1'];
	unlink('../assets/img/foto_lantai1/' . $foto_lantai1);

	$query1 = "UPDATE tipe SET fot_lantai1 ='' WHERE id_tipe ='" . $id_tipegambar . "'";
	$sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		echo "<script>alert('Proses konfirmasi Berhasil')</script>";
	} else {
		echo "<script>alert('Proses konfirmasi gagal')</script>";
	}
} else if ($edit_gambar == 'lantai2') {

	$ambil_data = mysqli_query($koneksi, "SELECT *FROM tipe WHERE id_tipe ='" . $id_tipegambar . "'");
	$row = mysqli_fetch_array($ambil_data);
	$foto_lantai2 = $row['fot_lantai2'];
	unlink('../assets/img/foto_lantai2/' . $foto_lantai2);

	$query1 = "UPDATE tipe SET fot_lantai2 ='' WHERE id_tipe ='" . $id_tipegambar . "'";
	$sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		echo "<script>alert('Proses konfirmasi Berhasil')</script>";
	} else {
		echo "<script>alert('Proses konfirmasi gagal')</script>";
	}
} else if ($edit_gambar == 'grid') {

	$ambil_data = mysqli_query($koneksi, "SELECT *FROM tipe WHERE id_tipe ='" . $id_tipegambar . "'");
	$row = mysqli_fetch_array($ambil_data);
	$foto_grid = $row['fot_grid'];
	unlink('../assets/img/foto_grid/' . $foto_grid);

	$query1 = "UPDATE tipe SET fot_grid ='' WHERE id_tipe ='" . $id_tipegambar . "'";
	$sql = mysqli_query($koneksi, $query1); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		echo "<script>alert('Proses konfirmasi Berhasil')</script>";
	} else {
		echo "<script>alert('Proses konfirmasi gagal')</script>";
	}
}

// include 'koneksi.php';

 

// $p_id = $_GET['id'];

 

// $pilih = mysql_query('select*from coba_2  where id='$p_id'');

// $data = mysql_fetch_array($pilih);

// $foto = $data['foto'];

 

// unlink('foto/'.$foto);

 

// $hapus = mysql_query('delete from coba_2 where id='$p_id'');

 

// if($hapus)

// {

// echo '<script> alert("Data Berhasil Di hapus");location.href="data.php";</script>";
// }else{
// 	echo 'Data Gagal Di hapus';
// }
// 
