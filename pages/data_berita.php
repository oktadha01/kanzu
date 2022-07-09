<div class="card">
    <div class="card-body table-responsive p-0" style="height: 410px;">
        <table class="table table-head-fixed text-nowrap table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-center">NO</th>
                    <th scope="col" class="text-center">JUDUL</th>
                    <th scope="col" class="text-center">STATUS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../koneksi.php';
                $no = 1;
                $ambil_data = mysqli_query($koneksi, "SELECT * FROM berita");
                while ($row = mysqli_fetch_array($ambil_data)) {
                ?>
                    <tr>
                        <td scope="col" class="text-center"><?php echo $no++; ?></td>
                        <td scope="col" class="text-center"><?php echo $row['judul'] ?></td>
                        <td scope="col" class="text-center">
                            <h6 class="badge badge-success"><?php echo $row['status_berita']; ?></h6>
                        </td>
                        <td scope="col" class="text-center">
                            <button type="button" class="btn btn-xs bg-gradient-info elevation-3 editdetail_berita" id="<?php echo $row['id_berita']; ?>">
                                <i class="fa-solid fa-pen-to-square"></i> Lihat & Edit Detail
                            </button>
                            <button type="button" data-id="<?php echo $row['id_berita']; ?>" class="hapus-berita btn btn-xs bg-gradient-danger elevation-3">
                                <i class="fas fa-trash-alt mr-1"></i>Delete
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <input type="text" id="post-id-berita" value="" hidden>
    <input type="text" id="action-berita" value="" hidden>
</div>
<script>
    $('.hapus-berita').click(function(e) {
        var el = this;
        // Delete id
        var id = $(this).data('id');
        $('#id_data').val(id);
        var confirmalert = confirm("Are you sure?");
        if (confirmalert == true) {
            $('#action_hapus_data').val('hapus-data-berita');
            let formData = new FormData();
            formData.append('action_hapus_data', $('#action_hapus_data').val());
            formData.append('id_data', $('#id_data').val());
            $.ajax({
                type: 'POST',
                url: "prosess/proses_hapus_data.php",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(msg) {
                    alert(msg);
                    $('.data').load("pages/data_berita.php");
                }
            });
        }
    });
</script>