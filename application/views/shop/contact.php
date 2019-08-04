
<!-- <div class="row">
	<div class="col-sm-6">
		<div class="container">
			<div class="wow slideInRight">
				<div class="card-body">
					<div class="container">
						<div class="col-lg-9">
							<?= $this->session->flashdata('message');?>
							<?= form_open('shop/addContact');?>
						</div>
							
						<div class="form-row">
							<div class="col-lg-8  md-form">					
								<?php echo form_error('full_name'); ?>
								<i class="fa fa-child prefix white-text active"></i>
								<label for="FullName" class="active">  Nama Lengkap</label>
								<input type="text" class="white-text form-control" name="full_name" value="<?= set_value('full_name'); ?>" required/>
							</div>
						</div>
						<div class="form-row">
							<div class="col-lg-8  md-form">	
								<?php echo form_error('e-mail'); ?>
								<i class="fa fa-envelope prefix white-text active"></i>
								<label for="Email" class="active">  Email</label>
								<input type="email" class="white-text form-control" name="e-mail" value="<?= set_value('e-mail'); ?>" required/>
							</div>
						</div>
						<div class="form-row">
							<div class="col-lg-8  md-form">
								<?php echo form_error('message'); ?>
								<i class="fa fa-pencil-square-o prefix white-text active"></i>
								<label for="Message" class="active">  Pesan</label><br>
								<textarea class="white-text form-control" name="message"><?= set_value('message'); ?></textarea>
							</div>
						</div>
								<br>

							<div class="col-lg-3" >
								<input type="submit" value="Kirim" class="btn btn-indigo form-control"/>
							</div>
								<?= form_close(); ?>
					</div>	
				</div>
			</div>
		</div>
	</div>
		
	<div class="col-sm-4">
		<div class="container">
			<div class="wow slideInRight">
				<div id="googleMap"><br><br>
					<iframe width="500" height="250" frameborder="0" src="http://maps.google.com/maps?q=-7.1968565,112.7312112&z=15&output=embed"></iframe>
				</div><br>
				<p align="left" class="white-text" style="font-family: verdana; font-size: 10pt;">
					<i class="fa fa-building prefix white-text active"></i>  Jl. Perak Timur 480 Surabaya<br>
					<i class="fa fa-phone prefix white-text active"></i> (031)  51166384<br>
					<i class="fa fa-fax prefix white-text active"></i> (031) 51166386<br>
					<i class="fa fa-envelope prefix white-text active"></i><a href="mailto:info@ptpds.co.id"> info@ptpds.co.id</a>
				</p>
			</div>
		</div>
	</div>
</div> -->

<!-- 

 -->

<div class="colorlib-contact">
	<div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
				<span class="heading-meta">CONTACT</span>
				<h2 class="colorlib-heading">Hubungi Kami</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
					<div class="colorlib-icon">
						<i class="icon-globe-outline"></i>
					</div>
					<div class="colorlib-text">
						<p><a href="mailto:info@ptpds.co.id">info@ptpds.co.id</a></p>
					</div>
				</div>

				<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
					<div class="colorlib-icon">
						<i class="icon-map"></i>
					</div>
					<div class="colorlib-text">
						<p>Jl. Perak Timur 480 Surabaya</p>
					</div>
				</div>

				<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
					<div class="colorlib-icon">
						<i class="icon-phone"></i>
					</div>
					<div class="colorlib-text">
						<p><a href="tel://">(031)  51166384</a></p>
						<p><a href="tel://">(031)  51166386</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-7 col-md-push-1">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
						
						<?= $this->session->flashdata('message');?>
						<?= form_open('shop/addContact');?>

						<!-- <form action=""> -->
							<div class="form-group">
								<!-- <input type="text" class="form-control" placeholder="Name"> -->
								<?php echo form_error('full_name'); ?>
								<i class="fa fa-child prefix white-text active"></i>
								<!-- <label for="FullName" class="active">  Nama Lengkap</label> -->
								<input type="text" class="form-control" name="full_name" placeholder="Nama Lengkap" value="<?= set_value('full_name'); ?>" required/>
							</div>
							<div class="form-group">
								<!-- <input type="text" class="form-control" placeholder="Email"> -->
								<?php echo form_error('e-mail'); ?>
								<i class="fa fa-envelope prefix white-text active"></i>
								<!-- <label for="Email" class="active">  Email</label> -->
								<input type="email" class="form-control" name="e-mail" placeholder="Email" value="<?= set_value('e-mail'); ?>" required/>
							</div>
							<div class="form-group">
								<!-- <input type="text" class="form-control" placeholder="Subject"> -->
								<?php echo form_error('message'); ?>
								<i class="fa fa-pencil-square-o prefix white-text active"></i>
								<!-- <label for="Message" class="active">  Pesan</label><br> -->
								<textarea cols="30" rows="7" class="form-control" name="message" placeholder="Pesan"><?= set_value('message'); ?></textarea>
							</div>
							<!-- <div class="form-group">
								<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
							</div> -->
							<div class="form-group">
								<input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
							</div>
							<?= form_close(); ?>
						<!-- </form> -->
					</div>
					
				</div>
			</div>
		</div>
		<iframe width="1000" height="520" frameborder="0" src="http://maps.google.com/maps?q=-7.1968565,112.7312112&z=15&output=embed"></iframe>
	</div>
</div>

<!-- <div id="map"> -->
	
<!-- </div>	 -->

<div id="get-in-touch" class="colorlib-bg-color">
	<div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
				<h2>Get in Touch!</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
				<p class="colorlib-lead">Kami ingin mendengar pendapat Anda.</p>
				<p><a href="<?= site_url('shop/contact'); ?>" class="btn btn-primary btn-learn">Hubungi Kami!</a></p>
			</div>
		</div>
	</div>
</div>
