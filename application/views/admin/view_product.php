<div class="content-wrapper">
  <div class="container-fluid">
    <?php echo $this->session->flashdata("msg"); ?>
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?= site_url('admin');?>">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Daftar Jasa</li>
    </ol>
    <!-- View Product DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-shopping-bag"></i> Daftar Jasa </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th width="20%">Nama Jasa</th>
                <th width="15%">Harga</th>
                <th width="20%">Deskripsi</th>
                <th width="20%">Kategori</th>
                <th width="9%">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php $count = 1; foreach($productlist->result() as $pl) : ?>
                  <tr>
                    <td><?= $count++; ?></td>
                    <td><?= $pl->product_name ?></td>
                    <td>Rp <?= number_format ( $pl->price, 2 ); ?></td>
                    <td><?= $pl->short_desc; ?></td>
                    <td><?= $pl->category_name ?></td>
                    <td>
                      <a href='<?= site_url('admin/edit_product/'.$pl->product_id)?>'>
                        <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                      </a>
                      <?php if($pl->active_flag == 0): ?>
                        <a href='<?= site_url('product/changeActiveStatus/'.$pl->product_id).'/1'?>'>
                          <button class="btn btn-danger btn-sm"><i class="fa fa-close"></button>
                        </a>
                      <?php elseif($pl->active_flag == 1): ?>
                        <a href='<?= site_url('product/changeActiveStatus/'.$pl->product_id).'/0'?>'>
                          <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                        </a>
                      <?php endif; ?>
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
</div>
