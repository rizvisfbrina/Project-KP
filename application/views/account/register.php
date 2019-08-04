        <div class="colorlib-about">
          <div class="colorlib-narrow-content">
   
              <div class="card-body">
                  <div class="text-center">

                    <?php echo $this->session->flashdata("fail"); ?>
                  <?php echo $this->session->flashdata("register"); ?> 
                    <div class="wow bounceInRight">
                      <h3 class="white-text mt-5"> REGISTER</h3>
                      <hr class="hr-light">
                    </div>
                  </div>

                  <?php echo validation_errors(); ?>
                  <?php echo form_open('Account/registerAccount'); ?>
                  <div class="wow jackInTheBox">
                    <form>
                      <div class="form-group">  
                        <div class="form-row" >
                            <div class="col-md-4 col-md-offset-2 md-form" >
                              <i class="fa fa-child"></i>                  
                              <!-- <label for="FName" class="active">  Nama Depan</label> -->
                              <input class="white-text form-control" id="FName" name="FName" type="text" aria-describedby="nameHelp" placeholder="Nama depan" value="<?= set_value('FName'); ?>" required>
                            </div>
                            <div class="col-md-4 md-form">
                              <i class="fa fa-child"></i> 
                              <!-- <label for="LName" class="active">  Nama Belakang</label> -->
                              <input class="white-text form-control" id="LName" name="LName" type="text" aria-describedby="nameHelp" placeholder="Nama belakang" value="<?= set_value('LName'); ?>" required>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-md-4 col-md-offset-2 md-form">
                            <i class="fa fa-building"></i>
                            <!-- <label for="PName" class="active">  Nama Perusahaan</label> -->
                            <input class="white-text form-control" id="PName" name="PName" type="text" aria-describedby="nameHelp" placeholder="Nama perusahaan" value="<?= set_value('PName'); ?>" required>
                          </div>
                          <div class="col-md-4 md-form">
                            <i class="fa fa-envelope"></i>
                            <!-- <label for="email" class="active">  Email Perusahaan</label> -->
                            <input class="white-text form-control" id="email" name="email" type="text" aria-describedby="nameHelp" placeholder="Email perusahaan" value="<?= set_value('email'); ?>"required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-md-4 col-md-offset-4 md-form">
                            <i class="fa fa-user"></i>
                            <!-- <label for="username" class="active">  Username</label> -->
                            <input class="white-text form-control" id="username" name="username" type="text" placeholder="Username" value="<?= set_value('username'); ?>" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-md-4 col-md-offset-2 md-form">
                            <i class="fa fa-lock"></i>
                            <!-- <label for="password" class="active">  Password</label> -->
                            <input class="white-text form-control" id="password" name="password" type="password" placeholder="Password" required>
                          </div>
                          <div class="col-md-4 md-form"><i class="fa fa-lock"></i>
                            <!-- <i class="fa fa-lock prefix white-text active"></i> -->
                            <!-- <label for="confPassword" class="active">  Konfirmasi Password</label> -->
                            <input class="white-text form-control" id="confPassword" name="confPassword" type="password" placeholder="Konfirmasi Password" required>
                          </div>
                        </div>
                      </div>
                      <div class="row" align="center">
                        <div class="col-md-4 col-md-offset-4">
                        <input type="submit" name="submit" value="Register" class="btn blue-gradient btn-lg btn-round" style="border-radius: 20px;"  />
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
            <!-- </div> -->
          </div>
        </div>
      

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>style/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>style/vendor/popper/popper.min.js"></script>
  <script src="<?php echo base_url();?>style/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>style/vendor/js/jquery.easing.min.js"></script>

