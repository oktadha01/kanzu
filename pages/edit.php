<div class="col-12">
	<div class="card mt-5rem">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-6 col-12">
					<h5>DETAIL PERUMHAN</h5>
				</div>
				<div class="col-lg-6 col-12">
					<button type="button" name="" id="btn-add-perum" class="btn btn-sm btn-info col-12 float-right">
						<i class="fa fa-save"></i> TAMBAH DATA PERUMHAN
					</button>
				</div>
			</div>
		</div>
		<?php
		include '../koneksi.php';
		if (isset($_POST["data_id"])) {
			$data_id = $_POST["data_id"];
			$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, spesifikasi, tipe WHERE spesifikasi.id_spekperum = tipe.id_tipeperum AND perumahan.id_perum = '$data_id'");
			while ($row = mysqli_fetch_array($ambil_data)) {

		?>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-7 col-12">
							<div class="row">
								<div class="col-lg-6 col-12">
									<div class="form-group">
										<input type="hidden" name="id_perum" id="edit-id-perum" value="<?php echo $row['id_perum']; ?>">
										<input type="text" id="edit-nm-perum" class="form-control" name="nm_perum" placeholder="Alamat Perumahan ..." autocomplete="off" required="true" value="<?php echo $row['nm_perum']; ?>">
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="form-group">
										<input type="text" id="edit-alamat" class="form-control" name="alamat" placeholder="Alamat Perumahan ..." autocomplete="off" required value="<?php echo $row['alamat']; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 col-12">
									<div class="form-group">
										<input type="text" id="edit-luas-t" class="form-control" name="luas_t" placeholder="Luas Tanah ..." autocomplete="off" required value="<?php echo $row['luas_t']; ?>">
									</div>
								</div>
								<div class="col-lg-3 col-12">
									<div class="form-group">
										<input type="text" id="edit-luas-p" class="form-control" name="luas_p" placeholder="Luas Penggunaan ..." autocomplete="off" required value="<?php echo $row['luas_p']; ?>">
									</div>
								</div>
								<div class="col-lg-3 col-12">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text pad-cus-6px">
												<img src="assets/img/carport2.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
											</span>
										</div>
										<input type="number" id="edit-cardport" class="form-control" name="cardport" placeholder="Cardport..." value="<?php echo $row['carportr']; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 col-12">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text pad-cus-6px">
												<img src="assets/img/ruang-tamu.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
											</span>
										</div>
										<input type="number" id="edit-ru-tamu" class="form-control" name="ru_tamu" placeholder="R-Tamu..." value="<?php echo $row['ru_tamu']; ?>">
									</div>
								</div>
								<div class="col-lg-3 col-12">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text pad-cus-6px">
												<img src="assets/img/kamar-tidur.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
											</span>
										</div>
										<input type="number" id="edit-ka-tidur" class="form-control" name="ka_tidur" placeholder="K-Tidur..." value="<?php echo $row['ka_tidur']; ?>">
									</div>
								</div>
								<div class="col-lg-3 col-12">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text pad-cus-6px">
												<img src="assets/img/kamar-mandi.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
											</span>
										</div>
										<input type="number" id="edit-ka-mandi" class="form-control" name="ka_mandi" placeholder="K-Mandi..." value="<?php echo $row['ka_mandi']; ?>">
									</div>
								</div>
								<div class="col-lg-3 col-12">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text pad-cus-6px">
												<img src="assets/img/dapur.png" alt="PT KANPA Logo" class="heigh-24px img-circle elevation-3">
											</span>
										</div>
										<input type="number" id="edit-dapur" class="form-control" name="dapur" placeholder="Dapur..." value="<?php echo $row['dapur']; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="custom-control custom-checkbox">
										<input class="custom-control-input" type="checkbox" id="change-foto" value="">
										<label for="change-foto" class="custom-control-label">Ceklis untuk mengubah foto</label>
									</div>
									<div class="custom-file mb-3">
										<input type="file" class="custom-file-input" id="edit-foto" name="foto" value="">
										<label class="custom-file-label">file foto</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-12">
									<div class="form-group">
										<input type="text" id="edit-harga" class="form-control" name="harga" placeholder="Harga ..." autocomplete="off" required value="<?php echo $row['harga']; ?>">
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<input type="checkbox" class="" id="edit-status" name="status" value="">
											</span>
										</div>
										<input type="text" id="edit-promo" name="promo" class="form-control" placeholder="Promo ..." value="<?php echo $row['promo']; ?>">
										<input type="hidden" id="status-promo" name="promo" class="form-control" placeholder="Promo ..." value="<?php echo $row['status']; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<textarea type="text" id="edit-deskripsi" class="form-control" name="deskripsi" rows="3" placeholder="Deskripsi ..." autocomplete="off" required value=""><?php echo $row['deskripsi']; ?></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<textarea type="text" id="edit-map" class="form-control" name="map" rows="3" placeholder="URL KEY Map  ..." autocomplete="off" required value=""><?php echo $row['map']; ?></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-12">
							<div class="card">
								<div class="card-body">
									<img src="assets/img/<?php echo $row['foto']; ?>" alt="PT KANPA Logo" class="img-fluid" />
								</div>
							</div>
						</div>
					</div>
					<?php
					// // $count = 1;
					$ambil_data1 = mysqli_query($koneksi, "SELECT *FROM fasilitas WHERE fasilitas.id_fasperum = '$data_id'");
					while ($row = mysqli_fetch_array($ambil_data1)) {
					?>

						<div id="row" class="row">
							<div class="col-9 col-lg-6">
								<div class="form-group ">
									<input type="text" class="form-control id_fasperum" id="id_fasperum" name="id_fasperum[]" value="" hidden>
									<input type="text" class="form-control" name="nmfas[]" placeholder="Fasilitas ..." autocomplete="off" required value="<?php echo $row['nmfas']; ?>">
								</div>
							</div>
							<div class="col-3 col-lg-6">
								<button type="button" data-id='<?php echo $row['id_fasil']; ?>' class="btn btn-danger delete">Hapus</button>
							</div>
						</div>
					<?php
					}
					?>
					<div class="row">
						<div class="col">
							<button type="button" name="simpan" id="save-edit" class=" btn btn-sm btn-warning float-right">
								<i class="fa fa-save"></i> Simpan
							</button>
						</div>
					</div>
				</div>
		<?php
			}
		}
		?>
	</div>
