<?php
if ($_SESSION['id_user'] == '') {
   header("location:index.php");
} else { ?>
   <div class="container mt-5rem">
      <div id="detail"></div>
      <div id="detail-berita"></div>
      <div id="form-input-data-perum" class="row">
         <div class="col-12 pt-3">
            <div class="card">
               <div class="card-primary card-outline card-outline-tabs">
                  <div class="card-header p-0 border-bottom-0">
                     <h5 class="font-weight-bold p-3 mb-0">TAMBAH DATA PERUMAHAN</h5>
                     <hr class="mt-0">
                     <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link text-dark active " id="add-perum-tab" data-toggle="pill" href="#add-perum" role="tab" aria-controls="add-perum" aria-selected="false">Perumahan</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-dark" id="add-fasilitas-tab" data-toggle="pill" href="#add-fasilitas" role="tab" aria-controls="add-fasilitas" aria-selected="false">Fasilitas Umum</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-dark" id="add-lokterdekat-tab" data-toggle="pill" href="#add-lokterdekat" role="tab" aria-controls="add-lokterdekat" aria-selected="false">Lokasi Terdekat</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-dark" id="add-spesifikasi-tab" data-toggle="pill" href="#add-spesifikasi" role="tab" aria-controls="add-spesifikasi" aria-selected="false">Spesifikasi</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-dark" id="add-tipe-tab" data-toggle="pill" href="#add-tipe" role="tab" aria-controls="add-tipe" aria-selected="false">Tipe</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-dark" id="add-berita-tab" data-toggle="pill" href="#add-berita" role="tab" aria-controls="add-berita" aria-selected="false">Berita</a>
                        </li>
                     </ul>
                  </div>
                  <div class="card-body">
                     <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade show active" id="add-perum" role="tabpanel" aria-labelledby="add-perum-tab">
                           <form method="post" class="form-data-perum" id="form-data-perum">
                              <div class="row">
                                 <div class="col-lg-9">
                                    <div class="row">
                                       <div class="col-6">
                                          <label for="nm-perum">Nama Perumahan</label>
                                          <div class="form-group">
                                             <input type="text" id="nm-perum" class="form-control" name="nm_perum" placeholder="Nama Perumahan ..." autocomplete="off" required="true">
                                          </div>
                                       </div>
                                       <div class="col-6">
                                          <label for="alamat">Alamat</label>
                                          <div class="form-group">
                                             <input type="text" id="alamat" class="form-control" name="alamat" placeholder="Alamat Perumahan ..." autocomplete="off" required value="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-6 col-12">
                                          <label for="video">Video</label>
                                          <div class="form-group">
                                             <textarea type="text" id="video" class="form-control" name="video" rows="2" placeholder="URL KEY Video  ..." autocomplete="off" required value=""></textarea>
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-12">
                                          <label for="url-map">URL Google Maps</label>
                                          <div class="form-group">
                                             <textarea type="text" id="url-map" class="form-control" name="url_map" rows="2" placeholder="URL GOOGLE Map  ..." autocomplete="off" required value=""></textarea>
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-12">
                                          <label for="map">KEY Google Maps</label>
                                          <div class="form-group">
                                             <textarea type="text" id="map" class="form-control" name="map" rows="2" placeholder="URL KEY Map  ..." autocomplete="off" required value=""></textarea>
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-12">
                                          <label for="deskripsi">Deskripsi</label>
                                          <div class="form-group">
                                             <textarea type="text" id="deskripsi" class="form-control" name="deskripsi" rows="2" placeholder="Deskripsi ..." autocomplete="off" required value=""></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="form-group">
                                             <label for="in-foto-logo">Gambar logo</label>
                                             <div class="input-group">
                                                <input type="file" id="in-foto-logo" name="logo" class="file-logo" value="" hidden>
                                                <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="nm-foto-logo">
                                                <div class="input-group-append">
                                                   <button type="button" id="pilih_gambarlogo" class="browse btn btn-dark">Pilih Gambar</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <label for="in-foto-logo">Gambar logo</label>
                                    <div class="form-group">
                                       <img src="assets/img/80x80.png" id="previewlogo" class="img-thumbnail img-fluid">
                                    </div>
                                    <div class="form-group">
                                       <div class="custom-control custom-checkbox">
                                          <input class="custom-control-input" type="checkbox" id="cheklis-rekomendasi-produk" value="">
                                          <label for="cheklis-rekomendasi-produk" class="custom-control-label">Ceklis Sebagai Rekomendasi Produk</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col">
                                    <button type="button" name="simpan" id="simpan-data-perum" class="btn btn-xs bg-gradient-primary float-right elevation-3">
                                       <i class="fa fa-save"></i> Simpan
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="tab-pane fade" id="add-fasilitas" role="tabpanel" aria-labelledby="add-fasilitas-tab">
                           <div class="data-fasil"></div>
                        </div>
                        <div class="tab-pane fade" id="add-lokterdekat" role="tabpanel" aria-labelledby="add-lokterdekat-tab">
                           <div class="data-lokterdekat"></div>
                        </div>
                        <div class="tab-pane fade" id="add-spesifikasi" role="tabpanel" aria-labelledby="add-spesifikas-tab">
                           <div class="data-spek"></div>
                        </div>
                        <div class="tab-pane fade" id="add-tipe" role="tabpanel" aria-labelledby="add-tipe-tab">
                           <div class="data-tipe"></div>
                        </div>
                        <div class="tab-pane fade" id="add-berita" role="tabpanel" aria-labelledby="add-berita-tab">
                           <div class="row">
                              <div class="col-lg-4 col-md-4 col-12">
                                 <div class="form-group">
                                    <label for="in-foto-berita">Foto Berita</label>
                                    <div class="input-group">
                                       <input type="file" id="in-foto-berita" name="fot_berita" class="file-berita" hidden>
                                       <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="nm-foto-berita">
                                       <div class="input-group-append">
                                          <button type="button" id="pilih-fot-berita" class="browse btn btn-dark">Pilih Gambar</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-12">
                                 <label for="judul">Judul</label>
                                 <div class="form-group ">
                                    <input type="text" id="judul" class="form-control" name="judul" placeholder="Judul ..." autocomplete="off" required value="">
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-12">
                                 <label for="tgl">TANGGAL</label>
                                 <div class="form-group ">
                                    <input type="text" id="tgl" class="form-control" name="tgl" placeholder="Tanggal ..." autocomplete="off" required value="">
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-2 col-md-2 col-12 mb-3">
                                 <img src="assets/img/80x80.png" id="preview-fot-berita" class="img-thumbnail width-8rem">
                              </div>
                              <div class="col-lg-10 col-md-10 col-12">
                                 <div class="form-group">
                                    <textarea type="text" id="desk-berita" class="form-control" name="desk_berita" rows="5" placeholder="Deskripsi ..." autocomplete="off" required value=""></textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col">
                                 <button type="button" name="simpan" id="simpan-data-berita" class="btn btn-xs bg-gradient-info float-right elevation-3">
                                    <i class="fa fa-save"></i> Simpan
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <input type="text" id="action-perum" value="logo" hidden>
            <input type="text" id="action_hapus_data" value="" hidden>
            <input type="text" id="id_data" value="" hidden>
            <div class="data"></div>
         </div>
      </div>
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

   <script>
      // $(document).ready(function() {
      // INPUT PERUM
      $(document).on("click", "#pilih_gambarlogo", function() {
         var file = $(this).parents().find(".file-logo");
         file.trigger("click");
      });
      $('#in-foto-logo').change(function(e) {
         var fileName = e.target.files[0].name;
         $("#nm-foto-logo").val(fileName);

         var reader = new FileReader();
         reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("previewlogo").src = e.target.result;
         };
         // read the image file as a data URL.
         reader.readAsDataURL(this.files[0]);
      });

      $('#cheklis-rekomendasi-produk').click(function(e) {
         if ($(this).is(":checked")) {
            // profesi.push($(this).val());
            $('#cheklis-rekomendasi-produk').val('Direkomendasikan');
            // alert('ya');
         } else {
            $('#cheklis-rekomendasi-produk').val('');
            // alert('tdk');
         }
      });

      $("#simpan-data-perum").click(function() {
         $('#action-perum').val('simpanperum');
         const in_foto_logo = $('#in-foto-logo').prop('files')[0];
         // $('#in-foto-logo').val(in_foto_logo);
         // alert($('#in-foto-logo').val());
         let formData = new FormData();
         formData.append('action-perum', $('#action-perum').val());
         formData.append('in-foto-logo', in_foto_logo);
         formData.append('nm-perum', $('#nm-perum').val());
         formData.append('alamat', $('#alamat').val());
         formData.append('url-map', $('#url-map').val());
         formData.append('map', $('#map').val());
         formData.append('deskripsi', $('#deskripsi').val());
         formData.append('video', $('#video').val());
         formData.append('cheklis-rekomendasi-produk', $('#cheklis-rekomendasi-produk').val());

         $.ajax({
            type: 'POST',
            url: "prosess/proses_perum.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(msg) {
               alert(msg);
               $('#detail').load("pages/form_edit_perum.php");
               $('.data').load("pages/data_perum.php");
               $('.data-fasil').load("pages/fasilitas.php");
               $('.data-lokterdekat').load("pages/form_input_lokterdekat.php");
               $('.data-spek').load("pages/form_input_spesifikasi.php");
               $('.data-tipe').load("pages/form_input_tipe.php");
               // document.getElementById("form-data-perum").reset();
               $('#add-perum-tab').removeClass('active');
               $('#add-perum').removeClass('show active');
               $('#add-fasilitas-tab').addClass('active');
               $('#add-fasilitas').addClass('show active');

            },
            error: function() {
               alert("Data Gagal Diupload");
            }
         });
      });
      // END INPUT PERUM
      // });
   </script>
<?php } ?>