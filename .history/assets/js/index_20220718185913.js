$(document).ready(function () {


    $('#detail').load("pages/form_edit_perum.php");
    $('.data').load("pages/data_perum.php");
    $('.data-fasil').load("pages/fasilitas.php");
    $('.data-lokterdekat').load("pages/form_input_lokterdekat.php");
    $('.data-spek').load("pages/form_input_spesifikasi.php");
    $('.data-tipe').load("pages/form_input_tipe.php");
    $('#data-pembeli').load('pages/data_pembeli.php');

    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("bor-est");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
            alert('ya');
            var current = document.getElementsByClassName("bor-est-active");
            current[0].className = current[0].className.replace(" bor-est-active", "");
            this.className += " bor-est-active";
        });
    }

    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 2500,
        dots: true
    });

    bsCustomFileInput.init();

    $('.nav-tab1').addClass('active');
    let formData = new FormData();
    formData.append('id-perum-tipe', $('#id-perum-tipe').val());
    formData.append('id-tipe', $('#id-tipe').val());
    $.ajax({
        type: 'POST',
        url: "pages/data_detail_tipe.php",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (data) {
            // alert(data);
            $("#data-detail-tipe").html(data);
        }
    });

    // CHAT WA
    $('#pilih-tipe').change(function (e) {
        var tipe = $("#pilih-tipe").find(':selected').text();
        // $('#id-pilih-tipe').val(tipe);
        $('#wa-tipeperum').val(tipe);
    });
    $('#pilih-perum').change(function (e) {
        $('#chooseFile').removeAttr('disabled', true);
        var perum = $("#pilih-perum").find(':selected').val();
        var perum_teks = $("#pilih-perum").find(':selected').text();
        $('#id-pilih-perum').val(perum);
        $('#action').val('input');
        $('#wa-nmperum').val(perum_teks);
        // alert(perum_teks);
        let formData = new FormData();
        formData.append('id-pilih-perum', $('#id-pilih-perum').val());
        formData.append('action', $('#action').val());
        $.ajax({
            type: 'POST',
            url: "prosess/proses_fotslide.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function (msg) {
                // alert(data);
                $("#pilih-tipe").html(msg);

            },
            error: function () {
                alert("Data Gagal Diupload");
            }
        });
    });
    // END CHAT WA

    $('#detail').attr('hidden', true);
    // $('.data-foto-slide').load("pages/form_foto_slide.php");



    // INPUT TIPE
    $(document).on("click", "#pilih_gambar1", function () {
        var file = $(this).parents().find(".file-lantai1");
        file.trigger("click");
    });
    $(document).on("click", "#pilih_gambar2", function () {
        var file = $(this).parents().find(".file-lantai2");
        file.trigger("click");
    });

    $(document).on("click", "#pilih_gambar3", function () {
        var file = $(this).parents().find(".file-display");
        file.trigger("click");
    });
    $(document).on("click", "#pilih_gambar4", function () {
        var file = $(this).parents().find(".file-grid");
        file.trigger("click");
    });
    // END INPUT TIPE

    // INPUT FOTO BERITA
    $(document).on("click", "#pilih-fot-berita", function () {
        var file = $(this).parents().find(".file-berita");
        file.trigger("click");
    });

    $('#in-foto-berita').change(function (e) {
        var fileName = e.target.files[0].name;
        $("#nm-foto-berita").val(fileName);

        var reader = new FileReader();
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview-fot-berita").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    $("#simpan-data-berita").click(function () {
        // alert($('#nm-foto-lantai1').val())
        $('#action-berita').val('tambah-berita');
        const in_foto_berita = $('#in-foto-berita').prop('files')[0];
        let formData = new FormData();
        formData.append('action-berita', $('#action-berita').val());
        formData.append('in-foto-berita', in_foto_berita);
        formData.append('judul', $('#judul').val());
        formData.append('tgl', $('#tgl').val());
        formData.append('desk-berita', $('#desk-berita').val());
        $.ajax({
            type: 'POST',
            url: "prosess/proses_berita.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function (msg) {
                alert(msg);
                $('.data').load("pages/data_berita.php");
            },
            error: function () {
                alert("Data Gagal Diupload");
            }
        });
    });
    // END INPUT FOTO BERITA

    // EDIT FOTO LOGO PERUM
    $(document).on("click", "#edit_gambarlogo", function () {
        var file = $(this).parents().find(".edit-file-logo");
        file.trigger("click");
    });
    // END EDIT FOTO LOGO PERUM

    $('#add-berita-tab').click(function (e) {
        $('.data').load("pages/data_berita.php");
    });

    $('#add-tipe-tab, #add-spesifikasi-tab, #add-lokterdekat-tab, #add-fasilitas-tab, #add-perum-tab').click(function (e) {
        $('.data').load("pages/data_perum.php");
    });

    // EDIT FOTO BERITA
    $(document).on("click", "#edit_gambarberita", function () {
        var file = $(this).parents().find(".edit-file-berita");
        file.trigger("click");
    });
    // END EDIT FOTO BERITA

    // TIPE EDIT
    $(document).on("click", "#edit-gambar-display", function () {
        var file = $(this).parents().find(".file-editdisplay");
        file.trigger("click");
    });

    $(document).on("click", "#edit-gambar-lantai1", function () {
        var file = $(this).parents().find(".file-editlantai1");
        file.trigger("click");
    });

    $(document).on("click", "#edit-gambar-lantai2", function () {
        var file = $(this).parents().find(".file-editlantai2");
        file.trigger("click");
    });

    $(document).on("click", "#edit-gambar-grid", function () {
        var file = $(this).parents().find(".file-editgrid");
        file.trigger("click");
    });

    $(document).on('click', '.edit-data-tipe', function () {
        // $("#dynamic_field-edit").remove();
        var id_tipe = $(this).attr('id');
        $('#post-id-tipe').val(id_tipe);
        // alert(id_tipe);
        let formData = new FormData();
        formData.append('post-id-tipe', $('#post-id-tipe').val());

        $.ajax({
            type: 'POST',
            url: "pages/form_edit_tipe.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function (data) {
                // alert(data);
                $("#form-edit-tipe").html(data);
                // $('#detail').removeAttr('hidden');
                // $('#form-input-data-perum').attr('hidden', true);
                // $('#detail').load("pages/form_edit_perum.php");

            },
            error: function () {
                alert("Data Gagal Diupload");
            }
        });
    });
    // END TIPE EDIT



    $(document).on('click', '.detail-edit-data', function () {
        // $("#dynamic_field-edit").remove();
        var data_id = $(this).attr('id');
        $('#post-id-perum').val(data_id);
        let formData = new FormData();
        formData.append('post-id-perum', $('#post-id-perum').val());

        $.ajax({
            type: 'POST',
            url: "pages/form_edit_perum.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function (data) {
                // alert(data);
                $("#detail").html(data);
                $('#detail').removeAttr('hidden');
                $('#form-input-data-perum').attr('hidden', true);
                // $('#detail').load("pages/form_edit_perum.php");



            },
            error: function () {
                alert("Data Gagal Diupload");
            }
        });
    });

    $(document).on('click', '.editdetail_berita', function () {
        // $("#dynamic_field-edit").remove();
        var id_berita = $(this).attr('id');
        $('#post-id-berita').val(id_berita);
        let formData = new FormData();
        formData.append('post-id-berita', $('#post-id-berita').val());

        $.ajax({
            type: 'POST',
            url: "pages/form_edit_berita.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function (data) {
                // alert(data);
                $("#detail-berita").html(data);
                $('#detail-berita').removeAttr('hidden');
                $('#form-input-data-perum').attr('hidden', true);
            },
            error: function () {
                alert("Data Gagal Diupload");
            }
        });
    });


    // $('.dataTables_filter').attr('hidden', true);
    // alert($('#reservation').val())
});