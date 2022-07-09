<div class="row">
    <div class="col-6">

        <div class="form-group">
            <label>Pilih Perumahan</label>
            <select id="change-perumspek" class="custom-select">
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
    <div class="col-lg-3 col-12">
        <label for="pondasi">Pondasi</label>
        <div class="form-group">
            <input type="text" id="id-spekperum" class="form-control" name="id_spekperum" required value="" hidden>
            <input type="text" id="pondasi" class="form-control" name="pondasi" placeholder="Pondasi ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="strutur">Struktur</label>
        <div class="form-group">
            <input type="text" id="struktur" class="form-control" name="struktur" placeholder="Struktur ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="rangka-atap">Rangka Atap</label>
        <div class="form-group">
            <input type="text" id="rangka-atap" class="form-control" name="rangka_atap" placeholder="Rangka Atap ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="plafon">Plafon</label>
        <div class="form-group">
            <input type="text" id="plafon" class="form-control" name="plafon" placeholder="Plafon ..." autocomplete="off" required value="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-12">
        <label for="penutup-atap">Penutup Atap</label>
        <div class="form-group">
            <input type="text" id="penutup-atap" class="form-control" name="penutup_atap" placeholder="Penutup Atap ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="dinding">Dinding</label>
        <div class="form-group">
            <input type="text" id="dinding" class="form-control" name="dinding" placeholder="Dinding ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="lantai-utama">Lantai Utama</label>
        <div class="form-group">
            <input type="text" id="lantai-utama" class="form-control" name="lantai_utama" placeholder="Lantai Utama ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="lantai-ka-mandi">Lantai Kamar Mandi</label>
        <div class="form-group">
            <input type="text" id="lantai-ka-mandi" class="form-control" name="lantai_ka_mandi" placeholder="Lantai Kamar Mandi ..." autocomplete="off" required value="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-12">
        <label for="dinding-ka-mandi">Dinding Kamar Mandi</label>
        <div class="form-group">
            <input type="text" id="dinding-ka-mandi" class="form-control" name="dinding_ka_mandi" placeholder="Dinding Kamar Mandi ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="kramik-dapur">Kramik Dapur</label>
        <div class="form-group">
            <input type="text" id="kramik-dapur" class="form-control" name="kramik_dapur" placeholder="Kramik Dapur ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="kun-pin-utama">Kunci Pintu Utama</label>
        <div class="form-group">
            <input type="text" id="kun-pin-utama" class="form-control" name="kun_pin_utama" placeholder="Kunci Pintu Utama ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="pin-utama">Pintu Utama</label>
        <div class="form-group">
            <input type="text" id="pin-utama" class="form-control" name="pin_utama" placeholder="Pintu Utama ..." autocomplete="off" required value="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-12">
        <label for="pin-kamar">Pintu Kamar</label>
        <div class="form-group">
            <input type="text" id="pin-kamar" class="form-control" name="pin_kamar" placeholder="Pintu Kamar ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="kusen-pin">Kusen-pin</label>
        <div class="form-group">
            <input type="text" id="kusen-pin" class="form-control" name="kusen_pin" placeholder="Kusen Pintu ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="kusen-daun-jen">Kusen Dan Daun Jendela</label>
        <div class="form-group">
            <input type="text" id="kusen-daun-jen" class="form-control" name="kusen_daun_jen" placeholder="Kusen & Daun Jendala ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="tangga">Tangga</label>
        <div class="form-group">
            <input type="text" id="tangga" class="form-control" name="tangga" placeholder="Tangga ..." autocomplete="off" required value="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-12">
        <label for="cat-eks">Cat Eksterior</label>
        <div class="form-group">
            <input type="text" id="cat-eks" class="form-control" name="cat_eks" placeholder="Cat Eks ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="cat-int">Cat Interior</label>
        <div class="form-group">
            <input type="text" id="cat-int" class="form-control" name="cat_interior" placeholder="Cat Interior ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="sanitair">Sanitair</label>
        <div class="form-group">
            <input type="text" id="sanitair" class="form-control" name="sanitair" placeholder="Sanitair ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="lantai">Lantai</label>
        <div class="form-group">
            <input type="text" id="lantai" class="form-control" name="lantai" placeholder="Lantai ..." autocomplete="off" required value="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-12">
        <label for="spek-ka-mandi">Kamar Mandi</label>
        <div class="form-group">
            <input type="text" id="spek-ka-mandi" class="form-control" name="spek_ka_mandi" placeholder="Kamar Mandi ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="listrik">Listrik</label>
        <div class="form-group">
            <input type="text" id="listrik" class="form-control" name="listrik" placeholder="Listrik ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="air-bersih">Air Bersih</label>
        <div class="form-group">
            <input type="text" id="air-bersih" class="form-control" name="air_bersih" placeholder="Air Bersih ..." autocomplete="off" required value="">
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <label for="carport">Carport</label>
        <div class="form-group">
            <input type="text" id="spek-carport" class="form-control" name="spek_carport" placeholder="Carport ..." autocomplete="off" required value="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-12">
        <label for="jl-komplek">Jalan Komplek</label>
        <div class="form-group">
            <input type="text" id="jl-komplek" class="form-control" name="jl_komplek" placeholder="Jalan Komplek ..." autocomplete="off" required value="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="reset" name="simpan" id="simpan-data-spek" class="btn btn-xs bg-gradient-info elevation-3">
            <i class="fa fa-save"></i> Simpan
        </button>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#change-perumspek').change(function(e) {
            var perum = $("#change-perumspek").find(':selected').val();
            $('#id-spekperum').val(perum);

        });

        $("#simpan-data-spek").click(function() {
            let formData = new FormData();
            //  formData.append('nm-perum', $('#nm-perum').val());

            formData.append('id-spekperum', $('#id-spekperum').val());
            formData.append('pondasi', $('#pondasi').val());
            formData.append('struktur', $('#struktur').val());
            formData.append('rangka-atap', $('#rangka-atap').val());
            formData.append('plafon', $('#plafon').val());
            formData.append('penutup-atap', $('#penutup-atap').val());
            formData.append('dinding', $('#dinding').val());
            formData.append('lantai-utama', $('#lantai-utama').val());
            formData.append('lantai-ka-mandi', $('#lantai-ka-mandi').val());
            formData.append('dinding-ka-mandi', $('#dinding-ka-mandi').val());
            formData.append('kramik-dapur', $('#kramik-dapur').val());
            formData.append('kun-pin-utama', $('#kun-pin-utama').val());
            formData.append('pin-utama', $('#pin-utama').val());
            formData.append('pin-kamar', $('#pin-kamar').val());
            formData.append('kusen-pin', $('#kusen-pin').val());
            formData.append('kusen-daun-jen', $('#kusen-daun-jen').val());
            formData.append('tangga', $('#tangga').val());
            formData.append('cat-eks', $('#cat-eks').val());
            formData.append('cat-int', $('#cat-int').val());
            formData.append('sanitair', $('#sanitair').val());
            formData.append('lantai', $('#lantai').val());
            formData.append('spek-ka-mandi', $('#spek-ka-mandi').val());
            formData.append('listrik', $('#listrik').val());
            formData.append('air-bersih', $('#air-bersih').val());
            formData.append('spek-carport', $('#spek-carport').val());
            formData.append('jl-komplek', $('#jl-komplek').val());

            $.ajax({
                type: 'POST',
                url: "prosess/proses_tambah_spek.php",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(msg) {
                    alert(msg);
                    $('#add-spesifikasi-tab').removeClass('active');
                    $('#add-spesifikasi').removeClass('show active');
                    $('#add-tipe-tab').addClass('active');
                    $('#add-tipe').addClass('show active');
                    $('.data-tipe').load("pages/form_input_tipe.php");

                },
                error: function() {
                    alert("Data Gagal Diupload");
                }
            });
        });
    });
</script>