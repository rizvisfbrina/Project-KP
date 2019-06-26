<body style="min-height: 350px; background:linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(<?= base_url('style/assets/images/mall.jpeg')?>) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover; background-size: cover;">  
  <div class="container">
    <?php echo $this->session->flashdata("register"); ?>
    <h1  class="text-center mt-5" style="color:white; font-family: 'Lobster', cursive">Register</h1>
    <div class="card card-register mx-auto mt-2">
      <div class="card-body">
        <?php echo validation_errors(); ?>
        <?php echo form_open('Account/registerAccount'); ?>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="FName">Nama Depan</label>
                <input class="form-control" id="FName" name="FName" type="text" aria-describedby="nameHelp" placeholder="Masukkan nama depan" value="<?= set_value('FName'); ?>" >
              </div>
              <div class="col-md-6">
                <label for="LName">Nama Belakang</label>
                <input class="form-control" id="LName" name="LName" type="text" aria-describedby="nameHelp" placeholder="Masukkan nama belakang" value="<?= set_value('LName'); ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="PName">Nama Perusahaan</label>
                <input class="form-control" id="PName" name="PName" type="text" aria-describedby="nameHelp" placeholder="Masukkan nama perusahaan" value="<?= set_value('PName'); ?>" >
              </div>
              <div class="col-md-6">
                <label for="email">Email Perusahaan</label>
                <input class="form-control" id="email" name="email" type="text" aria-describedby="nameHelp" placeholder="Masukkan email perusahaan" value="<?= set_value('email'); ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="username">Username</label>
                <input class="form-control" id="username" name="username" type="text" placeholder="Masukkan username" value="<?= set_value('username'); ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Password</label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="confPassword">Confirm password</label>
                <input class="form-control" id="confPassword" name="confPassword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <input type="submit" name="submit" value="Register" class="btn btn-primary btn-block"/>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url('index.php/account');?>">Login Page</a>
          <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>
</body>