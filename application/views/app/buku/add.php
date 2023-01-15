<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Buku</h1>
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
          <div class="card">
            <div class="card-body">
              <form action="<?= base_url('buku/do_add') ?>" method="post">
                <div class="form-group">
                  <label for="isbn">ISBN</label>
                  <input type="text" name="ISBN" class="form-control" id="isbn" required>
                </div>
                <div class="form-group">
                  <label for="judul">Judul Buku</label>
                  <input type="text" name="judul" class="form-control" id="judul" required>
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi Buku</label>
                  <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label for="penulis">Penulis Buku</label>
                  <input type="text" name="penulis" class="form-control" id="penulis" required>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">SIMPAN DATA BUKU</button>
                </div>
              </form>
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