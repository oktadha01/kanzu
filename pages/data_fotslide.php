<?php
include '../koneksi.php';
$action = $_POST['action'];
if ($action == 'data-foto-slide') { ?>
    <thead>
        <tr>
            <th scope="col" class="text-center">NO</th>
            <th scope="col" class="text-center">FOTO</th>
            <th scope="col" class="text-center">PERUM</th>
            <th scope="col" class="text-center">TIPE</th>
            <th scope="col" class="text-center">ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $id_pilih_tipe_tabel = $_POST['id-pilih-tipe-tabel'];
        $no = 1;
        $ambil_data = mysqli_query($koneksi, "SELECT * FROM perumahan, tipe, fot_slide WHERE tipe.id_tipe = '$id_pilih_tipe_tabel' AND fot_slide.id_fottipe = tipe.id_tipe AND perumahan.id_perum = tipe.id_tipeperum");
        while ($row = mysqli_fetch_array($ambil_data)) {
        ?>
            <tr>
                <td scope="col" class="text-center"><?php echo $no++; ?></td>
                <td scope="col" class="text-center">
                    <img src="assets/img/foto_slidetipe/<?php echo $row['file_slidetipe']; ?>" class="img-thumbnail width-8rem">
                </td>
                <td scope="col" class="text-center"><?php echo $row['nm_perum']; ?></td>
                <td scope="col" class="text-center"><?php echo $row['luas_p']; ?></td>
                <td scope="col" class="text-center">
                    <button type="button" data-id="<?php echo $row['id_fotslide']; ?>" class="btn btn-xs bg-gradient-danger elevation-3 hapus-fotslide">
                        <i class="fas fa-trash-alt mr-1"></i>Delete
                    </button>
                </td>
            </tr>

        <?php } ?>
    </tbody>
<?php } else if ($action == 'tabel-perum') { ?>
    <thead>
        <tr>
            <th scope="col" class="text-center">NO</th>
            <th scope="col" class="text-center">FOTO</th>
            <th scope="col" class="text-center">PERUMAHAN</th>
            <th scope="col" class="text-center">ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $id_pilih_perum_tabel = $_POST['id-pilih-perum-tabel'];
        $no = 1;
        $ambil_data = mysqli_query($koneksi, "SELECT * FROM perumahan, fot_slide WHERE perumahan.id_perum = fot_slide.id_fotperum AND fot_slide.id_fotperum = '$id_pilih_perum_tabel'");
        while ($row = mysqli_fetch_array($ambil_data)) {
        ?>
            <tr>
                <td scope="col" class="text-center"><?php echo $no++; ?></td>
                <td scope="col" class="text-center">
                    <img src="assets/img/foto_slideperum/<?php echo $row['file_slideperum']; ?>" class=" img-thumbnail width-8rem">
                </td>
                <td scope="col" class="text-center"><?php echo $row['nm_perum']; ?></td>
                <td scope="col" class="text-center">
                    <button type="button" data-id="<?php echo $row['id_fotslide']; ?>" class="btn btn-xs bg-gradient-danger elevation-3 hapus-fotslide">
                        <i class=" fas fa-trash-alt mr-1"></i>Delete
                    </button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
<?php } else if ($action == 'data-foto-dashboard') { ?>
    <thead>
        <tr>
            <th scope="col" class="text-center">NO</th>
            <th scope="col" class="text-center">FOTO</th>
            <th scope="col" class="text-center">ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $ambil_data = mysqli_query($koneksi, "SELECT * FROM fot_slide WHERE file_slidedashboard");
        while ($row = mysqli_fetch_array($ambil_data)) {
        ?>
            <tr>
                <td scope="col" class="text-center"><?php echo $no++; ?></td>
                <td scope="col" class="text-center">
                    <img src="assets/img/foto_slidedashboard/<?php echo $row['file_slidedashboard']; ?>" class=" img-thumbnail width-8rem">
                </td>
                <td scope="col" class="text-center">
                    <button type="button" data-id="<?php echo $row['id_fotslide']; ?>" class="btn btn-xs bg-gradient-danger elevation-3 hapus-fotslide">
                        <i class=" fas fa-trash-alt mr-1"></i>Delete
                    </button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
<?php } ?>

<script>
    $('.hapus-fotslide').click(function() {
        var el = this;
        // Delete id
        var id = $(this).data('id');
        $('#id_fotslide').val(id);
        var confirmalert = confirm("Are you sure?");
        $('#action').val('hapus-fotslide-tipe');
        let formData = new FormData();
        formData.append('action', $('#action').val());
        formData.append('action-tabel', $('#action-tabel').val());
        formData.append('id_fotslide', $('#id_fotslide').val());
        $.ajax({
            type: 'POST',
            url: "prosess/proses_fotslide.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {

                if (response == 1) {
                    // Remove row from HTML Table
                    $(el).closest('tr').css('background', 'tomato');
                    $(el).closest('tr').fadeOut(800, function() {
                        $(this).remove();
                    });
                } else {
                    alert('Invalid ID.');
                }
            }
        });
    });
</script>