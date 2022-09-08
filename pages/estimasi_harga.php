<div class="halaman">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <?php

    $minimum_range = 100;

    $maximum_range = 250;

    ?>
    <section class="content-header pt-5rem">
        <div class="container-fluid">
            <div id="myDIV">
                <h5>Pilih Harga</h5>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-4 ">
                        <button type="button" name="" id="harga1" class="btn btn-xs bor-est bor-est-active">
                            <h6 class="font-weight-bold mb-0"><i class="fa-regular fa-money-bill-1"></i> 100 - 250 jt</h6>
                        </button>
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
                        <button type="button" name="" id="harga6" class="btn btn-xs btn-price-1m bor-est">
                            <h6 class="font-weight-bold mb-0"><i class="fa-regular fa-money-bill-1"></i> 1 M</h6>
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
    </section>
</div>
<input type="text" id="minimum_range" value="<?php echo $minimum_range;?>" hidden>
<input type="text" id="maximum_range" value="<?php echo $maximum_range;?>" hidden>

<script>
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("bor-est");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            // alert('ya');
            var current = document.getElementsByClassName("bor-est-active");
            current[0].className = current[0].className.replace(" bor-est-active", "");
            this.className += " bor-est-active";
        });
    }
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
            $("#minimum_range").val('100');
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
            $("#minimum_range").val('1000');
            $("#maximum_range").val('10000');
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

        $('.detail-perum, .produk-lain').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 'slow');
            var menu = $(this).attr('id');
            if (menu == 'produk') {
                setCookie("halaman", 'pages/' + menu + ".php", 30);
                $('.halaman-menu').load(getCookie("halaman"));
            } else {
                var id_detail = $('#id_perum').val();
                setCookie("halaman", 'pages/' + menu + ".php?id_perum=" + id_detail, 30);
                $('.halaman-menu').load(getCookie("halaman"));
            }
            // alert(menu);
        });
    });

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (30 * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
</script>