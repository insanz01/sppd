<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Membership</h1>
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
              <form action="<?= base_url('membership/do_edit') ?>" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="form-group">
                  <label for="nama-lengkap">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="nama-lengkap" value="<?= $membership['nama_lengkap'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="nomor-identitas">Nomor Identitas</label>
                  <input type="text" name="no_identitas" class="form-control" id="nomor-identitas" value="<?= $membership['no_identitas'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10"><?= $membership['alamat'] ?></textarea>
                </div>
                <div class="form-group">
                  <label for="nomor-hp">Nomor HP</label>
                  <input type="text" name="nomor_hp" class="form-control" id="nomor-hp" value="<?= $membership['nomor_hp'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" value="<?= $membership['email'] ?>" required>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">SIMPAN DATA MEMBER</button>
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