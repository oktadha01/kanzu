<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="change-perum">Pilih Perumahan</label>
            <select id="change-perum" class="custom-select">
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
        <form id="add_name-fasilitas">
            <div id="form-input-fasilitas">
                <div class="row">
                    <div class="col-9">
                        <label for="">Fasilitas</label>
                        <div class="form-group ">
                            <input type="hidden" class="form-control id_perum" id="id_perum" name="id_fasperum[]" value="" hidden>
                            <input type="text" class="form-control" name="nmfas[]" placeholder="Fasilitas ..." autocomplete="off" required value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="button" name="simpan" id="add-fasil" class="btn btn-xs bg-gradient-success elevation-3">
                        <i class="fa-solid fa-square-plus"></i> Tambah
                    </button>
                </div>
                <div class="col-6">
                    <button type="reset" name="simpan" id="save-fasil" class="btn btn-xs bg-gradient-primary float-right elevation-3">
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
        $('#change-perum').change(function(e) {
            var perum = $("#change-perum").find(':selected').val();
            $('.id_perum').val(perum);

            $('#add-fasil').on('click', function(e) {
                $('.id_perum').val(perum);
            });
        });
        var i = 1;
        var app = {
            addRow: function() {
                i++;
                $("#form-input-fasilitas").append(`
					<div id="row${i}">
                    <div class="row">
                            <div class="col-9">
                                <div class="form-group ">
                                    <input type="hidden" id="id_perum" class="form-control id_perum" name="id_fasperum[]" required value="">
                                    <input type="text" class="form-control" name="nmfas[]" placeholder="Fasilitas ..." autocomplete="off" required value="">
                                </div>
                            </div>
                            <div class="col-3">
                                <button type="button" id="${i}" class="btn btn-danger btn-remove-fasil">Hapus</button>
                            </div>
					    </div>
					</div>
					`)
            },
            removeData_fasil: function() {
                var idBtn = $(this).attr("id");
                $("#row" + idBtn + "").remove()

            },
            insertData_fasil: function(e) {
                e.preventDefault()
                $.ajax({
                    url: "prosess/proses_tambah_fasil.php",
                    method: "POST",
                    data: $("#add_name-fasilitas").serialize(),
                    success: function(response) {
                        alert(response)
                        $("#add_name-fasilitas")[0].reset()
                        $('#add-fasilitas-tab').removeClass('active');
                        $('#add-fasilitas').removeClass('show active');
                        $('#add-lokterdekat-tab').addClass('active');
                        $('#add-lokterdekat').addClass('show active');
                        // $('.data-lokterdekat').load("pages/form_input_lokterdekat.php");
                    }
                })
            }

        }
        $("#add-fasil").on("click", app.addRow)
        $(document).on("click", ".btn-remove-fasil", app.removeData_fasil)
        $("#save-fasil").on("click", app.insertData_fasil)
    })
</script>