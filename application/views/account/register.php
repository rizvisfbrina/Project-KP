<body style="min-height: 350px; background:linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(<?= base_url('style/assets/images/headline/bg-22.jpg')?>) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover; background-size: cover;">
  <div class="container">
    <?php echo $this->session->flashdata("fail"); ?>

    <div class="wow bounceInUp">
      <div class="card-body">
        <div class="container">
          <?php echo $this->session->flashdata("register"); ?>
          <div class="text-center">
            <h3 class="white-text mt-5"><i class="fa fa-user white-text"></i>  Register</h3>
            <hr class="hr-light">
          </div>
          <!-- <div class="card card-register mx-auto mt-2"> -->
            <div class="card-body">
              <?php echo validation_errors(); ?>
              <?php echo form_open('Account/registerAccount'); ?>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 md-form">
                      <i class="fa fa-child prefix white-text active"></i>
                      <label for="FName" class="active">  Nama Depan</label>
                      <input class="white-text form-control" id="FName" name="FName" type="text" aria-describedby="nameHelp" placeholder="Masukkan nama depan" value="<?= set_value('FName'); ?>" required>
                    </div>
                    <div class="col-md-6 md-form">
                      <!-- <i class="fa fa-user prefix white-text active"></i> -->
                      <label for="LName" class="active">  Nama Belakang</label>
                      <input class="white-text form-control" id="LName" name="LName" type="text" aria-describedby="nameHelp" placeholder="Masukkan nama belakang" value="<?= set_value('LName'); ?>" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 md-form">
                      <i class="fa fa-building prefix white-text active"></i>
                      <label for="PName" class="active">  Nama Perusahaan</label>
                      <input class="white-text form-control" id="PName" name="PName" type="text" aria-describedby="nameHelp" placeholder="Masukkan nama perusahaan" value="<?= set_value('PName'); ?>" required>
                    </div>
                    <div class="col-md-6 md-form">
                      <i class="fa fa-envelope prefix white-text active"></i>
                      <label for="email" class="active">  Email Perusahaan</label>
                      <input class="white-text form-control" id="email" name="email" type="text" aria-describedby="nameHelp" placeholder="Masukkan email perusahaan" value="<?= set_value('email'); ?>"required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 md-form">
                      <i class="fa fa-user prefix white-text active"></i>
                      <label for="username" class="active">  Username</label>
                      <input class="white-text form-control" id="username" name="username" type="text" placeholder="Masukkan username" value="<?= set_value('username'); ?>" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 md-form">
                      <i class="fa fa-lock prefix white-text active"></i>
                      <label for="password" class="active">  Password</label>
                      <input class="white-text form-control" id="password" name="password" type="password" placeholder="Password" required>
                    </div>
                    <div class="col-md-6 md-form">
                      <!-- <i class="fa fa-lock prefix white-text active"></i> -->
                      <label for="confPassword" class="active">  Konfirmasi Password</label>
                      <input class="white-text form-control" id="confPassword" name="confPassword" type="password" placeholder="Konfirmasi Password" required>
                    </div>
                  </div>
                </div>
                <div row align="center">
                <input type="submit" name="submit" value="Register" class="btn btn-indigo"  />
              </div>
              </form>
              
            </div>
          <!-- </div> -->
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
