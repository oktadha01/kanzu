<div class="mt-5rem pt-4">

    <?php
    $no = 1;
    $ambil_data = mysqli_query($koneksi, "SELECT * FROM berita");
    while ($row = mysqli_fetch_array($ambil_data)) {
    ?>
        <div class="row ">
            <div class="col-12">
                <section class="content">
                    <div class="container-fluid">
                        <div class="card border-radius">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="form-group">
                                        <!-- <div class="card"> -->
                                        <img src="assets/img/foto_berita/<?php echo $row['fot_berita']; ?>" class="img-fluid p-1 border-radius img<?php echo $row['id_berita']; ?>" alt="red sample">
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-12 p-3">
                                    <h6 class="text-publishing"><?php echo $row['tgl']; ?></h6>
                                    <h3 id="tittle-berita<?php echo $row['id_berita']; ?>" class="tittle-news tittle<?php echo $row['id_berita']; ?>"><?php echo $row['judul']; ?></h3>
                                    <div id="konten-berita<?php echo $row['id_berita']; ?>" class="mt-1 p-1 konten<?php echo $row['id_berita']; ?>">
                                        <p class="text-konten-news"><?php echo $row['desk_berita']; ?></p>
                                        <div class="row">
                                            <div class="col-12 p-2">
                                                <i class="far fa-times-circle font-size-icon float-right close<?php echo $row['id_berita']; ?>" title="close"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php } ?>
</div>
<script>
    <?php
    $no = 1;
    $ambil_data = mysqli_query($koneksi, "SELECT * FROM berita");
    while ($row = mysqli_fetch_array($ambil_data)) {
    ?>
        $('.konten<?php echo $row['id_berita']; ?>').hide(300);
        $('#tittle-berita<?php echo $row['id_berita']; ?>, .img<?php echo $row['id_berita']; ?>').on('click', function(e) {
            $('.konten<?php echo $row['id_berita']; ?>').toggle(300);
        });
    <?php } ?>
</script>