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
										<!-- <?php if($this->session->userdata('alert')): ?>
											<div class='alert alert-danger alert-danger alert-message'>
											<?= $this->session->flashdata('alert'); ?>
											</div>
										<?php endif; ?> -->
									  <div class="card-header text-center" id="warna">
											<h2>Form Ubah Profile</h2>
									  </div>
									  <div class="card-body">
										<?= form_open_multipart('profile/edit'); ?>
									  <div class="form-group">
									    <label >Nama</label>
									    <input type="text" class="form-control" name="nama" value="<?= $usersesion['nama']; ?>" autocomplete="off">
									  </div>
									  <div class="form-group">
									     <label >Email</label>
									     <input type="text" class="form-control" name="email" value="<?= $usersesion['email']; ?>" autocomplete="off" readonly>
											</div>
									  <div class="form-group">
									     <label >Gambar</label>
											 <input type="file" class="form-control" id="image" name="image" >
									  </div>
									<div class="form-group">
									<button type="submit" class="btn btn-primary btn-lg btn-block">Ubah</button>
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