</div>

<script>
	$(document).ready(function() {
		var status = $('#status-promo').val();
		// alert(status);
		if (status == 'promo') {
			$('#edit-status').prop('checked', true);
			// alert('ya');
		} else {
			// alert('tdk');
			$('#edit-promo').removeAttr('readonly');
		}
		$('#edit-promo').attr('readonly', true);
		$('#edit-status').click(function(e) {
			if ($(this).is(":checked")) {
				// profesi.push($(this).val());
				$('#edit-status').val('promo');
				$('#edit-promo').attr('readonly', true);
				alert('ya');
			} else {
				$('#edit-promo').removeAttr('readonly');
				$('#edit-status').val()
				// alert('tdk');
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
		$('#edit-foto').attr('disabled', true);
		$('#change-foto').click(function(e) {
			if ($(this).is(":checked")) {
				// profesi.push($(this).val());
				$('#change-foto').val('true');
				$('#edit-foto').removeAttr('disabled');
			} else {
				$('#change-foto').val()
				$('#edit-foto').attr('disabled', true);
			}
		});
		$("#save-edit").click(function() {
			const edit_foto = $('#edit-foto').prop('files')[0];
			let formData = new FormData();
			formData.append('edit-foto', edit_foto);
			// formData.append('edit-foto', $('#edit-foto').val());
			formData.append('edit-id-perum', $('#edit-id-perum').val());
			formData.append('edit-nm-perum', $('#edit-nm-perum').val());
			formData.append('edit-alamat', $('#edit-alamat').val());
			formData.append('edit-tipe', $('#edit-tipe').val());
			formData.append('edit-luas-t', $('#edit-luas-t').val());
			formData.append('edit-luas-p', $('#edit-luas-p').val());
			formData.append('edit-cardport', $('#edit-cardport').val());
			formData.append('edit-ru-tamu', $('#edit-ru-tamu').val());
			formData.append('edit-ka-tidur', $('#edit-ka-tidur').val());
			formData.append('edit-ka-mandi', $('#edit-ka-mandi').val());
			formData.append('edit-dapur', $('#edit-dapur').val());
			formData.append('edit-harga', $('#edit-harga').val());
			formData.append('edit-status', $('#edit-status').val());
			formData.append('edit-promo', $('#edit-promo').val());
			formData.append('edit-deskripsi', $('#edit-deskripsi').val());
			formData.append('edit-map', $('#edit-map').val());
			formData.append('change-foto', $('#change-foto').val());

			$.ajax({
				type: 'POST',
				url: "prosess/proses_edit_data_perum.php",
				data: formData,
				cache: false,
				processData: false,
				contentType: false,
				success: function(msg) {
					// alert('ya');
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
		$('#btn-add-perum').click(function(e) {
			$('#detail').attr('hidden', true);
			$('#form-input-data-perum').removeAttr('hidden');
			$('#form-input-data-perum').reset();
		});
	})
	alert($data_id);
</script>