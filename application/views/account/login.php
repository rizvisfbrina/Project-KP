<?php echo $this->session->flashdata("fail"); ?>
	
	
		<div class="colorlib-about">
			<div class="colorlib-narrow-content">

					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="wow rollIn">
								<h2 class="text-center" style="color:white;">LOGIN</h2>
								<hr class="hr-light">
							</div>
							<div class="wow slideInRight">
								<div class="card-body">
									<?php echo form_open('account/loggingIn'); ?>
										<div class="form-group">
											<div class="form-row md-form">
											 <i class="fa fa-user prefix white-text active"></i>
											 <!-- <label for="username" class="active">  Username</label> -->
											<input class="white-text form-control" id="username" name="username" type="text" placeholder="Username" required>
											</div>
										</div>
										<div class="form-group">
											<div class="form-row md-form">
											<i class="fa fa-lock prefix white-text active"></i>
											<!-- <label for="password" class="active">  Nama Depan</label> -->
											<input class="white-text form-control" id="password" name="password" type="password" placeholder="Password" required>
											</div>
										</div>
										<div row align="center">
											<button class="btn blue-gradient btn-lg btn-round"  style="border-radius: 20px;" type="submit">Masuk</button>
										</div>
									</form>
									<br><br>
							</div>	
									<div class="wow shake">
										<div class="text-center p-t-136">
											<a class="txt2" href="<?php echo base_url('index.php/account/register');?>">
												Register     →
												<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
											</a>
										</div>
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
<!-- </body> -->
