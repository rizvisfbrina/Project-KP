  <div class="content-wrapper">
    <div class="container-fluid">
      <?php echo $this->session->flashdata("msg"); ?>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?= site_url('user/dashboard');?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Keranjang Anda</li>
      </ol>
      <!-- Active Cart Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-shopping-cart"> </i> Keranjang Anda</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table " id="dataTable" width="100%" cellspacing="0">
              <tbody>
                <?php 
                  if ($exist):
                  $count = 1;
                ?>
                  <thead>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Jasa</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Opsi</th>
                  </thead>
                  <?php foreach($cartData as $cart): ?>
                  <tr align="center">
                    <td rowspan=1>
                      <?= $count++;?>
                    </td>
                    <td rowspan=1>
                      <img src="<?= base_url($cart->image_link)?>" class="img-fluid img-thumbnail" height="70px" width="70px"></img>
                    </td>
                    <td rowspan=1 align="left" >
                      <a href="<?= site_url('shop/product/'.$cart->product_id);?>">
                        <strong><em><?= $cart->product_name; ?></em></strong>
                      </a>
                    </td>
                    <td rowspan=1 align="left" >
                      <?= $cart->quantity;?>
                    </td>
                    <td rowspan=1 align="left" >
                      Rp <?= number_format ( $cart->price * $cart->quantity , 2 );?>
                    </td>
                    <td rowspan=1>
                      <button data-toggle="modal" data-target="#cartmodal" class="btn-sm btn-danger passID" data-id="<?= $cart->product_cart_id; ?>" onclick="passID(<?= $cart->product_cart_id; ?>)"><i class="  fa fa-trash-o"></i></button>
                    </td>
                  </tr>
                  <!-- <tr>
                    <td rowspan=1 colspan=3 align="left"><?= $cart->short_desc; ?></td>
                  </tr> -->
                <?php
                  endforeach;
                ?>
                <tr>
                  <td colspan=3></td>
                  <th colspan=1>Total Harga<br>Pajak </th>
                  <th colspan='2'>Rp <?= number_format( $totalPrice1, 2); ?><br>Rp <?= number_format( $totalTax , 2); ?></th>
                </tr>
                <tr>
                  <td colspan=3></td>
                  <th colspan=1>Total yang harus dibayar </th>
                  <th colspan='2'>Rp <?= number_format( $totalPrice , 2); ?></th>
                </tr>
   
               <?php else: ?> -->
                <tr align="center"><td>Keranjang anda kosong</td></tr>
                 <?php endif; ?>
              </tbody>
            </table>
          </div>
          <?php if($exist):?>
          <a href="<?= site_url('user/checkout')?>">
            <button class="btn btn-primary">
              Check Out
            </button>
          </a>
          <?php endif; ?>
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

    <script>
    function passID(productID) {
      $("#productCartId").val(productID);
    }
    </script>
 