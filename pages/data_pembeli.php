<table id="datatabel" class="table table-striped table-hover">

    <thead>
        <tr>
            <th scope="col" class="text-center">NO</th>
            <th scope="col" class="text-center">NAMA</th>
            <th scope="col" class="text-center">NO WA</th>
            <th scope="col" class="text-center">EMAIL</th>
            <th scope="col" class="text-center">PERUMAHAN</th>
            <th scope="col" class="text-center">TIPE</th>
            <th scope="col" class="text-center">STATUS</th>
            <th scope="col" class="text-center">
                <input type="checkbox" id="chek-all-datakstmr"> Cheklis Semua
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $no = 1;
        $ambil_data = mysqli_query($koneksi, "SELECT * FROM kastemer");
        while ($row = mysqli_fetch_array($ambil_data)) {
        ?>
            <tr id="tr-<?php echo $row['id_kastemer']; ?>" class="odd tr-<?php echo $row['status_kstmr']; ?>">
                <td scope="col" class="text-center"><?php echo $no++; ?></td>
                <td scope="col" class="text-center"><?php echo $row['nm_kastemer'] ?></td>
                <td scope="col" class="text-center"><?php echo $row['no_wa'] ?></td>
                <td scope="col" class="text-center"><?php echo $row['email'] ?></td>
                <td scope="col" class="text-center"><?php echo $row['wa_nmperum'] ?></td>
                <td id="tipe<?php echo $row['id_kastemer']; ?>" scope="col" class="text-center"><?php echo $row['wa_tipeperum'] ?></td>
                <td id="status<?php echo $row['id_kastemer']; ?>" scope="col" class="text-center">
                    <?php
                    if ($row['status_kstmr'] == 'belum-dieksport') { ?>
                        <span class="badge badge-danger"><?php echo $row['status_kstmr']; ?></span>
                    <?php } else if ($row['status_kstmr'] == 'siap-dieksport') { ?>
                        <span class="badge badge-warning"><?php echo $row['status_kstmr']; ?></span>
                    <?php } else if ($row['status_kstmr'] == 'sudah-dieksport') { ?>
                        <span class="badge badge-primary"><?php echo $row['status_kstmr']; ?></span>
                    <?php }  ?>
                </td>
                <td scope="col" class="text-center">
                    <input type="checkbox" class="chek-kstmr" id="del_<?php echo $row['id_kastemer']; ?>">
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    $('#datatabel').DataTable();
    $(document).on("click", "#chek-all-datakstmr", function() {
        // alert('ya')
        var file = $(this).parents().find(".chek-kstmr");
        file.trigger("click");
    });

    $('.btn-action-kstmr').click(function() {
        var data_action = $(this).attr('id');
        // $('#action-kstmr').val(data_action);
        // alert('ya');
        var post_arr = [];
        $('#datatabel input[type=checkbox]').each(function() {
            if (jQuery(this).is(":checked")) {
                var id = this.id;
                var splitid = id.split('_');
                var postid = splitid[1];

                post_arr.push(postid);

            }
        });
        if (post_arr.length > 0) {
            // var action = 
            $.ajax({
                url: 'prosess/proses_datakstmr.php',
                type: 'POST',
                data: {
                    post_id: post_arr,
                    action: data_action
                },
                success: function(response) {
                    $.each(post_arr, function(i, l) {

                        $('#status' + l).load('pages/data_pembeli.php #status' + l);
                    });
                }

            });
        }


        // }
    });
</script>