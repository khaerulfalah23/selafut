<!-- Start slider area -->

	<!-- End Slider area -->




	<!-- Start main content -->
	<main>
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>LAPANGAN MATRAS</h2>
										<p></p>
									</div>
								</div>
							</div>
							<!-- Start Feature Content -->
								<div class="row">
									<div class="mu-portfolio-content">
										<div class="filtr-container">

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="1">
							                   <a class="mu-imglink" href="<?php echo base_url().'assets/images/matras-0.jpg'?>" title="MATRAS">
								                   	<img class="img-responsive" src="<?php echo base_url().'assets/images/matras-0.jpg'?>" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">MATRAS</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="2">
							                    <a class="mu-imglink" href="<?php echo base_url().'assets/images/matras-1.jpg'?>" title="MATRAS">
							                    	<img class="img-responsive" src="<?php echo base_url().'assets/images/matras-1.jpg'?>" alt="image">
								                    <div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">MATRAS</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                    </a>
							                </div>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="1">
							                    <a class="mu-imglink" href="<?php echo base_url().'assets/images/matras-3.jpg'?>" title="MATRAS">
							                    	<img class="img-responsive" src="<?php echo base_url().'assets/images/matras-3.jpg'?>" alt="image">
								                    <div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">MATRAS</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                    </a>
							                </div>





							               </div>
							            </div>
									</div>
									<br>
								<div class="row">
									<div class="com-md-6">
										<h4>Deskripsi Lapangan</h4>
										<p>Lapangan Ini Memakai Matras model Vinyl bahan yang digunakan matras ini sangat bagus dan mempunyai efek lentur yang membuat bola tetap stabil. lapangan ini memiliki Panjang 27 Meter dan Lebar 19 Meter. Sedangkan gawang lapangan ini memiliki ukuran Lebar 3 meter dan Tinggi 2 Meter. Lapangan ini juga memiliki 4 lapisan dimana akan membuat terasa lebih lembut dan tahan dari getaran apapun harga sewa lapangan ini <b>Rp.30.000 perjam</b></p>
									</div>
								</div>
								<br>
								<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>JADWAL LAPANGAN MATRAS</h2>
										<p></p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<!-- tabel -->

								          <div class="table-responsive">
								                  <table class="table table-bordered table-striped table-hover" id="table-datatable">
								                    <thead>
								                      <tr>
								                        <th style="width: 55px; ">No</th>
								                        <th style="width: 150px;">Kode Sewa</th>
								                        <th style="width: 200px;">Nama Pemesan</th>
								                        <th style="width: 200px;">Email </th>
								                        <th style="width: 155px;">Tanggal</th>
								                        <th style="width: 127px;">Jam main</th>
								                        <th style="width: 100px;">selesai</th>
								                        <th style="width: 145px;">lama main</th>
								                         <th style="width: 145px;">Status</th>

								                      </tr>
								                    </thead>
								                    <tbody>
                                      <?php $no=1; foreach($lapangan as $l): ?>
                                        <tr>
                                          <td><?= $no++; ?></td>
                                          <td><?= $l['kode_sewa']; ?></td>
                                          <td><?= $l['nama_pemesan']; ?></td>
                                          <td><?= $l['email']; ?></td>
                                          <td><?= $l['tanggal']; ?></td>
                                          <td><?= $l['jam_main']; ?></td>
                                          <td><?= $l['selesai']; ?></td>
                                          <td><?= $l['lama_main']; ?> Jam</td>
                                          <td><?= $l['status']; ?></td>
                                        </tr>
                                      <?php endforeach; ?>
								                    </tbody>
								                  </table>
								                </div>
										<!-- akhir table -->
									</div>
								</div>
							</div>
							<!-- End Feature Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->


							<!-- End Skills Content -->
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>

	<!-- End main content -->