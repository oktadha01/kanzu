<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label>Pilih Perumahan</label>
            <select id="change-perumtipe" class="custom-select">
                <option value="">Pilih Perumahan</option>
                <?php
                include '../koneksi.php';
                $no = 1;
                $query = "SELECT * FROM perumahan ORDER BY id_perum DESC";
                $data = $koneksi->prepare($query);
                $data->execute();
                $res1 = $data->get_result();
                while ($row = $res1->fetch_assoc()) {
                ?>
                    <option value="<?php echo $row['id_perum']; ?> "><?php echo $row['nm_perum']; ?></option>

                <?php } ?>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 col-md-8 col-12">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <label for="lantai-rumah">Lantai</label>
                <div class="form-group">
                    <input type="hidden" id="id-tipeperum" class="form-control" name="id_tipeperum" value="">
                    <input type="number" id="lantai-rumah" class="form-control" name="lantai" placeholder="lantai ..." autocomplete="off" required value="">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <label for="luas-t">Luas-Tanah</label>
                <div class="form-group">
                    <input type="number" id="luas-t" class="form-control" name="luas_t" placeholder="Luas Tanah ..." autocomplete="off" required value="">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <label for="luas-p">Luas Bangunan</label>
                <div class="form-group">
                    <input type="number" id="luas-p" class="form-control" name="luas_p" placeholder="Luas Bangunan ..." autocomplete="off" required value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6">
                <label for="balkon">Balkon</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text pad-cus-6px">
                            <img src="assets/img/ikon-display/balkon.png" alt="PT KANPA Logo" class="heigh-24px">
                        </span>
                    </div>
                    <input type="number" id="balkon" class="form-control" name="balkon" placeholder="Balkon...">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <label for="taman">Taman</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text pad-cus-6px">
                            <img src="assets/img/ikon-display/taman.png" alt="PT KANPA Logo" class="heigh-24px">
                        </span>
                    </div>
                    <input type="number" id="taman" class="form-control" name="taman" placeholder="Taman...">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <label for="carport">Carport</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text pad-cus-6px">
                            <img src="assets/img/ikon-display/carport.png" alt="PT KANPA Logo" class="heigh-24px">
                        </span>
                    </div>
                    <input type="number" id="carportr" class="form-control" name="carportr" placeholder="Carportr...">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <label for="ru-tamu">R-Tamu</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text pad-cus-6px">
                            <img src="assets/img/ikon-display/ru-tamu.png" alt="PT KANPA Logo" class="heigh-24px">
                        </span>
                    </div>
                    <input type="number" id="ru-tamu" class="form-control" name="ru_tamu" placeholder="R-Tamu...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6">
                <label for="ru-keluarga">R-Keluarga</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text pad-cus-6px">
                            <img src="assets/img/ikon-display/ka-tidur.png" alt="PT KANPA Logo" class="heigh-24px">
                        </span>
                    </div>
                    <input type="number" id="ru-keluarga" class="form-control" name="ru_keluarga" placeholder="Ru_Keluarga...">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <label for="ka-tidur">K-Tidur</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text pad-cus-6px">
                            <img src="assets/img/ikon-display/ka-tidur.png" alt="PT KANPA Logo" class="heigh-24px">
                        </span>
                    </div>
                    <input type="number" id="ka-tidur" class="form-control" name="ka_tidur" placeholder="K-Tidur...">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <label for="ka-mandi">K-Mandi</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text pad-cus-6px">
                            <img src="assets/img/ikon-display/ka-mandi.png" alt="PT KANPA Logo" class="heigh-24px">
                        </span>
                    </div>
                    <input type="number" id="ka-mandi" class="form-control" name="ka_mandi" placeholder="K-Mandi...">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <label for="ru-makan">R-Makan</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text pad-cus-6px">
                            <img src="assets/img/ikon-display/ru-makan.png" alt="PT KANPA Logo" class="heigh-24px">
                        </span>
                    </div>
                    <input type="number" id="ru-makan" class="form-control" name="ru_makan" placeholder="Ru-Makan...">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <label for="dapur">Dapur</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text pad-cus-6px">
                            <img src="assets/img/ikon-display/dapur.png" alt="PT KANPA Logo" class="heigh-24px">
                        </span>
                    </div>
                    <input type="number" id="dapur" class="form-control" name="dapur" placeholder="Dapur...">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <label for="harga">Harga</label>
        <div class="form-group">
            <input type="text" id="harga" class="form-control" name="harga" placeholder="Harga ..." autocomplete="off" required value="">
        </div>
        <label for="">Promo</label>
        <div class="input-group mb-3">
            <input type="text" id="promo" name="promo" class="form-control" placeholder="Promo ...">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <label for="">URL VR 360</label>
        <div class="input-group mb-3">
            <textarea type="text" id="url-vr" name="url_vr" class="form-control" placeholder="URL VR 360 ..."></textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-12">
        <div class="form-group">
            <label for="in-foto-display">Gambar Display</label>
            <div class="input-group">
                <input type="file" id="in-foto-display" name="fot_display" class="file-display" hidden>
                <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="nm-foto-display">
                <div class="input-group-append">
                    <button type="button" id="pilih_gambar3" class="browse btn btn-dark">Pilih Gambar</button>
                    <button type="button" id="hapus_gambar3" class="browse btn btn-danger">hapus Gambar</button>
                </div>
            </div>
            <img src="assets/img/80x80.png" id="preview3" class="img-thumbnail width-8rem">
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-12">
        <div class="form-group">
            <label for="in-foto-lantai1">Gambar Lantai 1</label>
            <div class="input-group">
                <input type="file" id="in-foto-lantai1" name="fot_lantai1" class="file-lantai1" hidden>
                <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="nm-foto-lantai1" value="">
                <div class="input-group-append">
                    <button type="button" id="pilih_gambar1" class="browse btn btn-dark">Pilih Gambar</button>
                    <button type="button" id="hapus_gambar1" class="browse btn btn-danger">hapus Gambar</button>
                </div>
            </div>
            <img src="assets/img/80x80.png" id="preview1" class="img-thumbnail width-8rem">
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-12">
        <div class="form-group">
            <label for="in-foto-lantai2">Gambar Lantai 2</label>
            <div class="input-group">
                <input type="file" id="in-foto-lantai2" name="fot_lantai2" class="file-lantai2" hidden>
                <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="nm-foto-lantai2" value="">
                <div class="input-group-append">
                    <button type="button" id="pilih_gambar2" class="browse btn btn-dark">Pilih Gambar</button>
                    <button type="button" id="hapus_gambar2" class="browse btn btn-danger">hapus Gambar</button>
                </div>
            </div>
            <img src="assets/img/80x80.png" id="preview2" class="img-thumbnail width-8rem">
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-12">
        <div class="form-group">
            <label for="in-foto-grid">Foto Grid</label>
            <div class="input-group">
                <input type="file" id="in-foto-grid" name="fot_grid" class="file-grid" hidden>
                <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="nm-foto-grid">
                <div class="input-group-append">
                    <button type="button" id="pilih_gambar4" class="browse btn btn-dark">Pilih Gambar</button>
                    <button type="button" id="hapus_gambar4" class="browse btn btn-danger">hapus Gambar</button>
                </div>
            </div>
            <img src="assets/img/80x80.png" id="preview4" class="img-thumbnail width-8rem">
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="reset" name="simpan" id="simpan-data-tipe" class="btn btn-xs bg-gradient-info float-right elevation-3">
            <i class="fa fa-save"></i> Simpan
        </button>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#hapus_gambar1').hide();
        $('#hapus_gambar2').hide();
        $('#hapus_gambar3').hide();
        $('#hapus_gambar4').hide();

        $('#in-foto-lantai1').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#nm-foto-lantai1").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview1").src = e.target.result;
                $('#hapus_gambar1').show();
                $('#pilih_gambar1').hide();
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        $('#in-foto-lantai2').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#nm-foto-lantai2").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview2").src = e.target.result;
                $('#hapus_gambar2').show();
                $('#pilih_gambar2').hide();
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        $('#in-foto-display').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#nm-foto-display").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview3").src = e.target.result;
                $('#hapus_gambar3').show();
                $('#pilih_gambar3').hide();
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        $('#in-foto-grid').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#nm-foto-grid").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview4").src = e.target.result;
                $('#hapus_gambar4').show();
                $('#pilih_gambar4').hide();
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        $('#hapus_gambar4').click(function(e) {
            $('#nm-foto-grid').val('');
            $('#preview4').attr({
                src: "assets/img/80x80.png"
            });
            $('#pilih_gambar4').show();
            $('#hapus_gambar4').hide();
        });

        $('#hapus_gambar3').click(function(e) {
            $('#nm-foto-display').val('');
            $('#preview3').attr({
                src: "assets/img/80x80.png"
            });
            $('#pilih_gambar3').show();
            $('#hapus_gambar3').hide();

        });

        $('#hapus_gambar2').click(function(e) {
            $('#nm-foto-lantai2').val('');
            $('#preview2').attr({
                src: "assets/img/80x80.png"
            });
            $('#pilih_gambar2').show();
            $('#hapus_gambar2').hide();
        });

        $('#hapus_gambar1').click(function(e) {
            $('#nm-foto-lantai1').val('');
            $('#preview1').attr({
                src: "assets/img/80x80.png"
            });
            $('#pilih_gambar1').show();
            $('#hapus_gambar1').hide();
        });


        // $('#status').val('-');
        // $('#promo').attr('readonly', true);
        // $('#status').click(function(e) {
        //     if ($(this).is(":checked")) {
        //         // profesi.push($(this).val());
        //         $('#status').val('promo');
        //         $('#promo').removeAttr('readonly');
        //         // alert('ya');
        //     } else {
        //         $('#status').val('-')
        //         $('#promo').attr('readonly', true);
        //         // alert('tdk');
        //     }
        // });
        $('#change-perumtipe').change(function(e) {
            var perum = $("#change-perumtipe").find(':selected').val();
            $('#id-tipeperum').val(perum);
        });
        $("#simpan-data-tipe").click(function() {
            alert($('#lantai-rumah').val())
            const in_foto_display = $('#in-foto-display').prop('files')[0];
            const in_foto_grid = $('#in-foto-grid').prop('files')[0];
            const in_foto_lantai1 = $('#in-foto-lantai1').prop('files')[0];
            const in_foto_lantai2 = $('#in-foto-lantai2').prop('files')[0];
            let formData = new FormData();
            formData.append('in-foto-display', in_foto_display);
            formData.append('in-foto-grid', in_foto_grid);
            formData.append('in-foto-lantai1', in_foto_lantai1);
            formData.append('in-foto-lantai2', in_foto_lantai2);
            formData.append('id-tipeperum', $('#id-tipeperum').val());
            formData.append('lantai', $('#lantai-rumah').val());
            formData.append('luas-t', $('#luas-t').val());
            formData.append('luas-p', $('#luas-p').val());
            formData.append('balkon', $('#balkon').val());
            formData.append('taman', $('#taman').val());
            formData.append('carportr', $('#carportr').val());
            formData.append('ru-tamu', $('#ru-tamu').val());
            formData.append('ru-keluarga', $('#ru-keluarga').val());
            formData.append('ka-tidur', $('#ka-tidur').val());
            formData.append('ka-mandi', $('#ka-mandi').val());
            formData.append('ru-makan', $('#ru-makan').val());
            formData.append('dapur', $('#dapur').val());
            formData.append('harga', $('#harga').val());
            formData.append('status', $('#status').val());
            formData.append('promo', $('#promo').val());
            formData.append('url-vr', $('#url-vr').val());
            formData.append('nm-foto-display', $('#nm-foto-display').val());
            formData.append('nm-foto-grid', $('#nm-foto-grid').val());
            formData.append('nm-foto-lantai1', $('#nm-foto-lantai1').val());
            formData.append('nm-foto-lantai2', $('#nm-foto-lantai2').val());

            $.ajax({
                type: 'POST',
                url: "prosess/proses_tambah_tipe.php",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(msg) {
                    alert(msg);
                    $('.data').load("pages/data_perum.php");
                    // $('.data-fasil').load("pages/fasilitas.php");
                    // document.getElementById("form-data-perum").reset();
                    // $('#add-perum-tab').removeClass('active');
                    // $('#add-perum').removeClass('show active');
                    // $('#add-fasilitas-tab').addClass('active');
                    // $('#add-fasilitas').addClass('show active');

                },
                error: function() {
                    alert("Data Gagal Diupload");
                }
            });
        });
    });
</script>