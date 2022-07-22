<?php
$no = 1;
$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, fasilitas WHERE perumahan.nm_perum='$_POST[id_detail]'");
while ($row = mysqli_fetch_array($ambil_data)) {
	$id_perum = $row['id_perum'];
?>

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
			<div class="bg-detail row pl-2 pr-2">
				<div class="col-lg-4 col-md-4 col-12 pt-3">
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
					<h5 class="font-weight-bold mt-2 mb-0"><i class="fa-solid fa-certificate"></i> SERTIFIKAT :</h5>
					<h6 class="mb-1 mt-2">HAK MILIK</h6>
					<hr class="mt-1">
					<h5 class="font-weight-bold mb-0"><i class="fa-solid fa-house-circle-check"></i> FASILITAS :</h5>
					<div class="row">
						<?php
						$no = 1;
						$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, fasilitas WHERE perumahan.nm_perum='$_GET[id]' AND perumahan.id_perum = fasilitas.id_fasperum");
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
						$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, lok_terdekat WHERE perumahan.nm_perum='$_GET[id]' AND perumahan.id_perum = lok_terdekat.id_lokperum");
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
								// $perum = $_GET['id'];
								$no = 1;
								$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, tipe WHERE perumahan.nm_perum = '$_GET[id]' AND perumahan.id_perum = tipe.id_tipeperum ");
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
							$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan, tipe WHERE perumahan.nm_perum = '$_GET[id]' AND tipe.id_tipeperum = perumahan.id_perum");
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
						$ambil_data = mysqli_query($koneksi, "SELECT *FROM perumahan WHERE perumahan.status_perum = 'Direkomendasikan' ");
						while ($row = mysqli_fetch_array($ambil_data)) {
							$id_perum = $row['id_perum'];
						?>
							<div class="gallery-cell">
								<div class="row">
									<div class="col-12">
										<div class="bg-product">
											<a href="index.php?p=detail&id=<?php echo $row['nm_perum']; ?>">
												<?php
												$fot_display = mysqli_query($koneksi, "SELECT * FROM tipe WHERE id_tipeperum = $id_perum ORDER BY harga limit 1 ");
												while ($foto = mysqli_fetch_array($fot_display)) {
												?>
													<img src="assets/img/foto_display/<?php echo $foto['fot_display']; ?>" alt="PT KANPA Logo" class="img-fluid" />
												<?php } ?>
											</a>
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
														<a href="index.php?p=detail&id=<?php echo $row['nm_perum']; ?>" data-id="" class="btn-sm bg-btn-detail btn-primary">Lihat Detail >></a>
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
						<a href="index.php?p=produk" class="btn-lg bg-kanpa border-r text-light teks-other-product"><i class="fa-brands fa-product-hunt"></i> Lihat Produk Lainnya >></a>
					</center>
				</div>
			</div>
		</div>
	</section>
	<input type="hidden" id="id-perum-tipe" value="<?php echo $row['nm_perum']; ?>">
<?php } ?>

<script>
	// $(document).ready(function() {


	// });
</script>