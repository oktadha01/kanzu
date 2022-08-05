<div class="halaman">
	<?php
	include '../koneksi.php';
	?>
	<div id="" class="container">
		<div class="row mt-5rem">
			<div class="col-12 p-0">
				<div id="slider" class="slider m-0">
					<?php
					$ambil_data = mysqli_query($koneksi, "SELECT file_slidedashboard, link FROM fot_slide WHERE file_slidedashboard");
					while ($slide = mysqli_fetch_array($ambil_data)) {
					?>
						<div>
							<a href="<?php echo $slide['link']; ?>">
								<img class="img-fluid" src="assets/img/foto_slidedashboard/<?php echo $slide['file_slidedashboard']; ?>" alt="Image 1">
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="bg-white">
			<div class="row bg-kanpa p-3">
				<div class="col-12">
					<center>
						<h2 class="color-1 font-weight-bold">Solusi Rumah Millenials</h2>
						<p class="text-light font-weight-light teks-footer-center">Wujudkan rumah impian anda bersama PT KANPA.</p>
						<a href="#chat-marketing" class="btn-lg bg-btn-call btn-primary teks-footer-call"><i class="fa-solid fa-phone-flip"></i> HUBUNGI KAMI</a>
					</center>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php
					$data_perum = mysqli_query($koneksi, "SELECT *FROM perumahan WHERE status_perum = 'Direkomendasikan' ");
					while ($row = mysqli_fetch_array($data_perum)) {
						$id_perum = $row['id_perum'];
						$nmperum = $row['nm_perum'];
						$perum = preg_replace("![^a-z0-9]+!i", "-", $nmperum);
					?>
						<div class="col-lg-4 col-md-12 col-12 col mt-4">
							<div class="bg-product">
								<?php
								$fot_display = mysqli_query($koneksi, "SELECT * FROM tipe WHERE id_tipeperum = $id_perum ORDER BY harga limit 1 ");
								while ($foto = mysqli_fetch_array($fot_display)) {
								?>
									<a href="?perum=<?php echo $row['id_perum']; ?>#<?php echo $perum; ?>" class="detail-perum" id="detail" data-id="<?php echo $row['id_perum']; ?>">
										<img src="assets/img/foto_display/<?php echo $foto['fot_display']; ?>" alt="PT KANPA Logo" class="img-fluid" />
									</a>
								<?php } ?>
								<input type="text" id="id_detail" name="id_detail" value="<?php echo $row['nm_perum']; ?>" hidden>
								<div class="p-2">
									<h6 class="mb-0">mulai</h6>
									<div class="row pl-1">
										<?php
										$harga_terendah = mysqli_query($koneksi, "SELECT * FROM tipe WHERE id_tipeperum = $id_perum ORDER BY harga limit 1 ");
										// $harga_terendah = mysqli_query($koneksi, "SELECT MIN(harga) AS harga_terendah, promo FROM tipe WHERE id_tipeperum = $id_perum limit 1 ");
										while ($harga = mysqli_fetch_array($harga_terendah)) {
										?>
											<h6 class="bg-kanpa text-light border-radius-5px fit-conten font-weight-bold p-1">Rp <?php echo $harga['harga']; ?> <sub>jt</sub></h6>
											<h6 class="ml-1 font-weight-bold">*<?php echo $harga['promo']; ?></h6>
										<?php } ?>
									</div>
									<h5 class="font-weight-bold">
										<a class="text-dark" href="index.php?p=detail&id=<?php echo $row['nm_perum']; ?>"><?php echo $row['nm_perum']; ?></a>
										<a class="text-dark" href=""> - Tipe mulai
											<table>
												<tr>
													<?php
													$data_tipe = mysqli_query($koneksi, "SELECT *FROM tipe WHERE id_tipeperum = $id_perum ORDER BY luas_p ASC");
													while ($tipe = mysqli_fetch_array($data_tipe)) {
													?>
														<td>
															<h4 class="font-weight-bold bor-tip-dash">
																<?php echo $tipe['luas_p']; ?>/<?php echo $tipe['luas_t']; ?>
															</h4>
														</td>
													<?php } ?>
												</tr>
											</table>
										</a>
									</h5>
									<p class="font-weight-bold"><?php echo $row['alamat']; ?></p>
									<div class="jus-content">
										<?php
										$spesifikasi = mysqli_query($koneksi, "SELECT * FROM tipe WHERE id_tipeperum = $id_perum ORDER BY harga limit 1 ");
										while ($spek = mysqli_fetch_array($spesifikasi)) {
										?>


											<td scope="col" class="text-center">
												<img src="assets/img/ikon-display/ru-tamu.png" alt="PT KANPA Logo" class="height-4rem"><br>
												<center>
													<h6><?php echo $spek['ru_tamu']; ?></h6>
												</center>
											</td>
											<td scope="col" class="text-center">
												<img src="assets/img/ikon-display/ka-tidur.png" alt="PT KANPA Logo" class="height-4rem"><br>
												<center>
													<h6><?php echo $spek['ka_tidur']; ?></h6>
												</center>
											</td>
											<td scope="col" class="text-center">
												<img src="assets/img/ikon-display/ka-mandi.png" alt="PT KANPA Logo" class="height-4rem"><br>
												<center>
													<h6><?php echo $spek['ka_mandi']; ?></h6>
												</center>
											</td>
											<?php
											if ($spek['dapur'] == null) { ?>

											<?php } else { ?>
												<td scope="col" class="text-center">
													<img src="assets/img/ikon-display/dapur.png" alt="PT KANPA Logo" class="height-4rem"><br>
													<center>
														<h6><?php echo $spek['dapur']; ?></h6>
													</center>
												</td>
											<?php } ?>
										<?php } ?>
									</div>
									<div class="table-responsive p-0">
										<table class="table table-head-fixed text-nowrap table-hover">
											<thead>
												<tr>

												</tr>
											</thead>
										</table>
									</div>
									<div class="col-12 mb-2">
										<center>
											<a href="?perum=<?php echo $row['id_perum']; ?>#<?php echo $perum; ?>" class="detail-perum" id="detail" data-id="<?php echo $row['id_perum']; ?>">
												<button type="button" class="btn-sm bg-btn-detail text-light detail-perum">Lihat Detail >></button>
											</a>
										</center>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
			<div class="row mt-4 mb-2">
				<div class="col-12">
					<center>
						<a href="#wujudkan-rumah-impian-anda-bersama-PT-KANPA" id="produk" class="btn-lg bg-kanpa border-r text-light teks-other-product produk-lain"><i class="fa-brands fa-product-hunt"></i> Lihat Produk Lainnya >></a>
					</center>
				</div>
			</div>
			<div class="row bg-kanpa p-5 mt-4">
				<div class="col-12">
					<center>
						<h3 class="text-white teks-tentang-kami">TENTANG KAMI</h3>
					</center>
				</div>
			</div>
			<div class="container pl-4 pr-4">
				<div class="row">
					<div class="col-12">
						<hr>
						<center>
							<p class="mt-3 teks-desk">
								PT Kanzu Permai Abadi merupakan perushaan yang bergerak di bidang perumahan.
								Bermula pada tahun 2002 kami membuat kavling yang siap bangun dengan nama Bukit Asri 1 seluas 2 hektar yang terletak
								di Kec. Ungaran Barat Kab. Semarang. Kemudian pada tahun 2006 usaha menjadi rumah pesan bangundi Bukit Asri 2
								seluas 3 hektar. Pada tahun 2018 kami melakukan pengembangan usaha perumahan Bukit Asri 4. Pada 2020 kami berkembang menjadi PT Kanzu Permai Abadi
								untuk membuat perumahan yang berfokus di area Kabupaten Semarang.

							</p>
						</center>
						<hr>
					</div>
				</div>
				<?php
				$no = 1;
				$ambil_data = mysqli_query($koneksi, "SELECT * FROM berita WHERE status_berita = 'Ditampilkan'");
				while ($row = mysqli_fetch_array($ambil_data)) {
				?>
					<div class="row">
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
				<div id="chat-marketing" class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4>Info Lebih Lanjut</h4>
							</div>
							<div class="card-body">
								<form method="post" action="prosess/proses_simpan_data_kastemer.php" enctype="multipart/form-data">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-12">
											<div class="form-group">
												<label for="pilih-perum">Pilih Perumahan</label>
												<select id="pilih-perum" name="wa_nmperum" class="custom-select">
													<option value="0">Pilih Perumahan</option>
													<?php
													include '../koneksi.php';
													$no = 1;
													$query = "SELECT * FROM perumahan ORDER BY id_perum DESC";
													$data = $koneksi->prepare($query);
													$data->execute();
													$res1 = $data->get_result();
													while ($row = $res1->fetch_assoc()) {
													?>
														<option value="<?php echo $row['nm_perum']; ?> "><?php echo $row['nm_perum']; ?></option>

													<?php } ?>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4 col-md-4 col-12">
											<label for="nm-kastemer">Nama Lengkap</label>
											<div class="form-group ">
												<input type="text" id="" class="form-control" name="action_wa" value="wa-dashboard" hidden>
												<input type="text" id="nm-kastemer" class="form-control" name="nm_kastemer" placeholder="Nama Lengkap ..." autocomplete="off" required value="">
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-12">
											<label for="no-wa">No Whatsapp</label>
											<div class="form-group ">
												<input type="text" id="no-wa" class="form-control" name="no_wa" placeholder="No Wa ..." autocomplete="off" required value="">
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-12">
											<label for="email">Alamat Email</label>
											<div class="form-group ">
												<input type="text" id="email" class="form-control" name="email" placeholder="Alamat Email ..." autocomplete="off" required value="">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 p-0">
											<button type="submit" name="simpan" id="chat-wa" class="text-light col-12 btn btn-sm bg-btn-wa elevation-3">
												<i class="fa-brands fa-whatsapp"></i> Chat Marketing
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<center>
					<h2 class="font-weight-bold mt-4">PARTNER</h2>
					<h6>Berikut adalah Partner kami :</h6>
				</center>
				<div class="row jus-content">
					<div class="col-lg-4 col-12 ">
						<img src="assets/img/logo btn.png" alt="Logo BTN" class="img-fluid">
					</div>
					<div class="col-lg-4 col-12 ">
						<img src="assets/img/logo btn syariah.png" alt="Logo BTN" class="img-fluid">
					</div>
					<div class="col-lg-4 col-12 ">
						<img src="assets/img/logo mandiri.png" alt="Logo BTN" class="img-fluid">
					</div>
				</div>
			</div>
			<!-- /.content -->
		</div>
	</div>
	<input type="text" id="id-perum-tipe" value="" hidden>
</div>
<script>
	// alert('ya');
	$('.slider').slick({
		autoplay: true,
		autoplaySpeed: 2500,
		dots: true
	});
	$(document).ready(function() {
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