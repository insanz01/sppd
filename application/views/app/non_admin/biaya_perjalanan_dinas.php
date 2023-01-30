<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Biaya Perjalanan Dinas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <!-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active"></li>
          </ol> -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <a href="<?= base_url() . $file_template ?>" download class="btn btn-primary float-right mb-2">UNDUH TEMPLATE</a>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <form action="<?= base_url('na/bpd/add') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="file_dokumen">Dokumen</label>
                      <input type="file" name="file_dokumen" id="file_dokumen" class="form-control">
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">UNGGAH DOKUMEN</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  // const getNameOfMember = () => {

  // }
</script>