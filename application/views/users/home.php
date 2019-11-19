<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url('<?=base_url("assets/images/")?>6.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<h2>Dapatkan Harga Paket Tour Termurah</h2>
									<h3>Paket wisata Bali hingga Raja Ampat</h3>
									<span class="price">IDR 900.000</span>
									<p><a class="btn btn-primary btn-lg" href="destinasi.php">Beli Sekarang</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Destinasi</h3>
						<p>Dapatkan paket traveling termurah se-Indonesia</p>
					</div>
				</div>
				<div class="row">
					<?php foreach ($destinasi as $data): ?>
						
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="<?php echo base_url("detail/").$data['id_destinasi']; ?>">
							<img src="<?=base_url("assets/images/")?><?php echo $data['foto_destinasi']; ?>" alt="Image" class="img-responsive" style="height:280px">
							<div class="desc">
								<span></span>
								<h3><?php echo $data['nama_destinasi']; ?></h3>
								<span><?php echo ucwords($data['kota']); ?></span>
								<span class="price">Rp.<?php echo number_format($data['harga_destinasi'], 0, ",", "."); ?></span>
								<div class="row">
									<div class="col-md-6">
										<a href="<?=base_url("page/buy/");?><?php echo $data['id_destinasi']; ?>" class="btn btn-sm" style="border:none;">Booking</a>
									</div>
									<div class="col-md-6">
										<a href="<?=base_url("page/detail/");?><?php echo $data['id_destinasi']; ?>" class="btn btn-sm pull-right" style="border:none;">Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach ?>
					<div class="col-md-12 text-center animate-box">
						<p><a class="btn btn-primary btn-outline btn-lg" href="<?=base_url("destinasi/");?>">Lihat Semuanya <i class="icon-arrow-right22"></i></a></p>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-hotairballoon"></i>
							</span>
							<div class="feature-copy">
								<h3>Family Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-search"></i>
							</span>
							<div class="feature-copy">
								<h3>Travel Plans</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
							<div class="feature-copy">
								<h3>Honeymoon</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-wine"></i>
							</span>
							<div class="feature-copy">
								<h3>Business Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-genius"></i>
							</span>
							<div class="feature-copy">
								<h3>Solo Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
							<div class="feature-copy">
								<h3>Explorer</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>