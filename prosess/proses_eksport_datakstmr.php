<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=REKAP DATA PEMBELI PERUMAHAN PT.KANPA" . date('d-m-Y H') .".xls");
?>

<center>
    <h3>REKAP DATA PEMBELI PERUMAHAN PT.KANPA</h3>
</center>
<h5>Tanggal : <?php echo date('d-m-Y H');?></h5>
<table  border="1" id="" class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col" class="text-center">NO</th>
            <th scope="col" class="text-center">NAMA</th>
            <th scope="col" class="text-center">NO WA</th>
            <th scope="col" class="text-center">EMAIL</th>
            <th scope="col" class="text-center">PERUMAHAN</th>
            <th scope="col" class="text-center">TIPE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $no = 1;
        $ambil_data = mysqli_query($koneksi, "SELECT * FROM kastemer WHERE status_kstmr = 'siap-dieksport'");
        while ($row = mysqli_fetch_array($ambil_data)) {
        ?>
            <tr id="tr-<?php echo $row['id_kastemer']; ?>" class="odd tr-<?php echo $row['status_kstmr']; ?>">
                <td scope="col" class="text-center"><?php echo $no++; ?></td>
                <td scope="col" class="text-center"><?php echo $row['nm_kastemer'] ?></td>
                <td scope="col" class="text-center">'<?php echo $row['no_wa'] ?>'</td>
                <td scope="col" class="text-center"><?php echo $row['email'] ?></td>
                <td scope="col" class="text-center"><?php echo $row['wa_nmperum'] ?></td>
                <td id="" scope="col" class="text-center"><?php echo $row['wa_tipeperum'] ?></td>
                
            </tr>
        <?php } ?>
    </tbody>
</table>