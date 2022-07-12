<?php
// $perum = $_GET['id'];
include '../koneksi.php';

$post_id_tipe = $_POST['post-id-tipe'];
$no = 1;
$ambil_data = mysqli_query($koneksi, "SELECT * FROM tipe, perumahan WHERE perumahan.id_perum = tipe.id_tipeperum AND tipe.id_tipe LIKE '$post_id_tipe%'");
while ($row = mysqli_fetch_array($ambil_data)) {
    $data_id = $row['id_tipe'];
?>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-12">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <label for="edit-lantai-perum">Lantai</label>
                    <div class="form-group">
                        <input type="teks" id="edit-id-tipe" class="form-control" name="id_tipe" value="<?php echo $row['id_tipe']; ?>" hidden>
                        <input type="number" id="edit-lantai-perum" class="form-control" name="lantai" placeholder="lantai ..." autocomplete="off" required value="<?php echo $row['lantai']; ?>">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <label for="edit-luas-t">Luas tanah</label>
                    <div class="form-group">
                        <input type="number" id="edit-luas-t" class="form-control" name="luas_t" placeholder="Luas Tanah ..." autocomplete="off" required value="<?php echo $row['luas_t']; ?>">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <label for="edit-luas-p">Luas Penggunaan</label>
                    <div class="form-group">
                        <input type="number" id="edit-luas-p" class="form-control" name="luas_p" placeholder="Luas Penggunaan ..." autocomplete="off" required value="<?php echo $row['luas_p']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6">
                    <label for="edit-balkon">Balkon</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text pad-cus-6px">
                                <img src="assets/img/balkon.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
                            </span>
                        </div>
                        <input type="number" id="edit-balkon" class="form-control" name="balkon" placeholder="Balkon..." value="<?php echo $row['balkon']; ?>">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <label for="edit-taman">Taman</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text pad-cus-6px">
                                <img src="assets/img/taman.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
                            </span>
                        </div>
                        <input type="number" id="edit-taman" class="form-control" name="taman" placeholder="Taman..." value="<?php echo $row['taman']; ?>">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <label for="edit-carportr">Carportr</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text pad-cus-6px">
                                <img src="assets/img/carport2.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
                            </span>
                        </div>
                        <input type="number" id="edit-carportr" class="form-control" name="carportr" placeholder="Carportr..." value="<?php echo $row['carportr']; ?>">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <label for="edit-ru-tamu">Ruang Tamu</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text pad-cus-6px">
                                <img src="assets/img/ruang-tamu.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
                            </span>
                        </div>
                        <input type="number" id="edit-ru-tamu" class="form-control" name="ru_tamu" placeholder="R-Tamu..." value="<?php echo $row['ru_tamu']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6">
                    <label for="edit-ru-keluarga">Ruang Keluarga</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text pad-cus-6px">
                                <img src="assets/img/kamar-tidur.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
                            </span>
                        </div>
                        <input type="number" id="edit-ru-keluarga" class="form-control" name="ru_keluarga" placeholder="Ru_Keluarga..." value="<?php echo $row['ru_keluarga']; ?>">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <label for="edit-ka-tidur">Kamar Tidur</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text pad-cus-6px">
                                <img src="assets/img/kamar-tidur.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
                            </span>
                        </div>
                        <input type="number" id="edit-ka-tidur" class="form-control" name="ka_tidur" placeholder="K-Tidur..." value="<?php echo $row['ka_tidur']; ?>">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <label for="edit-ka-mandi">Kamar Mandi</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text pad-cus-6px">
                                <img src="assets/img/kamar-mandi.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
                            </span>
                        </div>
                        <input type="number" id="edit-ka-mandi" class="form-control" name="ka_mandi" placeholder="K-Mandi..." value="<?php echo $row['ka_mandi']; ?>">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text pad-cus-6px">
                                <img src="assets/img/r-makan.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
                            </span>
                        </div>
                        <input type="number" id="edit-ru-makan" class="form-control" name="ru_makan" placeholder="Ru-Makan...">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <label for="edit-dapur">Dapur</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text pad-cus-6px">
                                <img src="assets/img/dapur.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
                            </span>
                        </div>
                        <input type="number" id="edit-dapur" class="form-control" name="dapur" placeholder="Dapur..." value="<?php echo $row['dapur']; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <label for="edit-harga">Harga</label>
            <div class="form-group">
                <input type="text" id="edit-harga" class="form-control" name="harga" placeholder="Harga ..." autocomplete="off" required value="<?php echo $row['harga']; ?>">
            </div>
            <label for="edit-status">Promo</label>
            <div class="input-group mb-3">
                <input type="text" id="edit-promo" name="promo" class="form-control" placeholder="Promo ..." value="<?php echo $row['promo']; ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="">URL VR 360</label>
            <div class="input-group mb-3">
                <textarea type="text" id="edit-url-vr" name="url_vr" class="form-control" placeholder="URL VR 360 ..."></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label for="in-gambar-editdisplay">Gambar Display</label>
                <div class="input-group">
                    <input type="file" id="in-gambar-editdisplay" name="fot_display" class="file-editdisplay" hidden>
                    <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="nm-gambar-editdisplay" value="<?php echo $row['fot_display']; ?>">
                    <div class="input-group-append">
                        <button type="button" id="edit-gambar-display" class="browse btn btn-dark">Pilih Gambar</button>
                        <button type="button" data-id="<?php echo $row['id_tipe']; ?>" id="hapus-edit-gambar-display" class="browse btn btn-danger">Hapus Gambar</button>
                    </div>
                </div>
                <div class="row">
                    <img src="assets/img/foto_display/<?php echo $row['fot_display']; ?>" id="editpreview-display" class="img-thumbnail width-8rem">
                </div>
                <div class="row">
                    <button type="button" data-id="<?php echo $row['id_tipe']; ?>" id="simpan-gambar-display" class="browse btn btn-success">Simpan Gambar</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="in-gambar-editlantai1">Gambar Lantai 1</label>
                <div class="input-group">
                    <input type="file" id="in-gambar-editlantai1" name="fot_lantai1" class="file-editlantai1" hidden>
                    <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="nm-gambar-editlantai1" value="<?php echo $row['fot_lantai1']; ?>">
                    <div class="input-group-append">
                        <button type="button" data-id="<?php echo $row['id_tipe']; ?>" id="edit-gambar-lantai1" class="browse btn btn-dark">Pilih Gambar</button>
                        <button type="button" data-id="<?php echo $row['id_tipe']; ?>" id="hapus-edit-gambar-lantai1" class="browse btn btn-danger">Hapus Gambar</button>
                    </div>
                </div>
                <div class="row">
                    <img src="assets/img/foto_lantai1/<?php echo $row['fot_lantai1']; ?>" id="editpreview-lantai1" class="img-thumbnail width-8rem">
                </div>
                <div class="row">
                    <button type="button" data-id="<?php echo $row['id_tipe']; ?>" id="simpan-gambar-lantai1" class="browse btn btn-success">Simpan Gambar</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="in-gambar-editlantai2">Gambar Lantai 2</label>
                <div class="input-group">
                    <input type="file" id="in-gambar-editlantai2" name="fot_lantai2" class="file-editlantai2" hidden>
                    <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="nm-gambar-editlantai2" value="<?php echo $row['fot_lantai2']; ?>">
                    <div class="input-group-append">
                        <button type="button" data-id="<?php echo $row['id_tipe']; ?>" id="edit-gambar-lantai2" class="browse btn btn-dark">Pilih Gambar</button>
                        <button type="button" data-id="<?php echo $row['id_tipe']; ?>" id="hapus-edit-gambar-lantai2" class="browse btn btn-danger">Hapus Gambar</button>
                    </div>
                </div>
                <div class="row">
                    <img src="assets/img/foto_lantai2/<?php echo $row['fot_lantai2']; ?>" id="editpreview-lantai2" class="img-thumbnail width-8rem">
                </div>
                <div class="row">
                    <button type="button" data-id="<?php echo $row['id_tipe']; ?>" id="simpan-gambar-lantai2" class="browse btn btn-success">Simpan Gambar</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="in-gambar-editgrid">Foto Grid</label>
                <div class="input-group">
                    <input type="file" id="in-gambar-editgrid" name="fot_grid" class="file-editgrid" hidden>
                    <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="nm-gambar-editgrid" value="<?php echo $row['fot_grid']; ?>">
                    <div class="input-group-append">
                        <button type="button" data-id="<?php echo $row['id_tipe']; ?>" id="edit-gambar-grid" class="browse btn btn-dark">Pilih Gambar</button>
                        <button type="button" data-id="<?php echo $row['id_tipe']; ?>" id="hapus-edit-gambar-grid" class="browse btn btn-danger">Hapus Gambar</button>
                    </div>
                </div>
                <div class="row">
                    <img src="assets/img/foto_grid/<?php echo $row['fot_grid']; ?>" id="editpreview-grid" class="img-thumbnail width-8rem">
                </div>
                <div class="row">
                    <button type="button" data-id="<?php echo $row['id_tipe']; ?>" id="simpan-gambar-grid" class="browse btn btn-success">Simpan Gambar</button>
                </div>
            </div>
        </div>
        <input type="text" id="edit-gambar" value="" hidden>
        <input type="text" id="id-gambar" value="" hidden>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <button type="button" name="simpan" id="hapus-tipe" data-id="<?php echo $row['id_tipe']; ?>" class="btn btn-md bg-gradient-danger float-left elevation-3">
                <i class="fa fa-trash"></i> Hapus Tipe <?php echo $row['luas_p']; ?> Perum <?php echo $row['nm_perum']; ?>
            </button>
            <button type="reset" name="simpan" id="" class="simpan-edit-tipe btn btn-md bg-gradient-primary float-right elevation-3">
                <i class="fa fa-save"></i> Simpan
            </button>
        </div>
    </div>
<?php } ?>
<script>
    $('#in-gambar-editdisplay').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#nm-gambar-editdisplay").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("editpreview-display").src = e.target.result;
            $('#simpan-gambar-display').show();
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    $('#in-gambar-editlantai1').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#nm-gambar-editlantai1").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("editpreview-lantai1").src = e.target.result;
            $('#simpan-gambar-lantai1').show();
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    $('#in-gambar-editlantai2').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#nm-gambar-editlantai2").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("editpreview-lantai2").src = e.target.result;
            $('#simpan-gambar-lantai2').show();
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    $('#in-gambar-editgrid').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#nm-gambar-editgrid").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("editpreview-grid").src = e.target.result;
            $('#simpan-gambar-grid').show();

        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    if ($('#nm-gambar-editdisplay').val() == '') {
        $('#hapus-edit-gambar-display').hide();
        $('#edit-gambar-display').show();
        $('#editpreview-display').attr({
            src: "assets/img/80x80.png"
        });
    } else {
        $('#hapus-edit-gambar-display').show();
        $('#edit-gambar-display').hide();
    }

    if ($('#nm-gambar-editlantai1').val() == '') {
        $('#edit-gambar-lantai1').show();
        $('#hapus-edit-gambar-lantai1').hide();
        $('#editpreview-lantai1').attr({
            src: "assets/img/80x80.png"
        });
    } else {
        $('#hapus-edit-gambar-lantai1').show();
        $('#edit-gambar-lantai1').hide();
    }

    if ($('#nm-gambar-editlantai2').val() == '') {
        $('#edit-gambar-lantai2').show();
        $('#hapus-edit-gambar-lantai2').hide();
        $('#editpreview-lantai2').attr({
            src: "assets/img/80x80.png"
        });
    } else {
        $('#hapus-edit-gambar-lantai2').show();
        $('#edit-gambar-lantai2').hide();
    }

    if ($('#nm-gambar-editgrid').val() == '') {
        $('#edit-gambar-grid').show();
        $('#hapus-edit-gambar-grid').hide();
        $('#editpreview-grid').attr({
            src: "assets/img/80x80.png"
        });
    } else {
        $('#hapus-edit-gambar-grid').show();
        $('#edit-gambar-grid').hide();
    }

    $('#simpan-gambar-display').hide();
    $('#simpan-gambar-lantai1').hide();
    $('#simpan-gambar-lantai2').hide();
    $('#simpan-gambar-grid').hide();

    $('#simpan-gambar-display').click(function() {
        var id = $(this).data('id');
        $('#id-gambar').val(id);
        $('#edit-gambar').val('display');
        const in_gambar_editdisplay = $('#in-gambar-editdisplay').prop('files')[0];
        let formData = new FormData();
        formData.append('in-gambar-editdisplay', in_gambar_editdisplay);
        formData.append('edit-gambar', $('#edit-gambar').val());
        formData.append('id-gambar', $('#id-gambar').val());
        $.ajax({
            type: 'POST',
            url: "prosess/proses_edit_fototipe.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(msg) {
                alert(msg);
                $('#simpan-gambar-display').hide();
                $('#hapus-edit-gambar-display').show();
                $('#edit-gambar-display').hide();
            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
    });

    $('#simpan-gambar-lantai1').click(function() {
        var id = $(this).data('id');
        $('#id-gambar').val(id);
        $('#edit-gambar').val('lantai1');
        const in_gambar_editlantai1 = $('#in-gambar-editlantai1').prop('files')[0];
        let formData = new FormData();
        formData.append('in-gambar-editlantai1', in_gambar_editlantai1);
        formData.append('edit-gambar', $('#edit-gambar').val());
        formData.append('id-gambar', $('#id-gambar').val());
        $.ajax({
            type: 'POST',
            url: "prosess/proses_edit_fototipe.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(msg) {
                alert(msg);
                $('#simpan-gambar-lantai1').hide();
                $('#hapus-edit-gambar-lantai1').show();
                $('#edit-gambar-lantai1').hide();

            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
    });

    $('#simpan-gambar-lantai2').click(function() {
        var id = $(this).data('id');
        $('#id-gambar').val(id);
        $('#edit-gambar').val('lantai2');
        const in_gambar_editlantai2 = $('#in-gambar-editlantai2').prop('files')[0];
        let formData = new FormData();
        formData.append('in-gambar-editlantai2', in_gambar_editlantai2);
        formData.append('edit-gambar', $('#edit-gambar').val());
        formData.append('id-gambar', $('#id-gambar').val());
        $.ajax({
            type: 'POST',
            url: "prosess/proses_edit_fototipe.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(msg) {
                alert(msg);
                $('#simpan-gambar-lantai2').hide();
                $('#hapus-edit-gambar-lantai2').show();
                $('#edit-gambar-lantai2').hide();
            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
    });

    $('#simpan-gambar-grid').click(function() {
        var id = $(this).data('id');
        $('#id-gambar').val(id);
        $('#edit-gambar').val('grid');
        const in_gambar_editgrid = $('#in-gambar-editgrid').prop('files')[0];
        let formData = new FormData();
        formData.append('in-gambar-editgrid', in_gambar_editgrid);
        formData.append('edit-gambar', $('#edit-gambar').val());
        formData.append('id-gambar', $('#id-gambar').val());
        $.ajax({
            type: 'POST',
            url: "prosess/proses_edit_fototipe.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(msg) {
                alert(msg);
                $('#simpan-gambar-grid').hide();
                $('#hapus-edit-gambar-grid').show();
                $('#edit-gambar-grid').hide();

            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
    });

    $('#hapus-edit-gambar-grid').click(function() {
        var id = $(this).data('id');
        $('#id-gambar').val(id);
        $('#edit-gambar').val('grid');
        // alert(id);
        let formData = new FormData();
        formData.append('edit-gambar', $('#edit-gambar').val());
        formData.append('id-gambar', $('#id-gambar').val());

        $.ajax({
            type: 'POST',
            url: "prosess/proses_hapus_foto.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(msg) {
                // alert('ya');
                alert(msg);
                $('#nm-gambar-editgrid').val('');
                $('#edit-gambar-grid').show();
                $('#hapus-edit-gambar-grid').hide();
                $('#editpreview-grid').attr({
                    src: "assets/img/80x80.png"
                });
            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
    });

    $('#hapus-edit-gambar-display').click(function() {
        var id = $(this).data('id');
        $('#id-gambar').val(id);
        $('#edit-gambar').val('display');
        // alert(id);
        let formData = new FormData();
        formData.append('edit-gambar', $('#edit-gambar').val());
        formData.append('id-gambar', $('#id-gambar').val());

        $.ajax({
            type: 'POST',
            url: "prosess/proses_hapus_foto.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(msg) {
                alert(msg);
                $('#nm-gambar-editdisplay').val('');
                $('#edit-gambar-display').show();
                $('#hapus-edit-gambar-display').hide();
                $('#editpreview-display').attr({
                    src: "assets/img/80x80.png"
                });
            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
    });

    $('#hapus-edit-gambar-lantai1').click(function() {
        var id = $(this).data('id');
        $('#id-gambar').val(id);
        $('#edit-gambar').val('lantai1');
        // alert(id);
        let formData = new FormData();
        formData.append('edit-gambar', $('#edit-gambar').val());
        formData.append('id-gambar', $('#id-gambar').val());

        $.ajax({
            type: 'POST',
            url: "prosess/proses_hapus_foto.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(msg) {
                alert(msg);
                $('#nm-gambar-editlantai1').val('');
                $('#edit-gambar-lantai1').show();
                $('#hapus-edit-gambar-lantai1').hide();
                $('#editpreview-lantai1').attr({
                    src: "assets/img/80x80.png"
                });

            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
    });

    $('#hapus-edit-gambar-lantai2').click(function() {
        var id = $(this).data('id');
        $('#id-gambar').val(id);
        $('#edit-gambar').val('lantai2');
        // alert(id);
        let formData = new FormData();
        formData.append('edit-gambar', $('#edit-gambar').val());
        formData.append('id-gambar', $('#id-gambar').val());

        $.ajax({
            type: 'POST',
            url: "prosess/proses_hapus_foto.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(msg) {
                alert(msg);
                $('#nm-gambar-editlantai2').val('');
                $('#edit-gambar-lantai2').show();
                $('#hapus-edit-gambar-lantai2').hide();
                $('#editpreview-lantai2').attr({
                    src: "assets/img/80x80.png"
                });
            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
    });

    $('#hapus-tipe').click(function(e) {
        var el = this;
        // Delete id
        var id = $(this).data('id');
        $('#id_data').val(id);
        var confirmalert = confirm("Are you sure?");
        if (confirmalert == true) {
            $('#action_hapus_data').val('hapus-data-tipe');
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
                    $('#form-input-data-perum').removeAttr('hidden');
                    $('#detail').attr('hidden', true);
                }
            });
        }
    });

    $(".simpan-edit-tipe").click(function() {
        let formData = new FormData();
        formData.append('edit-id-tipe', $('#edit-id-tipe').val());
        formData.append('edit-lantai-perum', $('#edit-lantai-perum').val());
        formData.append('edit-luas-t', $('#edit-luas-t').val());
        formData.append('edit-luas-p', $('#edit-luas-p').val());
        formData.append('edit-balkon', $('#edit-balkon').val());
        formData.append('edit-taman', $('#edit-taman').val());
        formData.append('edit-carportr', $('#edit-carportr').val());
        formData.append('edit-ru-tamu', $('#edit-ru-tamu').val());
        formData.append('edit-ru-keluarga', $('#edit-ru-keluarga').val());
        formData.append('edit-ka-tidur', $('#edit-ka-tidur').val());
        formData.append('edit-ka-mandi', $('#edit-ka-mandi').val());
        formData.append('edit-ru-makan', $('#edit-ru-makan').val());
        formData.append('edit-dapur', $('#edit-dapur').val());
        formData.append('edit-harga', $('#edit-harga').val());
        formData.append('edit-promo', $('#edit-promo').val());
        formData.append('edit-url-vr', $('#edit-url-vr').val());

        $.ajax({
            type: 'POST',
            url: "prosess/proses_edit_data_tipe.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(msg) {
                // alert('ya');
                alert(msg);
                $('.data').load("pages/data_perum.php");
            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });


    });
</script>