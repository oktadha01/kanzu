<div class="row">
    <div class="col-6">

        <div class="form-group">
            <label>Pilih Perumahan</label>
            <select id="change-idperum" class="custom-select">
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
    <div class="col-12">
        <form id="add_name_lokasi">
            <div id="form-input-lokasi-terdekat">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="">Lokasi</label>
                                <div class="form-group ">
                                    <input type="hidden" class="form-control id-lokperum" id="id-lokperum" name="id_lokperum[]" value="" hidden>
                                    <input type="text" class="form-control" name="lokasi[]" placeholder="Lokasi Terdekat ..." autocomplete="off" required value="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="">Jarak</label>
                                <div class="form-group ">
                                    <input type="text" class="form-control" name="jarak[]" placeholder="Jarak ..." autocomplete="off" required value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="button" id="add-loktedekat" class="btn btn-xs bg-gradient-success elevation-3">
                        <i class="fa-solid fa-square-plus"></i> Tambah
                    </button>
                </div>
                <div class="col-6">
                    <button type="reset" id="save-lokterdekat" class="btn btn-xs bg-gradient-primary float-right elevation-3">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#change-idperum').change(function(e) {
            var perum = $("#change-idperum").find(':selected').val();
            $('.id-lokperum').val(perum);

            $('#add-loktedekat').on('click', function(e) {
                $('.id-lokperum').val(perum);
            });
        });
        var i = 1;
        var app = {
            addRow: function() {
                i++;
                $("#form-input-lokasi-terdekat").append(`
					<div id="row${i}">
                    <div class="row">
                            <div class="col-lg-9 col-md-9 col-12">
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                            <label for="">Lokasi</label>
                                <div class="form-group ">
                                    <input type="hidden" class="form-control id-lokperum" id="id-lokperum" name="id_lokperum[]" value="" hidden>
                                    <input type="text" class="form-control" name="lokasi[]" placeholder="Lokasi Terdekat ..." autocomplete="off" required value="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                            <label for="">Jarak</label>
                                <div class="form-group ">
                                    <input type="text" class="form-control" name="jarak[]" placeholder="Jarak..." autocomplete="off" required value="">
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 mt-2">
                            <label></label>
                            <div class="form-group mb-1">
                                <button type="button" id="${i}" class="col-12 btn btn-danger btn-remove-lokterdekat">Hapus</button>
                            </div>
                            </div>
					    </div>
					</div>
					`)
            },
            remove: function() {
                var idBtn = $(this).attr("id");
                $("#row" + idBtn + "").remove()

            },
            insertData1: function(e) {
                e.preventDefault()
                $.ajax({
                    url: "prosess/proses_tambah_lok_terdekat.php",
                    method: "POST",
                    data: $("#add_name_lokasi").serialize(),
                    success: function(response) {
                        alert(response)
                        $("#add_name_lokasi")[0].reset();
                        $('#add-lokterdekat-tab').removeClass('active');
                        $('#add-lokterdekat').removeClass('show active');
                        $('#add-spesifikasi-tab').addClass('active');
                        $('#add-spesifikasi').addClass('show active');
                        $('.data-spek').load("pages/form_input_spesifikasi.php");
                    }
                })
            }

        }
        $("#add-loktedekat").on("click", app.addRow)
        $(document).on("click", ".btn-remove-lokterdekat", app.remove)
        $("#save-lokterdekat").on("click", app.insertData1)
    })
</script>