<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->


<?php

$minimum_range = 100;

$maximum_range = 500;

?>
<section class="content-header pt-5rem">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <!-- <h3 align="center">Membuat Filter Harga Menggunakan AJAXJQuery Dan PHP</h3> -->
                <h5>Pilih Harga</h5>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-4 btn-est">
                        <a class="bor-est" href="">
                            <button type="button" name="" id="harga1" class="btn btn-xs ">
                                <h6 class="font-weight-bold mb-0"><i class="fa-regular fa-money-bill-1"></i> 200 - 250 jt</h6>
                            </button>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-4">
                        <button type="button" name="" id="harga2" class="btn btn-xs bor-est">
                            <h6 class="font-weight-bold mb-0"><i class="fa-regular fa-money-bill-1"></i> 251 - 300 jt</h6>
                        </button>
                    </div>
                    <div class="col-lg-2 col-md-4 col-4">
                        <button type="button" name="" id="harga3" class="btn btn-xs bor-est">
                            <h6 class="font-weight-bold mb-0"><i class="fa-regular fa-money-bill-1"></i> 301 - 400 jt</h6>
                        </button>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-2 col-md-4 col-4">
                        <button type="button" name="" id="harga4" class="btn btn-xs bor-est">
                            <h6 class="font-weight-bold mb-0"><i class="fa-regular fa-money-bill-1"></i> 401 - 500 jt</h6>
                        </button>
                    </div>
                    <div class="col-lg-2 col-md-4 col-4">
                        <button type="button" name="" id="harga5" class="btn btn-xs bor-est">
                            <h6 class="font-weight-bold mb-0"><i class="fa-regular fa-money-bill-1"></i> 501 - 600 jt</h6>
                        </button>
                    </div>
                    <div class="col-lg-2 col-md-4 col-4">
                        <button type="button" name="" id="harga6" class="btn btn-xs bor-est">
                            <h6 class="font-weight-bold mb-0"><i class="fa-regular fa-money-bill-1"></i> 601 jt - 1 M</h6>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="padding-top:12px">
                        <div id="price_range"></div>
                    </div>
                </div>
                <div id="load_product" class="row"></div>
            </div>
        </div>
    </div>
</section>
<input type="text" id="minimum_range" value="200" hidden>
<input type="text" id="maximum_range" value="250" hidden>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(document).ready(function() {
        let formData = new FormData();
        formData.append('minimum_range', $('#minimum_range').val());
        formData.append('maximum_range', $('#maximum_range').val());
        $.ajax({
            type: 'POST',
            url: "pages/produk_perum.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(data) {
                // alert(msg);
                $('#load_product').fadeIn('slow').html(data);

            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
        $('#harga1').click(function(e) {
            $("#minimum_range").val('200');
            $("#maximum_range").val('250');
            let formData = new FormData();
            formData.append('minimum_range', $('#minimum_range').val());
            formData.append('maximum_range', $('#maximum_range').val());
            $.ajax({
                type: 'POST',
                url: "pages/produk_perum.php",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    // alert(msg);
                    $('#load_product').fadeIn('slow').html(data);

                },
                error: function() {
                    alert("Data Gagal Diupload");
                }
            });
        });
        $('#harga2').click(function(e) {
            $("#minimum_range").val('251');
            $("#maximum_range").val('300');
            let formData = new FormData();
            formData.append('minimum_range', $('#minimum_range').val());
            formData.append('maximum_range', $('#maximum_range').val());
            $.ajax({
                type: 'POST',
                url: "pages/produk_perum.php",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    // alert(msg);
                    $('#load_product').fadeIn('slow').html(data);

                },
                error: function() {
                    alert("Data Gagal Diupload");
                }
            });
        });
        $('#harga3').click(function(e) {
            $("#minimum_range").val('301');
            $("#maximum_range").val('400');
            let formData = new FormData();
            formData.append('minimum_range', $('#minimum_range').val());
            formData.append('maximum_range', $('#maximum_range').val());
            $.ajax({
                type: 'POST',
                url: "pages/produk_perum.php",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    // alert(msg);
                    $('#load_product').fadeIn('slow').html(data);

                },
                error: function() {
                    alert("Data Gagal Diupload");
                }
            });
        });
        $('#harga4').click(function(e) {
            $("#minimum_range").val('401');
            $("#maximum_range").val('500');
            let formData = new FormData();
            formData.append('minimum_range', $('#minimum_range').val());
            formData.append('maximum_range', $('#maximum_range').val());
            $.ajax({
                type: 'POST',
                url: "pages/produk_perum.php",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    // alert(msg);
                    $('#load_product').fadeIn('slow').html(data);

                },
                error: function() {
                    alert("Data Gagal Diupload");
                }
            });
        });
        $('#harga5').click(function(e) {
            $("#minimum_range").val('501');
            $("#maximum_range").val('600');
            let formData = new FormData();
            formData.append('minimum_range', $('#minimum_range').val());
            formData.append('maximum_range', $('#maximum_range').val());
            $.ajax({
                type: 'POST',
                url: "pages/produk_perum.php",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    // alert(msg);
                    $('#load_product').fadeIn('slow').html(data);

                },
                error: function() {
                    alert("Data Gagal Diupload");
                }
            });
        });
        $('#harga6').click(function(e) {
            $("#minimum_range").val('601');
            $("#maximum_range").val('1 m');
            let formData = new FormData();
            formData.append('minimum_range', $('#minimum_range').val());
            formData.append('maximum_range', $('#maximum_range').val());
            $.ajax({
                type: 'POST',
                url: "pages/produk_perum.php",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    // alert(msg);
                    $('#load_product').fadeIn('slow').html(data);

                },
                error: function() {
                    alert("Data Gagal Diupload");
                }
            });
        });
        // $('#minimum_range').on('input', function(e) {
        //     var file = $(this).parents().find("#price_range");
        //     file.trigger("slider");
        // });
        // $("#price_range").slider({
        //     range: true,
        //     min: 100,
        //     max: 500,
        //     values: [<?php echo $minimum_range; ?>, <?php echo $maximum_range; ?>],
        //     slide: function(event, ui) {
        //         $("#minimum_range").val(ui.values[0]);

        //         $("#maximum_range").val(ui.values[1]);

        //         load_product(ui.values[0], ui.values[1]);
        //     }
        // });

        // load_product(<?php echo $minimum_range; ?>, <?php echo $maximum_range; ?>);

        // function load_product(minimum_range, maximum_range) {
        //     $.ajax({
        //         url: "pages/produk_perum.php",
        //         method: "POST",
        //         data: {
        //             minimum_range: minimum_range,
        //             maximum_range: maximum_range
        //         },
        //         success: function(data) {
        //             $('#load_product').fadeIn('slow').html(data);
        //         }
        //     });
        // }
    });
</script>