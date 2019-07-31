<body style="min-height: 350px; background:linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(<?= base_url('style/assets/images/headline/bg-22.jpg')?>) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover; background-size: cover;">
	<div class="container">
		<?php echo $this->session->flashdata("fail"); ?>
		<div class="wow bounceInUp">
			<div class="card-body">
				<div class="container">
					<div class="text-center">
				          <h3 class="white-text mt-5"><i class="fa fa-user white-text"></i>  Login</h3>
				          <hr class="hr-light">
				    </div>
						
					<div class="card-body">
						<?php echo form_open('account/loggingIn'); ?>
							<div class="form-group">
								<div class="form-row md-form">
								 <i class="fa fa-user prefix white-text active"></i>
								 <label for="username" class="active">  Username</label>
								<input class="white-text form-control" id="username" name="username" type="text" placeholder="Username" required>
								</div>
							</div>
							<div class="form-group">
								<div class="form-row md-form">
								<i class="fa fa-lock prefix white-text active"></i>
								<label for="password" class="active">  Nama Depan</label>
								<input class="white-text form-control" id="password" name="password" type="password" placeholder="Password" required>
								</div>
							</div>
						<!-- 	<div class="form-group">
								<div class="form-row md-form">
								<div class="form-check">
									<label class="form-check-label" class="active">
										<input class="form-check-input" type="checkbox">  Ingat saya</label>
								</div>
								</div>
							</div> -->
							<div row align="center">
								<button class="btn btn-indigo" type="submit">Masuk</button>
							</div>
						</form>
						<br><br>
						<div class="text-center">
							<h6 class="white-text">Belum punya akun?<a class="d-block small mt-3" href="<?php echo base_url('index.php/account/register');?>">Silakan Registrasi</a> </h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url();?>style/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>style/vendor/popper/popper.min.js"></script>
	<script src="<?php echo base_url();?>style/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url();?>style/vendor/js/jquery.easing.min.js"></script>
</body>
