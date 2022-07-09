<div class="card">
    <div class="card-body table-responsive p-0" style="height: 410px;">
        <table class="table table-head-fixed text-nowrap table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-center">NO</th>
                    <th scope="col" class="text-center">PERUMAHAN</th>
                    <th scope="col" class="text-center">STATUS</th>
                    <th scope="col" class="text-center">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../koneksi.php';
                $no = 1;
                $ambil_data = mysqli_query($koneksi, "SELECT * FROM perumahan");
                while ($row = mysqli_fetch_array($ambil_data)) {
                ?>
                    <tr>
                        <td scope="col" class="text-center"><?php echo $no++; ?></td>
                        <td scope="col" class="text-center"><?php echo $row['nm_perum'] ?></td>
                        <td scope="col" class="text-center">
                            <h6 class="badge badge-success"><?php echo $row['status_perum']; ?></h6>
                        </td>
                        <td scope="col" class="text-center">
                            <button type="button" class="btn btn-xs bg-gradient-info elevation-3 detail-edit-data" id="<?php echo $row["id_perum"]; ?>" data-id="<?php echo $row["id_perum"]; ?>">
                                <i class="fa-solid fa-pen-to-square"></i> lihat & Edit Detail
                            </button>
                            <button type="button" data-id="<?php echo $row['id_perum']; ?>" class="hapus-perum btn btn-xs bg-gradient-danger elevation-3">
                                <i class="fas fa-trash-alt mr-1"></i>Delete
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <input type="text" id="post-id-perum" value="" hidden>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.hapus-perum').click(function(e) {
            var el = this;

            // Delete id
            var id = $(this).data('id');
            $('#id_data').val(id);
            var confirmalert = confirm("Are you sure?");
            if (confirmalert == true) {
                $('#action_hapus_data').val('hapus-data-perum');
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
                        $('.data').load("pages/data_perum.php");
                    }
                });
            }
        });
        // $('#example').DataTable();
        // alert('ya');

        // alert(data_id);
    });
    // $('#status').prop('checked', true);
</script>