<main>
		<section id="mu-about">
			<div class="container my-5 d-flex justify-content-center">
				<div class="row">
					<div class="col-md-12">
            <div class="card bg-primary" style="width: 18rem;">
              <img class="card-img-top" src="<?= base_url('assets/images/profile/') . $usersesion['image']; ?>" alt="Card image cap">
              <div class="card-body text-center text-white">
                <h5 class="card-title"><?= $usersesion['nama']; ?></h5>
                <p class="card-text"><?= $usersesion['email']; ?></p>
                <a href="<?= base_url('profile/edit'); ?>" class="btn btn-light">Ubah Profile</a>
              </div>
            </div>
          </div>
        </div> 
      </div>   
    </section>
</main>