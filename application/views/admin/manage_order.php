  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?= site_url('admin');?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Daftar Pemesanan</li>
      </ol>
      <!-- Ordered Cart Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-shopping-cart"></i> Daftar Pemesanan</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pembeli</th>
                  <th>Total Nilai</th>
                  <th>Waktu Checkout</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php $count = 1; foreach($orders as $order): ?>
                  <tr align="center">
                    <td><?= $count++;?></td>
                    <td align="left"><?= $order->first_name . " " . $order->last_name; ?></td>
                    <td>Rp <?= number_format ( $order->totalPrice, 2  );  ?></td>
                    <td><?= date_format(date_create($order->date_buy), "d M Y H:i"); ?></td>
                    <td><a href="<?= site_url('admin/view_order/'.$order->cart_id)?>">Lihat Pemesanan</a></td>
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

    <script>
    $(document).ready(function() {
        $('table.display').DataTable();
    } );
    </script>
 