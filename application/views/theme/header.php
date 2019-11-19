<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href="<?=base_url();?>"><i class="icon-airplane"></i>APP</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active"><a href="<?=base_url();?>">Beranda</a></li>
								<li>
									<a href="<?=base_url("page/destinasi");?>">Destinasi</a>
								</li>
								<li>
									<a href="#" class="fh5co-sub-ddown">Pemesanan</a>
									<ul class="fh5co-sub-menu">
										<li><a href="<?=base_url("page/cart");?>">Keranjang Belanja</a></li>
										<li><a href="<?=base_url("page/history");?>">Riwayat Pembelian</a></li>

									</ul>
								</li>
								<li><a href="<?=base_url("page/ketentuan");?>">Ketentuan</a></li>
								<li class="active"><a href="<?=base_url("page/kontak");?>">Kontak</a></li>
								<li><a href="page.php?permalink=bantuan">Bantuan</a></li>
									<li class="active"
									<a href="#" class="fh5co-sub-ddown">Akun</a>
									<ul class="fh5co-sub-menu">
										<!-- <li><a href="profile.php">Profile</a></li> -->
										<li><a href="<?=base_url("auth/logout");?>">Logout</a></li>
									</ul>
								</li>
								<li class="active">
									<a href="login.php" class="fh5co-sub-ddown">Akun</a>
									<ul class="fh5co-sub-menu">
										<li><a href="<?=base_url("auth/");?>">Masuk</a></li>
										<li><a href="<?=base_url("auth/register");?>">Daftar</a></li>
									</ul>
								</li>	
							</ul>
						</nav>
					</div>
				</div>
			</header>