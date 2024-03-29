  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Daftar User</li>
      </ol>
      <div id="successAlert">
        
      </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-users"></i> Daftar User</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama Depan</th>
                  <th>Nama Belakang</th>
                  <th>Email</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php $count = 1; foreach($userlist->result() as $ul) : ?>
                  <tr>
                    <td><?= $count++; ?></td>
                    <td><?= $ul->username ?></td>
                    <td><?= $ul->first_name ?></td>
                    <td><?= $ul->last_name ?></td>
                    <td><?= $ul->email ?></td>
                    <?php if ($ul->ban_flag == 1) : ?>
                      <td align='center' id="banCell<?= $ul->user_id ?>"><a data-toggle='modal' data-target='#unbanmodal' href='#' onclick='passId(<?= $ul->user_id ?>)' >Aktifkan</a></td>
                    <?php else: ?>
                        <td align='center' id="banCell<?= $ul->user_id ?>"><a data-toggle='modal' data-target='#banmodal' href='#' onclick='passId(<?= $ul->user_id ?>)' >Blokir</a></td>
                    <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <!-- Unban Modal-->
    <div class="modal fade" id="unbanmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Aktifkan User</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Anda yakin ingin mengaktifkan user ini?</div>
          <div class="modal-footer">
            <button class="btn btn-default" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary" type="button" onclick="acceptUnban()"data-dismiss="modal">Ya</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Ban Modal-->
    <div class="modal fade" id="banmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Blokir User</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Anda yakin ingin memblokir user ini?.</div>
          <div class="modal-footer">
            <input type="hidden" id="passedUserId" />
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary" type="button" onclick="acceptBan()"data-dismiss="modal">Ya</button>
          </div>
        </div>
      </div>
    </div>

<script>
  function passId(userId) {
    $('#passedUserId').val(userId);
  }

  function acceptBan() {
      var userid = $('#passedUserId').val();
      $.get('<?php echo site_url("admin/ban_user") ?>', {'userId' : userid}, function(data){
        var html = "<a data-toggle='modal' data-target='#unbanmodal' href='#' onclick='passId("+userid+")' >Aktifkan</a>";
        $("#banCell"+userid).html(html);
        showSuccessAlert("User berhasil diblokir!")
      }, 'json') ;    
  }

  function acceptUnban() {
      var userid = $('#passedUserId').val();
      $.get('<?php echo site_url("admin/unban_user") ?>', {'userId' : userid}, function(data){
        var html = "<a data-toggle='modal' data-target='#banmodal' href='#' onclick='passId("+userid+")' >Blokir</a>";
        $("#banCell"+userid).html(html);
        showSuccessAlert("User berhasil diaktifkan!")
      },'json');
  }
  
  function showSuccessAlert(message) {
    var string = "<div class='alert alert-success'>"
          + "<strong>Berhasil!</strong> "+message
          +"</div>";
    $("#successAlert").html(string);
    $("#successAlert").show();
    $('#successAlert').delay(3000).fadeOut('slow');
  }
</script>
