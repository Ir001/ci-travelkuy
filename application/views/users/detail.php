

		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Detail <?php echo $detail['0']['nama_destinasi']; ?></h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="fh5co-blog animate-box">
							
							<div class="blog-text">
								<div class="prod-title">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<h3><?php echo $detail['0']['nama_destinasi']; ?></h3>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<form method="get" action="buy.php" class="pull-right">
												<input type="hidden" name="id" value="<?php echo $detail['0']['id_destinasi']; ?>">
												<input type="number" name="jumlah" placeholder="Jumlah Tiket" min="1" max="99" value="" required>
												<?php if (isset($_GET['page']) AND $_GET['page'] == "edit"): ?>
													<input type="hidden" name="page" value="edit">
													<button type="submit" class="btn btn-sm btn-primary">Ubah Jumlah</button>
													<?php else: ?>
													<button type="submit" class="btn btn-sm btn-primary">Booking</button>

												<?php endif ?>
											</form>
										</div>
									</div>
									<div class="col-md-4">
										<img class="img-responsive" src="<?=base_url("assets/");?>images/<?php echo $detail['0']['foto_destinasi']; ?>" alt="">
									</div>
									<div class="col-md-6">
										<p><?php echo $detail['0']['deskripsi_destinasi']; ?></p>
									</div>	
									<div class="col-md-12" style="margin-top: 20px">
										<a href="destinasi.php"><< Kembali</a>
									</div>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-md-block"></div>
				</div>

			</div>
		</div>