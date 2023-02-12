<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Kwitansi</h1>
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
              <a href="<?= base_url('kwitansi/add') ?>" class="btn btn-primary float-right mb-2">TAMBAH KWITANSI</a>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <table class="table custom-table">
                    <thead>
                      <th>#</th>
                      <th>NIP Karyawan</th>
                      <th>Nama</th>
                      <th>File</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php $index = 1 ?>
                      <?php foreach ($kwitansi as $k) : ?>
                        <tr>
                          <td><?= $index++ ?></td>
                          <td><?= $k['NIP'] ?></td>
                          <td><?= $k['nama'] ?></td>
                          <td>
                            <a href="<?= base_url("uploads/documents/") . $k['file'] ?>" download>
                              <i class="fas fa-fw fa-download"></i>
                            </a>
                          </td>
                          <td>
                            <a href="<?= base_url('kwitansi/delete/') . $k['id'] ?>" class="badge badge-sm badge-danger badge-pill">hapus</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
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