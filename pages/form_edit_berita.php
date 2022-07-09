<?php
include '../koneksi.php';
// if (isset($_POST["user_name"])) {
$id_berita = $_POST['post-id-berita'];
$no = 1;
$ambil_data = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita LIKE '$id_berita%'");
while ($row = mysqli_fetch_array($ambil_data)) {
    // $data_id = $row['id_berita'];
?>
    <div class="col-12 p-0">
        <div class="card mt-5rem">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h5>DETAIL DAN EDIT DATA BERITA <?php echo $row['judul']; ?></h5>
                    </div>
                    <div class="col-lg-6 col-12">
                        <button type="button" name="" id="btn-add-perum" class="btn btn-sm btn-info col-12 float-right">
                            <i class="fa fa-save"></i> TAMBAH DATA PERUMHAN
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label for="edit-foto-berita">Foto Berita</label>
                            <div class="input-group">
                                <input type="file" id="edit-foto-berita" name="fot_berita" class="edit-file-berita" hidden>
                                <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="edit-nm-foto-berita" value="<?php echo $row['fot_berita']; ?>">
                                <div class="input-group-append">
                                    <button type="button" id="edit_gambarberita" class="browse btn btn-dark">Pilih Gambar</button>
                                    <button type="button" data-id="<?php echo $row['id_berita']; ?>" id="edithapus_gambarberita" class="browse btn btn-danger">Hapus Gambar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <label for="judul">Judul</label>
                        <div class="form-group ">
                            <input type="text" id="edit-judul" class="form-control" name="judul" placeholder="Judul ..." autocomplete="off" required value="<?php echo $row['judul']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <label for="tgl">TANGGAL</label>
                        <div class="form-group ">
                            <input type="text" id="edit-tgl" class="form-control" name="tgl" placeholder="Tanggal ..." autocomplete="off" required value="<?php echo $row['tgl']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12 mb-3">
                        <img src="assets/img/foto_berita/<?php echo $row['fot_berita']; ?>" id="preview-fot-berita" class="img-thumbnail width-8rem">
                        <button type="button" data-id="<?php echo $row['id_berita']; ?>" id="simpan-gambar-berita" class="browse btn btn-success">Simpan Gambar</button>
                    </div>
                    <div class="col-lg-10 col-md-10 col-12">
                        <div class="form-group">
                            <textarea type="text" id="edit-desk-berita" class="form-control" name="desk_berita" rows="5" placeholder="Deskripsi ..." autocomplete="off" required><?php echo $row['desk_berita']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="cheklis-publis-berita" value="option1">
                                <label for="cheklis-publis-berita" class="custom-control-label">Ceklis untuk menampilkan di dashboard</label>
                                <input type="text" id="status-berita" value="<?php echo $row['status_berita']; ?>" hidden>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="reset" name="simpan" id="edit-data-berita" class="btn btn-xs bg-gradient-info float-right elevation-3">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="text" id="id-berita" value="<?php echo $row['id_berita']; ?>" hidden>
<?php } ?>
<script>
    $(document).ready(function() {

        if ($('#status-berita').val() == 'Ditampilkan') {
            $('#cheklis-publis-berita').prop('checked', true);
            // alert('ya');
        } else {
            // alert('tdk');
            // $('#edit-promo').removeAttr('readonly');
        }

        $('#cheklis-publis-berita').click(function(e) {
            if ($(this).is(":checked")) {
                // profesi.push($(this).val());
                $('#status-berita').val('Ditampilkan');
            } else {
                $('#status-berita').val('');
                // alert('tdk');
            }
        });

        $("#edit-data-berita").click(function() {
            // alert($('#nm-foto-lantai1').val())
            $('#action-berita').val('edit-berita');
            let formData = new FormData();
            formData.append('action-berita', $('#action-berita').val());
            formData.append('id-berita', $('#id-berita').val());
            formData.append('edit-judul', $('#edit-judul').val());
            formData.append('edit-tgl', $('#edit-tgl').val());
            formData.append('edit-desk-berita', $('#edit-desk-berita').val());
            formData.append('status-berita', $('#status-berita').val());
            $.ajax({
                type: 'POST',
                url: "prosess/proses_berita.php",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(msg) {
                    alert(msg);
                    $('.data-berita').load("pages/data_berita.php");
                },
                error: function() {
                    alert("Data Gagal Diupload");
                }
            });
        });

        $('#simpan-gambar-berita').hide();
        $('#edithapus_gambarberita').hide();
        if ($('#edit-nm-foto-berita').val() == '') {
            $('#edithapus_gambarberita').hide();
            $('#edit_gambarberita').show();
            $('#preview-fot-berita').attr({
                src: "assets/img/80x80.png"
            });
        } else {
            $('#edithapus_gambarberita').show();
            $('#edit_gambarberita').hide();
        }
        $('#edit-foto-berita').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#edit-nm-foto-berita").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview-fot-berita").src = e.target.result;
                $('#simpan-gambar-berita').show();
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        $('#edithapus_gambarberita').click(function() {
            $('#action-berita').val('hapus-gambarberita');
            alert('id');
            let formData = new FormData();
            formData.append('action-berita', $('#action-berita').val());
            formData.append('id-berita', $('#id-berita').val());

            $.ajax({
                type: 'POST',
                url: "prosess/proses_berita.php",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(msg) {
                    alert(msg);
                    $('#edit-nm-foto-berita').val('');
                    $('#edit_gambarberita').show();
                    $('#edithapus_gambarberita').hide();
                    $('#preview-fot-berita').attr({
                        src: "assets/img/80x80.png"
                    });
                },
                error: function() {
                    alert("Data Gagal Diupload");
                }
            });
        });

        $('#simpan-gambar-berita').click(function() {
            // alert('ya');
            $('#action-berita').val('simpan-edit-gambarberita');
            const edit_foto_berita = $('#edit-foto-berita').prop('files')[0];
            let formData = new FormData();
            formData.append('edit-foto-berita', edit_foto_berita);
            formData.append('action-berita', $('#action-berita').val());
            formData.append('id-berita', $('#id-berita').val());
            $.ajax({
                type: 'POST',
                url: "prosess/proses_berita.php",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(msg) {
                    alert(msg);
                    $('#simpan-gambar-berita').hide();
                    $('#edithapus_gambarberita').show();
                    $('#edit_gambarberita').hide();

                    // $('#hapus-action-perum-display').show();
                    // $('#action-perum-display').hide();
                },
                error: function() {
                    alert("Data Gagal Diupload");
                }
            });
        });
    });
</script>