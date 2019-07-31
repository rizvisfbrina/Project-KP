<div class="wow bounceInDown">
	<h3 class="text-center py-5" style="color: white;">Kontak</h3>
</div>
<div class="row">
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
</div>