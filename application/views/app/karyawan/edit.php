<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Karyawan</h1>
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
              <form action="<?= base_url('karyawan/do_edit') ?>" method="post">
                <input type="hidden" name="id" value="<?= $k['id'] ?>">
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="nama" value="<?= $k['nama'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="NIP">NIP</label>
                  <input type="text" name="NIP" class="form-control" id="NIP" value="<?= $k['NIP'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10"><?= $k['alamat'] ?></textarea>
                </div>
                <div class="form-group">
                  <label for="nomor-hp">Nomor HP</label>
                  <input type="text" name="nomor_hp" class="form-control" id="nomor-hp" value="<?= $k['nomor_hp'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" value="<?= $k['email'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" name="jabatan" class="form-control" id="jabatan" value="<?= $k['jabatan'] ?>" required>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">SIMPAN DATA KARYAWAN</button>
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