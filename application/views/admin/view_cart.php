  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?= site_url('admin');?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?= site_url('admin/manage_cart');?>">Daftar Keranjang</a>
        </li>
        <li class="breadcrumb-item active">Lihat Keranjang</li>
      </ol>
      <!-- Active Cart Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-shopping-cart"></i> Keranjang</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Jasa</th>
                  <th>Nilai Per Unit</th>
                  <th>Jumlah</th>
                  <th>Total Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php $count = 1; foreach($products as $product): ?>
                  <tr align="center">
                    <td><?= $count++;?></td>
                    <td align="left"><?= $product->product_name; ?></td>
                    <td>Rp <?= number_format($product->price, 2); ?></td>
                    <td><?= $product->quantity; ?></td>
                    <td>Rp <?= number_format ( $product->quantity * $product->price, 2  );  ?></td>
                  </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4"  align="right"><strong>
                    <!-- Total Nilai<br>Pajak<br> -->
                    Total yang harus dibayar</strong></td>
                    <td>
                     <!--  Rp <?= number_format ( $product->price * $product->quantity , 2  );  ?><br>
                      Rp <?= number_format ( ($product->price * $product->quantity)*0.1, 2  );  ?><br> -->
                      Rp <?= number_format ( $totalPrice, 2  );  ?></td>
                  </tr>
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
 