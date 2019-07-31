<!-- Navigation-->

<div class="content-wrapper">       
  <div class="container-fluid">
    <?php echo $this->session->flashdata("msg"); ?>
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?= site_url('user/dashboard')?>">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Ubah Password</li>
    </ol>
    <div class="card-body">
      <?=form_open(site_url('user/change_userpassword'));?>
        <div class="form-group">
          <label for="email">Password Lama</label>
          <input class="form-control nospace" id="oldpassword" name="oldpassword" type="password" aria-describedby="emailHelp" placeholder="Password Lama" required="true">
        </div>
        <div class="form-group">
          <label for="email">Password Baru</label>
          <input class="form-control nospace" id="newpassword" name="newpassword" type="password" aria-describedby="emailHelp" placeholder="Password Baru" pattern=".{5,10}" required title="Password harus lebih dari 5 karakter!">
        </div>
        <div class="form-group">
          <label for="email">Masukkan Password Baru</label>
          <input class="form-control nospace" id="renewpassword" name="renewpassword" type="password" aria-describedby="emailHelp" placeholder="Password Baru" pattern=".{5,10}"  required title="Password harus lebih dari 5 karakter!">
        </div>
        <div class="row">
          <div class="col-sm-12" align="center">
            <button class="btn btn-primary btn-rounded" type="submit" >Ubah</button>
          </div>
        </div>
      <?=form_close();?>

    </div>

  </div><!-- /.container-fluid-->  
</div><!-- /.content-wrapper-->
