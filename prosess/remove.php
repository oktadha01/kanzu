<?php 
include "koneksi.php";

$id = 0;
if(isset($_POST['id'])){
   $id = mysqli_real_escape_string($koneksi,$_POST['id']);
}

if($id > 0){

	// Check record exists
	$checkRecord = mysqli_query($koneksi,"SELECT * FROM fasilitas WHERE id_fasil=".$id);
	$totalrows = mysqli_num_rows($checkRecord);

	if($totalrows > 0){
		// Delete record
		$query = "DELETE FROM fasilitas WHERE id_fasil=".$id;
		mysqli_query($koneksi,$query);
		echo 1;
		exit;
	}else{
        echo 0;
        exit;
    }
}

echo 0;
exit;