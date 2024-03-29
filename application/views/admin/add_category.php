<div class="content-wrapper">
  <div class="container-fluid">
    <?php echo $this->session->flashdata("msg"); ?>
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?= site_url('admin');?>">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Tambah Kategori</li>
    </ol>
    <!-- Example DataTables Card-->
    <?= form_open('category/add', array('class' => 'form-horizontal')) ?>
    <div class="card mb-3">
      <div class="card-header">
        Edit Kategori 
      </div>
      <div class="card-body">
        <div class="form-group">
          <label class="control-label">Nama Kategori</label>
          <div>
            <input id="category_name" type="text" class="form-control" name="category_name">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label">Kategori Awal</label>
          <div>
            <select id="parent_category_id" type="text" class="form-control" name="parent_category_id">
              <option value="0">Tidak ada</option>
              <?php 
                foreach($parent_categories as $cat):
              ?>
                <option value="<?= $cat->category_id?>">
                  <?= $cat->category_name; ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-12" align="center">
            <div class="form-group">
                <input type="submit" value="Tambah" Class="btn btn-primary btn-rounded">
            </div>
          </div>
        </div> 
      </div>
    </div>
    <?= form_close(); ?>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
</div>



