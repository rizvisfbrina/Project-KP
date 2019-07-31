  <div class="content-wrapper">
    <div class="container-fluid">
      <?php echo $this->session->flashdata("success"); ?>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-envelope"></i> Daftar Pesan </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th width="10%">No</th>
                  <th width="25%">Nama Lengkap</th>
                  <th width="25%">Email</th>
                  <th width="25%">Waktu</th>
                  <th width="15%">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php $count = 1; foreach($messages->result() as $message) : ?>
                    <tr>
                      <td <?php if($message->flag == 0) {echo "style='font-weight:bold;'";}?>><?= $count++; ?></td>
                      <td <?php if($message->flag == 0) {echo "style='font-weight:bold;'";}?>><?= $message->full_name ?></td>
                      <td <?php if($message->flag == 0) {echo "style='font-weight:bold;'";}?>><?= $message->email ?></td>
                      <td <?php if($message->flag == 0) {echo "style='font-weight:bold;'";}?>>
                        <?= date_format(date_create($message->submit_time), 'd M Y H:i') ?>
                      </td>
                      <td>
                        <a href="<?= site_url('admin/read_message/'.$message->message_id)?>">
                          <button class="btn btn-primary btn-sm">Baca</button>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

