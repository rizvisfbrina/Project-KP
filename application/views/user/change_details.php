  <!-- Navigation-->

  <div class="content-wrapper">
    <div class="container-fluid">
        <?php echo $this->session->flashdata("msg"); ?>
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="<?= site_url('user/dashboard')?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Ubah Detail</li>
          </ol>
          <div class="card-body">
            <?=form_open(site_url('user/change_userdetail'));?>
              <div class="form-group">
                <label for="dispname">Nama Depan</label>
                <input class="form-control" id="fname" name="fname" type="text" aria-describedby="emailHelp" placeholder="Nama Depan" value="<?= $userData->first_name; ?>">
              </div>
              <div class="form-group">
                <label for="dispname">Nama Belakang</label>
                <input class="form-control" id="lname" name="lname" type="text" aria-describedby="emailHelp" placeholder="Nama Belakang" value="<?= $userData->last_name; ?>">
              </div>
              <div class="form-group">
                <label for="dispname">Username</label>
                <input class="form-control" id="username" name="username" type="text" aria-describedby="emailHelp" placeholder="Username" value="<?= $userData->username; ?>">
              </div>
              <div class="form-group">
                <label for="dispname">Nama Perusahaan</label>
                <input class="form-control" id="Pname" name="Pname" type="text" aria-describedby="emailHelp" placeholder="Nama Perusahaan" value="<?= $userData->perusahaan_name; ?>">
              </div>
              <div class="form-group">
                <label for="email">Email Perusahaan</label>
                <input class="form-control" id="email" name="email" type="email" aria-describedby="emailHelp" placeholder="Masukkan email perusahaan" value="<?= $userData->email; ?>">
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
