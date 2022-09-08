<!-- <h1>okta</h1> -->
<div class="halaman">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	<?php
	include '../koneksi.php';
	$no = 1;
	$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, fasilitas WHERE perumahan.id_perum='$_GET[id_perum]'");
	while ($row = mysqli_fetch_array($ambil_data)) {
		$id_perum = $row['id_perum'];
	?>
		<input type="text" id="id-perum-tipe" value="<?php echo $row['id_perum']; ?>" hidden>
		<div class="row mt-5rem">
			<div class="col-12">
				<center>
					<img class="img-fluid" src="assets/img/logo/<?php echo $row['logo']; ?>" alt="Image 1">
				</center>
			</div>
		</div>
		<div class="row">
			<div class="col-12 height-43rem;">
				<div class="slider m-0">
					<?php
					$data_slideperum = mysqli_query($koneksi, "SELECT *FROM fot_slide WHERE id_fotperum = $id_perum");
					while ($data = mysqli_fetch_array($data_slideperum)) {
					?>
						<div>
							<a href="#">
								<img src="assets/img/foto_slideperum/<?php echo $data['file_slideperum']; ?>" alt="Image 1">
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<section class="content-header p-0">
			<div class="container-fluid">
				<div class="bg-detail row pl-2 pr-2 pt-2">
					<div class="col-lg-4 col-md-4 col-12">
						<center>
							<h4 class="font-weight-bold">KETERANGAN DETAIL</h4>
							<p class="text-align-justify calibri">
								<?php echo $row['deskripsi']; ?>
							</p>
						</center>
						<hr>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<h5 class="font-weight-bold mb-0"><i class="fa-solid fa-map-location-dot"></i> ALAMAT : </h5>
						<h6 class="mb-1 mt-2"><?php echo $row['alamat']; ?></h6>
						<hr class="mt-1">
						<h5 class="font-weight-bold mb-0"><i class="fa-solid fa-certificate"></i> SERTIFIKAT :</h5>
						<h6 class="mb-1 mt-2">HAK MILIK</h6>
						<hr class="mt-1">
						<h5 class="font-weight-bold mb-0"><i class="fa-solid fa-house-circle-check"></i> FASILITAS :</h5>
						<div class="row">
							<?php
							$no = 1;
							$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, fasilitas WHERE perumahan.id_perum='$_GET[id_perum]' AND perumahan.id_perum = fasilitas.id_fasperum");
							while ($row = mysqli_fetch_array($ambil_data)) {
							?>
								<div class="col-lg-6 col-12 mt-1">
									<i class="fa-solid fa-circle-check"> </i> <?php echo $row['nmfas']; ?>
								</div>
							<?php
							}
							?>
						</div>
						<hr class="mt-1">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<h5 class="font-weight-bold mt-2 mb-0"><i class="fa-solid fa-magnifying-glass-location"></i> LOKASI TERDEKAT :</h5>
						<div class="row">

							<?php
							$no = 1;
							$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, lok_terdekat WHERE perumahan.id_perum='$_GET[id_perum]' AND perumahan.id_perum = lok_terdekat.id_lokperum");
							while ($row = mysqli_fetch_array($ambil_data)) {
							?>
								<div class="col-12 mt-1">
									<i class="fa-solid fa-location-dot"></i> <?php echo $row['jarak']; ?> Menit Ke <?php echo $row['lokasi']; ?>
								</div>
							<?php } ?>
						</div>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-12 p-0">
						<div class="card card-primary card-outline card-outline-tabs">
							<div class="card-header p-0 border-bottom-0">
								<ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
									<?php
									// $perum = $_GET['i_detaild'];
									$no = 1;
									$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, tipe WHERE perumahan.id_perum = '$_GET[id_perum]' AND perumahan.id_perum = tipe.id_tipeperum ");
									while ($row = mysqli_fetch_array($ambil_data)) {
									?>

										<li class="nav-item">
											<a class="tab-tipe nav-link nav-tab nav-tab<?php echo $no++; ?>" data-id="<?php echo $row['id_tipe']; ?>" id="custom-tabs-three-home-tab" data-toggle="pill" href="#tab<?php echo $row['id_tipe']; ?>" role="tab" aria-controls="custom-tabs-three-home" aria-selected="false">
												<h5 class="font-weight-bold">
													<i class="fa-solid fa-house-circle-exclamation"></i> TYPE <?php echo $row['luas_p']; ?>
												</h5>
											</a>
										</li>
									<?php
									}
									?>
								</ul>
							</div>
							<div class="card-body">
								<!-- <div class="tab-content" id="custom-tabs-three-tabContent"> -->
								<?php
								$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, tipe WHERE perumahan.id_perum = '$_GET[id_perum]' AND tipe.id_tipeperum = perumahan.id_perum");
								while ($row = mysqli_fetch_array($ambil_data)) {
									$data_tipe = $row['nm_perum'];
								?>
									<input type="hidden" id="id-tipe" value="<?php echo $row['id_tipe']; ?>">
									<div id="data-detail-tipe"></div>
									<!-- <div class="tab-pane fade id<?php echo $no++; ?>" id="tab<?php echo $row['id_tipe']; ?>" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
										</div> -->
								<?php } ?>
								<!-- </div> -->
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-12">
						<div class="gallery js-flickity" data-flickity-options='{ "freeScroll": true }'>
							<?php
							$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan WHERE perumahan.status_perum = 'Direkomendasikan' ORDER BY id_perum DESC");
							while ($row = mysqli_fetch_array($ambil_data)) {
								$id_perum = $row['id_perum'];
								$nmperum = $row['nm_perum'];
								$perum = preg_replace("![^a-z0-9]+!i", "-", $nmperum);
							?>
								<div class="gallery-cell">
									<div class="row">
										<div class="col-12">
											<div class="bg-product">
												<?php
												$fot_display = mysqli_query($koneksi, "SELECT * FROM tipe WHERE id_tipeperum = $id_perum ORDER BY harga limit 1 ");
												while ($foto = mysqli_fetch_array($fot_display)) {
												?>
													<a href="?perum=<?php echo $row['id_perum']; ?>#<?php echo $perum; ?>" class="detail-perum" id="detail" data-id="<?php echo $row['id_perum']; ?>">
														<img src="assets/img/foto_display/<?php echo $foto['fot_display']; ?>" alt="PT KANPA Logo" class="img-fluid" />
													</a>
												<?php } ?>
												<div class="p-2">
													<h6 class="mb-0">mulai</h6>
													<div class="row pl-1">
														<?php
														$harga_terendah = mysqli_query($koneksi, "SELECT * FROM tipe WHERE id_tipeperum = $id_perum ORDER BY harga limit 1 ");
														// $harga_terendah = mysqli_query($koneksi, "SELECT MIN(harga) AS harga_terendah, promo FROM tipe WHERE id_tipeperum = $id_perum limit 1 ");
														while ($harga = mysqli_fetch_array($harga_terendah)) {
														?>
															<h6 class="bg-price font-weight-bold p-1">Rp <?php echo $harga['harga']; ?> <sub>jt</sub></h6>
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
																			<h6 class="font-weight-bold bor-tip-dash">
																				<?php echo $tipe['luas_p']; ?>/<?php echo $tipe['luas_t']; ?>
																			</h6>
																		</td>
																	<?php } ?>
																</tr>
															</table>
														</a>
													</h5>
													<p class="font-weight-bold"><?php echo $row['alamat']; ?></p>
													<div class="col-12 mb-2">
														<center>
															<a href="?perum=<?php echo $row['id_perum']; ?>#<?php echo $perum; ?>" id="detail" data-id="<?php echo $row['id_perum']; ?>" class="btn-sm bg-btn-detail btn-primary detail-perum">Lihat Detail >></a>
														</center>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="row mt-4 mb-3">
					<div class="col-12">
						<center>
							<a href="#wujudkan-rumah-impian-anda-bersama-PT-KANPA" id="produk" class="btn-lg bg-kanpa border-r text-light teks-other-product produk-lain"><i class="fa-brands fa-product-hunt"></i> Lihat Produk Lainnya >></a>
						</center>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>
</div>
<script>
	$(document).ready(function() {
		// alert('test')
		$('.slider').slick({
			autoplay: true,
			autoplaySpeed: 2500,
			dots: true
		});

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
			success: function(data) {
				// alert(data);
				$("#data-detail-tipe").html(data);
			}
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