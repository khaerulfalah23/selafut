<main>
		<!-- Start About -->
		<section id="mu-about">
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Title -->
							
							<div class="row" id="cn">
								<div class="col-md-10">
									<div class="card">
										<?php if($this->session->userdata('alert')): ?>
											<div class='alert alert-danger alert-danger alert-message'>
											<?= $this->session->flashdata('alert'); ?>
											</div>
										<?php endif; ?>
									  <div class="card-header text-center" id="warna">
											<h2>Form Penyewaan Lapangan Futsal</h2>
									  </div>
									  <div class="card-body">
										<form action="<?= base_url('penyewaan'); ?>" method="post">
									  <div class="form-group">
									    <label >Nama</label>
									    <input type="hidden" name="kode">
									    <input type="text" class="form-control" name="nama" autocomplete="off">
									  </div>
									  <div class="form-group">
									     <label >Email</label>
									    <input type="text" class="form-control" name="email" autocomplete="off">
									  </div>
									  <div class="form-group">
									  <label >Jenis lapangan</label>
									  <select class="form-control" name="j_lapangan" autocomplete="off">
									  	<option>--pilih--</option>
										  <option value="Matras">Matras</option>
										  <option value="Sintetis">Sintetis</option>
									  </select>
									</div>
									<div class="form-group">
									    <label >tanggal</label>
									    <input type="date" class="form-control tanggal" name="tgl" autocomplete="off">
									  </div>
									<div class="form-group">
									   <label >Jam Main</label>
									  <select class="form-control" name="jam_main">
									  	<option>--pilih--</option>
										  <option value="09.00">09.00</option>
										  <option value="10.00">10.00</option>
										  <option value="11.00">11.00</option>
										  <option value="12.00">12.00</option>
										  <option value="13.00">13.00</option>
										  <option value="14.00">14.00</option>
										  <option value="15.00">15.00</option>
										  <option value="16.00">16.00</option>
										  <option value="17.00">17.00</option>
										  <option value="18.00">18.00</option>
										  <option value="19.00">19.00</option>
										  <option value="20.00">20.00</option>
										  <option value="21.00">21.00</option>
										  <option value="22.00">22.00</option>
									  </select>
									</div>
									<div class="form-group">
									   <label >Selesai</label>
									  <select class="form-control" name="selesai">
									  		<option>--pilih--</option>
										  <option value="10.00">10.00</option>
										  <option value="11.00">11.00</option>
										  <option value="12.00">12.00</option>
										  <option value="13.00">13.00</option>
										  <option value="14.00">14.00</option>
										  <option value="15.00">15.00</option>
										  <option value="16.00">16.00</option>
										  <option value="17.00">17.00</option>
										  <option value="18.00">18.00</option>
										  <option value="19.00">19.00</option>
										  <option value="20.00">20.00</option>
										  <option value="21.00">21.00</option>
										  <option value="22.00">22.00</option>
									  </select>
									</div>
									<div class="form-group">
									<button type="submit" class="btn btn-primary btn-lg btn-block">Pesan</button>
									</div>
									</form>
									    
									  </div>
									</div>
								</div>
							</div>

							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-12">
									
									
								</div>
								
							<!-- End Feature Content -->
						</div>
					</div>
				</div>
			</div>
		
		</section>
		<!-- End About -->

	</main>