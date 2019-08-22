<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #116185;">
			<div class="container">
				<!-- <a class="navbar-brand" href="<?= site_url('shop'); ?>" ></a> -->
				<a class="navbar-brand" href="<?= site_url('shop'); ?>">
					<img class="navbar-brand" src="style/assets/images/icon.jpg" height="50" width="60"/>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item <?= $home; ?>">
							<a class="nav-link" href="<?= site_url('shop'); ?>"><b>Beranda</b>
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item <?= $about; ?>">
							<a class="nav-link" href="<?= site_url('shop/about');?>"><b>Tentang</b></a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="#">Services</a>
						</li> -->
						<li class="nav-item <?= $contact; ?>">
							<a class="nav-link" href="<?= site_url('shop/contact');?>"><b>Kontak</b></a>
						</li>
						<li class="nav-item">
							<?php 	if ($this->session->userdata('usertype') == "admin") : ?>
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>index.php/admin"><b>Dashboard Admin</b></a></li>
								<li class="nav-item"><a class="nav-link" style="margin-left:5px" data-toggle="modal" data-target="#logout"><button class="btn btn-danger py-1">Keluar</button></a></li>
							<?php elseif ($this->session->userdata('usertype') == "user") : ?>
								<li class="nav-item"><a class="nav-link"  href="<?php echo base_url()?>index.php/user/dashboard"><b>Profil</b></a></li>
								<li class="nav-item"><a class="nav-link" style="margin-left:5px" data-toggle="modal" data-target="#logout"><button class="btn btn-danger py-1">Keluar</button></a></li>
							<?php else : ?>
								<a class="nav-link" href="<?php echo base_url()?>index.php/Account"><button class="btn btn-success py-1">Masuk</button></a>
							<?php endif; ?>
						</li>
					</ul>
				</div>
			</div>
		</nav>