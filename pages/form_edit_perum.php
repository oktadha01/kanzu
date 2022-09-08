<?php
include '../koneksi.php';
// if (isset($_POST["user_name"])) {
$id_perum = $_POST['post-id-perum'];
$no = 1;
$ambil_data = mysqli_query($koneksi, "SELECT * FROM perumahan WHERE id_perum LIKE '$id_perum%'");
$row = mysqli_fetch_array($ambil_data);
$data_id = $row['id_perum']
?>
<div class="col-12">
	<div class="card mt-5rem">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-6 col-12">
					<h5>DETAIL DAN EDIT DATA PERUMAHAN <?php echo $row['nm_perum']; ?></h5>
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
				<div class="col-12">
					<div class="card card-primary card-outline card-outline-tabs">
						<div class="card-header p-0 border-bottom-0">
							<ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="edit-perum-tab" data-toggle="pill" href="#edit-perum" role="tab" aria-controls="edit-perum" aria-selected="false">Perumahan</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="edit-fasilitas-tab" data-toggle="pill" href="#edit-fasilitas" role="tab" aria-controls="edit-fasilitas" aria-selected="false">Fasilitas Umum</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="edit-lokterdekat-tab" data-toggle="pill" href="#edit-lokterdekat" role="tab" aria-controls="edit-lokterdekat" aria-selected="false">Lokasi Terdekat</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="edit-spesifikasi-tab" data-toggle="pill" href="#edit-spesifikasi" role="tab" aria-controls="edit-spesifikasi" aria-selected="false">Spesifikasi</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="edit-tipe-tab" data-toggle="pill" href="#edit-tipe" role="tab" aria-controls="edit-tipe" aria-selected="false">Tipe</a>
								</li>
							</ul>
						</div>
						<div class="card-body">
							<div class="tab-content" id="custom-tabs-three-tabContent">
								<div class="tab-pane fade show active" id="edit-perum" role="tabpanel" aria-labelledby="edit-perum-tab">
									<?php

									$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan WHERE id_perum = $data_id");
									while ($row = mysqli_fetch_array($ambil_data)) {

									?>
										<div class="row">
											<div class="col-lg-9">
												<div class="row">
													<div class="col-lg-6 col-md-6 col-12">
														<label for="edit-nm-perum">Nama Perumahan</label>
														<div class="form-group">
															<input type="hidden" id="edit-id-perum" class="form-control" name="di_perum" placeholder="Nama Perumahan ..." autocomplete="off" required="true" value="<?php echo $row['id_perum']; ?>">
															<input type="text" id="edit-nm-perum" class="form-control" name="nm_perum" placeholder="Nama Perumahan ..." autocomplete="off" required="true" value="<?php echo $row['nm_perum']; ?>">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<label for="edit-alamat">Alamat</label>
														<div class="form-group">
															<input type="text" id="edit-alamat" class="form-control" name="alamat" placeholder="Alamat Perumahan ..." autocomplete="off" required value="<?php echo $row['alamat']; ?>">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6 col-12">
														<label for="video">Video</label>
														<div class="form-group">
															<textarea type="text" id="edit-video" class="form-control" name="video" rows="2" placeholder="URL KEY Video  ..." autocomplete="off" required value=""><?php echo $row['video']; ?></textarea>
														</div>
													</div>
													<div class="col-lg-6 col-12">
														<label for="url-map">URL Google Maps</label>
														<div class="form-group">
															<textarea type="text" id="edit-url-map" class="form-control" name="url_map" rows="2" placeholder="URL GOOGLE Map  ..." autocomplete="off" required value=""><?php echo $row['url_map']; ?></textarea>
														</div>
													</div>
													<div class="col-lg-6 col-12">
														<label for="map">KEY Google Maps</label>
														<div class="form-group">
															<textarea type="text" id="edit-map" class="form-control" name="map" rows="2" placeholder="URL KEY Map  ..." autocomplete="off" required value=""><?php echo $row['map']; ?></textarea>
														</div>
													</div>
													<div class="col-lg-6 col-12">
														<label for="deskripsi">Deskripsi</label>
														<div class="form-group">
															<textarea type="text" id="edit-deskripsi" class="form-control" name="deskripsi" rows="2" placeholder="Deskripsi ..." autocomplete="off" required value=""><?php echo $row['deskripsi']; ?></textarea>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<label for="edit-foto-logo">Gambar logo</label>
															<div class="input-group">
																<input type="file" id="edit-foto-logo" name="logo" class="edit-file-logo" hidden>
																<input type="text" class="form-control" disabled placeholder="Upload Gambar" id="edit-nm-foto-logo" value="<?php echo $row['logo']; ?>">
																<div class="input-group-append">
																	<button type="button" id="edit_gambarlogo" class="browse btn btn-dark">Pilih Gambar</button>
																	<button type="button" id="edithapus_gambarlogo" class="browse btn btn-danger">hapus Gambar</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="form-group">
													<label for="edit-foto-logo">Gambar logo</label>
													<div class="row">
														<img src="assets/img/logo/<?php echo $row['logo']; ?>" id="editpreviewlogo" class="img-thumbnail img-fluid">
													</div>
													<div class="row">
														<button type="button" data-id="<?php echo $row['id_perum']; ?>" id="simpan-gambar-logo" class="browse btn btn-success">Simpan Gambar</button>
													</div>
												</div>
												<div class="form-group">
													<div class="custom-control custom-checkbox">
														<input class="custom-control-input" type="checkbox" id="edit-rekomendasi-produk" value="<?php echo $row['status_perum']; ?>">
														<label for="edit-rekomendasi-produk" class="custom-control-label">Ceklis Sebagai Rekomendasi Produk</label>
													</div>
												</div>
											</div>
										</div>
										<input type="text" id="id-logoperum" value="<?php echo $row['id_perum']; ?>" hidden>
										<div class="row">
											<div class="col">
												<button type="reset" name="simpan" id="simpan-edit-perum" class="btn btn-sm btn-primary float-right">
													<i class="fa fa-save"></i> Simpan
												</button>
											</div>
										</div>
									<?php }
									?>
								</div>
								<div class="tab-pane fade" id="edit-fasilitas" role="tabpanel" aria-labelledby="edit-fasilitas-tab">
									<div class="card">
										<div class="card-body table-responsive p-0" style="height: 410px;">
											<table class="table table-head-fixed text-nowrap table-hover">
												<thead>
													<tr>
														<th scope="col" class="text-center">NO</th>
														<th scope="col" class="text-center">FASILITAS</th>
														<th scope="col" class="text-center">ACTION</th>
													</tr>
												</thead>
												<tbody>
													<?php
													// include '../koneksi.php';
													// $data_id = $_POST['id-lokasi'];
													$no = 1;
													$ambil_data1 = mysqli_query($koneksi, "SELECT *FROM fasilitas WHERE fasilitas.id_fasperum = $data_id");
													while ($row = mysqli_fetch_array($ambil_data1)) {
													?>
														<tr>
															<td scope="col" class="text-center"><?php echo $no++; ?></td>
															<td scope="col" class="text-center"><?php echo $row['nmfas'] ?></td>
															<td scope="col" class="text-center">
																<button type="button" data-id='<?php echo $row['id_fasil']; ?>' class="btn btn-xs bg-gradient-danger elevation-3 hapus-fasilitas">
																	<i class="fas fa-trash-alt mr-1"></i> Hapus
																</button>
															</td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="edit-lokterdekat" role="tabpanel" aria-labelledby="edit-lokterdekat-tab">
									<div class="card">
										<div class="card-body table-responsive p-0" style="height: 410px;">
											<table class="table table-head-fixed text-nowrap table-hover">
												<thead>
													<tr>
														<th scope="col" class="text-center">NO</th>
														<th scope="col" class="text-center">JUDUL</th>
														<th scope="col" class="text-center">JARAK</th>
														<th scope="col" class="text-center">ACTION</th>
													</tr>
												</thead>
												<tbody>
													<?php
													// include '../koneksi.php';
													// $data_id = $_POST['id-lokasi'];
													$no = 1;
													$ambil_data1 = mysqli_query($koneksi, "SELECT *FROM lok_terdekat WHERE id_lokperum = $data_id");
													while ($row = mysqli_fetch_array($ambil_data1)) {
													?>
														<tr>
															<td scope="col" class="text-center"><?php echo $no++; ?></td>
															<td scope="col" class="text-center"><?php echo $row['lokasi'] ?></td>
															<td scope="col" class="text-center"><?php echo $row['jarak'] ?></td>
															<td scope="col" class="text-center">
																<button type="button" data-id='<?php echo $row['id_lok']; ?>' class="btn btn-xs bg-gradient-warning elevation-3" data-toggle="modal" data-target="#edit-lokterdekat<?php echo $row['id_lok']; ?>">
																	<i class="fa-solid fa-pen-to-square"></i> Edit
																</button>
																<button type="button" data-id='<?php echo $row['id_lok']; ?>' class="btn btn-xs bg-gradient-danger elevation-3 hapus-lokterdekat">
																	<i class="fas fa-trash-alt mr-1"></i> Hapus
																</button>
															</td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="edit-spesifikasi" role="tabpanel" aria-labelledby="add-spesifikas-tab">
									<?php
									// include '../koneksi.php';
									// if (isset($_POST["data_id"])) {
									//     $data_id = $_POST["data_id"];
									$ambil_data = mysqli_query($koneksi, "SELECT *FROM spesifikasi WHERE id_spekperum = $data_id");
									while ($row = mysqli_fetch_array($ambil_data)) {

									?>
										<div class="row">
											<div class="col-3">
												<label for="edi-pondasi">Pondasi</label>
												<div class="form-group">
													<!-- <input type="text" id="edit-id-spekperum" class="form-control" name="id_spekperum" required value=""> -->
													<input type="text" id="edit-pondasi" class="form-control" name="pondasi" placeholder="Pondasi ..." autocomplete="off" required value="<?php echo $row['pondasi']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-struktur">Struktur</label>
												<div class="form-group">
													<input type="text" id="edit-struktur" class="form-control" name="struktur" placeholder="Struktur ..." autocomplete="off" required value="<?php echo $row['struktur']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-rangka-atap">Rangka Atap</label>
												<div class="form-group">
													<input type="text" id="edit-rangka-atap" class="form-control" name="rangka_atap" placeholder="Rangka Atap ..." autocomplete="off" required value="<?php echo $row['rangka_atap']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-plafon">Plafon</label>
												<div class="form-group">
													<input type="text" id="edit-plafon" class="form-control" name="plafon" placeholder="Plafon ..." autocomplete="off" required value="<?php echo $row['plafon']; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-3">
												<label for="edit-penutup-atap">Penutup Atap</label>
												<div class="form-group">
													<input type="text" id="edit-penutup-atap" class="form-control" name="penutup_atap" placeholder="Penutup Atap ..." autocomplete="off" required value="<?php echo $row['penutup_atap']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-dinding">Dinding</label>
												<div class="form-group">
													<input type="text" id="edit-dinding" class="form-control" name="dinding" placeholder="Dinding ..." autocomplete="off" required value="<?php echo $row['dinding']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-lantai-utama">Lantai utama</label>
												<div class="form-group">
													<input type="text" id="edit-lantai-utama" class="form-control" name="lantai_utama" placeholder="Lantai Utama ..." autocomplete="off" required value="<?php echo $row['lantai_utama']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-lantai-ka-mandi">Lantai Kamar Mandi</label>
												<div class="form-group">
													<input type="text" id="edit-lantai-ka-mandi" class="form-control" name="lantai_ka_mandi" placeholder="Lantai Kamar Mandi ..." autocomplete="off" required value="<?php echo $row['lantai_ka_mandi']; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-3">
												<label for="edit-dinding-ka-mandi">Dinding Kamar Mandi</label>
												<div class="form-group">
													<input type="text" id="edit-dinding-ka-mandi" class="form-control" name="dinding_ka_mandi" placeholder="Dinding Kamar Mandi ..." autocomplete="off" required value="<?php echo $row['dinding_ka_mandi']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-kramik-dapur">Kramik Dapur</label>
												<div class="form-group">
													<input type="text" id="edit-kramik-dapur" class="form-control" name="kramik_dapur" placeholder="Kramik Dapur ..." autocomplete="off" required value="<?php echo $row['kramik_dapur']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-kun-pin-utama">Kunci Pintu Utama</label>
												<div class="form-group">
													<input type="text" id="edit-kun-pin-utama" class="form-control" name="kun_pin_utama" placeholder="Kunci Pintu Utama ..." autocomplete="off" required value="<?php echo $row['kun_pin_utama']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-pin-utama">Pintu Utama</label>
												<div class="form-group">
													<input type="text" id="edit-pin-utama" class="form-control" name="pin_utama" placeholder="Pintu Utama ..." autocomplete="off" required value="<?php echo $row['pin_utama']; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-3">
												<label for="edit-pin-kamar">Pintu Kamar</label>
												<div class="form-group">
													<input type="text" id="edit-pin-kamar" class="form-control" name="pin_kamar" placeholder="Pintu Kamar ..." autocomplete="off" required value="<?php echo $row['pin_kamar']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-kusen-pin">Kusen-Pintu</label>
												<div class="form-group">
													<input type="text" id="edit-kusen-pin" class="form-control" name="kusen_pin" placeholder="Kusen Pintu ..." autocomplete="off" required value="<?php echo $row['kusen_pin']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-kusen-daun-jen">Kusen Dan Daun Jendela</label>
												<div class="form-group">
													<input type="text" id="edit-kusen-daun-jen" class="form-control" name="kusen_daun_jen" placeholder="Kusen & Daun Jendala ..." autocomplete="off" required value="<?php echo $row['kusen_daun_jen']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-tangga">Tangga</label>
												<div class="form-group">
													<input type="text" id="edit-tangga" class="form-control" name="tangga" placeholder="Tangga ..." autocomplete="off" required value="<?php echo $row['tangga']; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-3">
												<label for="edit-cat-eks">Cat Eksterior</label>
												<div class="form-group">
													<input type="text" id="edit-cat-eks" class="form-control" name="cat_eks" placeholder="Cat Eks ..." autocomplete="off" required value="<?php echo $row['cat_eks']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-cat-int">Cat Interior</label>
												<div class="form-group">
													<input type="text" id="edit-cat-int" class="form-control" name="cat_interior" placeholder="Cat Interior ..." autocomplete="off" required value="<?php echo $row['cat_int']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-sanitair">Sanitair</label>
												<div class="form-group">
													<input type="text" id="edit-sanitair" class="form-control" name="sanitair" placeholder="Sanitair ..." autocomplete="off" required value="<?php echo $row['sanitair']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-lantai">Lantai</label>
												<div class="form-group">
													<input type="text" id="edit-lantai" class="form-control" name="lantai" placeholder="Lantai ..." autocomplete="off" required value="<?php echo $row['lantai']; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-3">
												<label for="edit-spek-ka-mandi">Kamar Mandi</label>
												<div class="form-group">
													<input type="text" id="edit-spek-ka-mandi" class="form-control" name="spek_ka_mandi" placeholder="Kamar Mandi ..." autocomplete="off" required value="<?php echo $row['spek_ka_mandi']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-listrik">Listrik</label>
												<div class="form-group">
													<input type="text" id="edit-listrik" class="form-control" name="listrik" placeholder="Listrik ..." autocomplete="off" required value="<?php echo $row['listrik']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-air-bersih">Air Bersih</label>
												<div class="form-group">
													<input type="text" id="edit-air-bersih" class="form-control" name="air_bersih" placeholder="Air Bersih ..." autocomplete="off" required value="<?php echo $row['air_bersih']; ?>">
												</div>
											</div>
											<div class="col-3">
												<label for="edit-spek-carport">Carportr</label>
												<div class="form-group">
													<input type="text" id="edit-spek-carport" class="form-control" name="spek_carport" placeholder="Carport ..." autocomplete="off" required value="<?php echo $row['spek_carport']; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-3">
												<label for="edit-jalan-Komplek">Jalan Komplek</label>
												<div class="form-group">
													<input type="text" id="edit-jl-komplek" class="form-control" name="jl_komplek" placeholder="Jalan Komplek ..." autocomplete="off" required value="<?php echo $row['jl_komplek']; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<button type="reset" name="simpan" id="simpan-data-spek" class="btn btn-sm btn-primary float-right">
													<i class="fa fa-save"></i> Simpan
												</button>
											</div>
										</div>
									<?php } ?>
								</div>
								<div class="tab-pane fade" id="edit-tipe" role="tabpanel" aria-labelledby="edit-tipe-tab">
									<?php
									// $perum = $_GET['id'];
									$no = 1;
									$ambil_data = mysqli_query($koneksi, "SELECT *FROM tipe WHERE id_tipeperum = $data_id");
									while ($row = mysqli_fetch_array($ambil_data)) {
									?>
										<button type="button" id="<?php echo $row['id_tipe']; ?>" class="btn btn-xs bg-gradient-info elevation-3 edit-data-tipe" data-id="">
											<i class="fa-solid fa-house-chimney-window"></i>Type <?php echo $row['luas_p']; ?>
										</button>
									<?php } ?>
									<input type="text" id="post-id-tipe" value="" hidden>
									<div id="form-edit-tipe"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {

		$('#btn-add-perum').click(function(e) {
			$('#detail').attr('hidden', true);
			$('#form-input-data-perum').removeAttr('hidden');
			// $('#form-input-data-perum').reset();
		});

		// EDIT FOTO LOGO PERUM
		$('#simpan-gambar-logo').hide();
		$('#edithapus_gambarlogo').hide();
		if ($('#edit-nm-foto-logo').val() == '') {
			$('#edithapus_gambarlogo').hide();
			$('#edit_gambarlogo').show();
			$('#editpreviewlogo').attr({
				src: "assets/img/80x80.png"
			});
		} else {
			$('#edithapus_gambarlogo').show();
			$('#edit_gambarlogo').hide();
		}

		$('#edit-foto-logo').change(function(e) {
			var fileName = e.target.files[0].name;
			$("#edit-nm-foto-logo").val(fileName);

			var reader = new FileReader();
			reader.onload = function(e) {
				// get loaded data and render thumbnail.
				document.getElementById("editpreviewlogo").src = e.target.result;
				$('#simpan-gambar-logo').show();
			};
			// read the image file as a data URL.
			reader.readAsDataURL(this.files[0]);
		});

		$('#simpan-gambar-logo').click(function() {
			// alert('ya');
			$('#action-perum').val('editlogo');
			const edit_foto_logo = $('#edit-foto-logo').prop('files')[0];
			let formData = new FormData();
			formData.append('edit-foto-logo', edit_foto_logo);
			formData.append('action-perum', $('#action-perum').val());
			formData.append('id-logoperum', $('#id-logoperum').val());
			$.ajax({
				type: 'POST',
				url: "prosess/proses_perum.php",
				data: formData,
				cache: false,
				processData: false,
				contentType: false,
				success: function(msg) {
					alert(msg);
					$('#simpan-gambar-logo').hide();
					$('#edithapus_gambarlogo').show();
					$('#edit_gambarlogo').hide();

					// $('#hapus-action-perum-display').show();
					// $('#action-perum-display').hide();
				},
				error: function() {
					alert("Data Gagal Diupload");
				}
			});
		});

		$('#edithapus_gambarlogo').click(function() {
			$('#action-perum').val('hapuslogo');
			// alert(id);
			let formData = new FormData();
			formData.append('action-perum', $('#action-perum').val());
			formData.append('id-logoperum', $('#id-logoperum').val());

			$.ajax({
				type: 'POST',
				url: "prosess/proses_perum.php",
				data: formData,
				cache: false,
				processData: false,
				contentType: false,
				success: function(msg) {
					alert(msg);
					$('#edit-nm-foto-logo').val('');
					$('#edit_gambarlogo').show();
					$('#edithapus_gambarlogo').hide();
					$('#editpreviewlogo').attr({
						src: "assets/img/80x80.png"
					});
				},
				error: function() {
					alert("Data Gagal Diupload");
				}
			});
		});
		// END EDIT FOTO LOGO PERUM

		// EDIT PERUM
		var status = $('#edit-rekomendasi-produk').val();
		// alert(status);
		if (status == 'Direkomendasikan') {
			$('#edit-rekomendasi-produk').prop('checked', true);
			// alert('ya');
		} else {
			// alert('tdk');
			// $('#edit-promo').removeAttr('readonly');
		}

		$('#edit-rekomendasi-produk').click(function(e) {
			if ($(this).is(":checked")) {
				// profesi.push($(this).val());
				$('#edit-rekomendasi-produk').val('Direkomendasikan');
				// alert('ya');
			} else {
				$('#edit-rekomendasi-produk').val('');
				// alert('tdk');
			}
		});
		$("#simpan-edit-perum").click(function() {
			$('#action-perum').val('simpaneditperum');
			let formData = new FormData();
			formData.append('action-perum', $('#action-perum').val());
			formData.append('edit-id-perum', $('#edit-id-perum').val());
			formData.append('edit-nm-perum', $('#edit-nm-perum').val());
			formData.append('edit-alamat', $('#edit-alamat').val());
			formData.append('edit-video', $('#edit-video').val());
			formData.append('edit-map', $('#edit-map').val());
			formData.append('edit-url-map', $('#edit-url-map').val());
			formData.append('edit-deskripsi', $('#edit-deskripsi').val());
			formData.append('edit-rekomendasi-produk', $('#edit-rekomendasi-produk').val());

			$.ajax({
				type: 'POST',
				url: "prosess/proses_perum.php",
				data: formData,
				cache: false,
				processData: false,
				contentType: false,
				success: function(msg) {
					alert(msg);
					$('.data').load("pages/data_perum.php");
					// $('.data-fasil').load("pages/fasilitas.php");
					// document.getElementById("form-data-perum").reset();
				},
				error: function() {
					alert("Data Gagal Diupload");
				}
			});
		});
		// END EDIT PERUM

		$('.hapus-lokterdekat').click(function() {
			var el = this;

			// Delete id
			var id = $(this).data('id');
			$('#id_data').val(id);
			var confirmalert = confirm("Are you sure?");
			if (confirmalert == true) {
				$('#action_hapus_data').val('lok_terdekat');
				let formData = new FormData();
				formData.append('action_hapus_data', $('#action_hapus_data').val());
				formData.append('id_data', $('#id_data').val());
				$.ajax({
					type: 'POST',
					url: "prosess/proses_hapus_data.php",
					data: formData,
					cache: false,
					processData: false,
					contentType: false,
					success: function(response) {

						if (response == 1) {
							// Remove row from HTML Table
							$(el).closest('tr').css('background', 'tomato');
							$(el).closest('tr').fadeOut(800, function() {
								$(this).remove();
							});
						} else {
							alert('Invalid ID.');
						}
					}
				});
			}
		});
		$('.hapus-fasilitas').click(function() {
			var el = this;

			// Delete id
			var id = $(this).data('id');
			$('#id_data').val(id);
			var confirmalert = confirm("Are you sure?");
			if (confirmalert == true) {
				$('#action_hapus_data').val('fasilitas');
				let formData = new FormData();
				formData.append('action_hapus_data', $('#action_hapus_data').val());
				formData.append('id_data', $('#id_data').val());
				$.ajax({
					type: 'POST',
					url: "prosess/proses_hapus_data.php",
					data: formData,
					cache: false,
					processData: false,
					contentType: false,
					success: function(response) {

						if (response == 1) {
							// Remove row from HTML Table
							$(el).closest('tr').css('background', 'tomato');
							$(el).closest('tr').fadeOut(800, function() {
								$(this).remove();
							});
						} else {
							alert('Invalid ID.');
						}
					}
				});
			}
		});

		$('.delete').click(function() {
			var el = this;

			// Delete id
			var id = $(this).data('id');

			var confirmalert = confirm("Are you sure?");
			if (confirmalert == true) {
				// AJAX Request
				$.ajax({
					url: 'remove.php',
					method: 'POST',
					data: {
						id: id
					},
					success: function(response) {

						if (response == 1) {
							// Remove row from HTML Table
							$(el).closest('#row').css('background', 'tomato');
							$(el).closest('#row').fadeOut(800, function() {
								$(this).remove();
							});
						} else {
							alert('Invalid ID.');
						}
					}
				});
			}
		});


	});
	// alert($data_id);
</script>