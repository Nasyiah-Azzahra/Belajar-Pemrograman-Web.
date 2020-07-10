<!-- Guards Section-->		
		<section class="page-section portfolio" id="guards">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Guards</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row text-center">
					<?php if( empty($guard) ) : ?>
						<div class="alert alert-danger w-100" role="alert">
							Data yang anda cari tidak ditemukan!
						</div>
					<?php endif; ?>
                    <!-- Portfolio Item 1-->
					<?php foreach ($guard as $guard) : ?>
                    <div class="card ml-4 mt-4" style="width: 16rem;">
					  <img src="<?php echo base_url().'/upload/guard/'.$guard->foto ?>" class="card-img-top" alt="...">
					  <div class="card-body">
						<h5 class="card-title"><?php echo $guard->nama ?></h5>
						<p class="card-text"><?php echo $guard->deskripsi ?></p>
						<button type="button" class="btn btn-info"><?php echo $guard->nohp ?></button>
					  </div>
					</div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>